// Copyright (C) 2008 Ilya S. Lyubinskiy. All rights reserved.
// Technical support: http://www.php-development.ru/
//
// YOU MAY NOT
// (1) Remove or modify this copyright notice.
// (2) Re-distribute this code or any part of it.
//     Instead, you may link to the homepage of this code:
//     http://www.php-development.ru/javascripts/ajax-chat.php
// (3) Use this code or any part of it as part of another product.
//
// YOU MAY
// (1) Use this code on your website.
//
// NO WARRANTY
// This code is provided "as is" without warranty of any kind.
// You expressly acknowledge and agree that use of this code is at your own risk.


// ***** Var *******************************************************************

var chat_smsg = false;

var chat_mptr = -1;
var chat_rand = -1;
var chat_tout;

var chat_addr;
var chat_room;
var chat_user;
var chat_pass;

var chat_usrs;
var chat_msgs;
var chat_wait;
var chat_priv;

var chat_temp_msgs = new Array();
var chat_msgs_rcvd = {};
var chat_player_rooms = {};

var chat_focu = true;
var chat_colr = '#484848';
if (getCookie('chat_colr'))
     chat_colr = getCookie('chat_colr');
else chat_colr = '#'+(Math.floor(6*Math.random())*32+48).toString(16)
                    +(Math.floor(6*Math.random())*32+48).toString(16)
                    +(Math.floor(6*Math.random())*32+48).toString(16);
setCookieLT('chat_colr', chat_colr, 365*24*3600);


// ***** XMLHttpRequest ********************************************************

if(!window.XMLHttpRequest)
{
  var XMLHttpRequest = function()
  {
    try{ return new ActiveXObject(   "MSXML3.XMLHTTP");     } catch(e) {}
    try{ return new ActiveXObject(   "MSXML2.XMLHTTP.3.0"); } catch(e) {}
    try{ return new ActiveXObject(   "MSXML2.XMLHTTP");     } catch(e) {}
    try{ return new ActiveXObject("Microsoft.XMLHTTP");     } catch(e) {}
  };
}

var chat_XMLHttp_add = new XMLHttpRequest();
var chat_XMLHttp_get = new XMLHttpRequest();
var chat_XMLHttp_log = new XMLHttpRequest();


// ***** chat_api_color ********************************************************

function chat_api_color(col)
{
  setCookie ('chat_colr', chat_colr = col);
  popup_hide('color');
}


// ***** chat_api_smiley *******************************************************

function chat_api_smiley(str)
{
  var input = document.getElementById('send');
  input.focus();

  if (input.selectionStart !== undefined &&
      input.selectionEnd   !== undefined &&
      input.textLength     !== undefined)
  {
    pos  = input.selectionStart;
    val1 = input.value.substr(0, input.selectionStart);
    val2 = input.value.substr(input.selectionEnd, input.textLength);

    input.value          = val1+'%%'+str+'%%'+val2;
    input.selectionStart = pos+str.length+4;
    input.selectionEnd   = pos+str.length+4;

    return;
  }

  if (document.selection             !== undefined &&
      document.selection.createRange !== undefined)
  {
    range = document.selection.createRange();
    range.text = '%%'+str+'%%';
    range.select();

    return;
  }

  input.value += '%%'+str+'%%';
}


// ***** chat_api_onload *******************************************************

function chat_api_onload(room, focu, user, pass)
{
  chat_focu = focu; // set the global
  document.getElementById('room_child').style.display = 'none'; // hide the room panel
  if (chat_focu) document.getElementById('send').focus(); // decide if you are going to focus the cursor in the text field or not
  chat_reset(room, user, pass); // reset the chat
  
  if (user) // If the user is already logged in.
  {
    document.getElementById( 'user').value = user; // assume both a user and a pass were entered
    document.getElementById( 'pass').value = pass; // set them on the page
    document.getElementById('guser').value = (user.indexOf('GT-') == 0) ? user.substr('GT-'.length, 1024) : ''; // set the guest username while you're at it
    notifyServer_RoomChange(user.indexOf('GT-') != 0); // log the incident
  }
  else displayLoginPrompt(); // login succeeded

  chat_focu = true;
}


// ***** chat_date *************************************************************

function chat_date_aux(num)
{
  if (num < 10) return '0'+num; else return num;
}

function chat_date(offset)
{
  mm = new Array('Jan', 'Feb', 'Mar',
                 'Apr', 'May', 'Jun',
                 'Jul', 'Aug', 'Sep',
                 'Oct', 'Nov', 'Dec');
  d1 = new Date();
  d2 = new Date();
  d2.setTime(d2.getTime()+offset*1000);
  if ((d2.getDate() == d1.getDate()) && (d2.getMonth() == d1.getMonth()))
       return                                                        chat_date_aux(d2.getHours())+':'+chat_date_aux(d2.getMinutes());
  else return chat_date_aux(d2.getDate())+' '+mm[d2.getMonth()]+', '+chat_date_aux(d2.getHours())+':'+chat_date_aux(d2.getMinutes());
}


//***** displayLoginPrompt ************************************************************
/* This function displays the registered user login prompt. Is essentially a wrapper. Just here for
 * consistency between calls to popup_show. 
 */
function displayLoginPrompt()
{
	popup_show('login', 'login_drag', 'login_exit', 'element', 50,  50, 'chat', true);
}

//***** displayGuestLoginPrompt ************************************************************
/* This function displays the guest login prompt. Is essentially a wrapper. Just here for
 * consistency between calls to popup_show. 
 */
function displayGuestLoginPrompt()
{
	popup_show('glogin', 'glogin_drag', 'glogin_exit', 'element', 50,  50, 'chat', true);
}

// ***** chat_parse ************************************************************

function chat_parse(str)
{
  str  = str.trim();
  return str.split(/\r\n/); /*Splitting on this is not very reliable*/
}


//***** preparePrivateChat ************************************************************
/**
 * Sets up the private chat variables between two characters. Ordering is irrelevant.
 * 
 * @param user1 - The first character.
 * @param user2 - The second character.
 */
function preparePrivateChat(user1, user2)
{
  if (chat_msgs[user1] == undefined) chat_msgs[user1] = new Array();
  if (chat_msgs[user2] == undefined) chat_msgs[user2] = new Array();
  if (chat_msgs[user1][user2] == undefined) chat_msgs[user1][user2] = '';
  if (chat_msgs[user2][user1] == undefined) chat_msgs[user2][user1] = '';
  if (chat_wait[user1] == undefined) chat_wait[user1] = new Array();
  if (chat_wait[user2] == undefined) chat_wait[user2] = new Array();
  if (chat_wait[user1][user2] == undefined) chat_wait[user1][user2] = false;
  if (chat_wait[user2][user1] == undefined) chat_wait[user2][user1] = false;
}


// ***** displayRoomChatWindow ************************************************************
/** 
 * Sets the variables properly for displaying a given window of messages. Also
 * sets up links required for navigating from a private window back to the main room
 * (or removing them if in a PM and switching out).
 *
 * @param focus - Are we going to want to set focus?
 */

function displayRoomChatWindow()
{
    chat_priv = '.'; // We aren't chatting with anyone privately anymore. This resets that.
    if (chat_focu) 
        document.getElementById('send').focus();
    document.getElementById('header_messages').innerHTML = chat_room; // show the room name
    displayMessages();
}

// ***** displayPrivateChatWindow ************************************************************
/** 
 * Sets the variables properly for displaying a given window of messages. Also
 * sets up links required for navigating from a private window back to the main room
 *
 * @param user - The user to set up the private chat window with.
 */

function displayPrivateChatWindow(name)
{
    if (name == chat_user) return; // No need to private message ourselves.
    if (chat_focu) 
        document.getElementById('send').focus();

    chat_priv = name;
    preparePrivateChat(chat_user, name);
    document.getElementById('header_messages').innerHTML = '<a href="javascript:displayRoomChatWindow()">Back to '+chat_room+'</a>'+name;
    displayMessages();
}


// ***** chat_reset ************************************************************
// may be called with only a room and null user/pass

function chat_reset(room, user, pass)
{
  chat_mptr  = -1;

  chat_room = room; // set globals
  chat_user = user;
  chat_pass = pass;

  chat_usrs = new Array(); // re-initialize these arrays
  chat_msgs = new Array();
  chat_wait = new Array();
  chat_priv = '.';

  chat_temp_msgs = new Array(); // clear the pending messages
  chat_msgs_rcvd = {}; // clear the received post history
  chat_player_rooms = {}; // for tracking who is where

  chat_msgs['.'] = ''; // Wipes the message window.
  displayRoomChatWindow(); // Display the current room.

  clearTimeout(chat_tout); // stop the looping ajax
  chat_XMLHttp_add.abort(); // should be able to remove these soon
  chat_XMLHttp_get.abort();
  chat_XMLHttp_log.abort();
}

// ***** chat_msgs_add *********************************************************

function chat_msgs_add()
{
	// first, security pass
    if (!chat_user || !chat_pass) { displayLoginPrompt(); return; }
    
    // second, check for blank
	var post_text = $('#send').val();
    if (!post_text || post_text == "") return;
	
    // third, build the post
    var timestamp = new Date().getTime(); // Switched the rand value to a timestamp.  This should fix any guid problems and false duplicate posts.
    timestamp = timestamp / 1000;
    var newPost = {
	    rand: timestamp,
	    addr: chat_addr,
	    user: chat_user,
	    pass: chat_pass,
	    priv: chat_priv,
	    colr: chat_colr,
	    data: post_text,
	    room: chat_room,
	    tries: 1
    };
    chat_temp_msgs.push(newPost);
    
    // fourth, call it!
	notifyServer_Post(newPost);
	
	// fourth, clean up
	document.getElementById('send').value = '';
	if (chat_focu) document.getElementById('send').focus();
}

function resend_dead_posts(){
	var chat_temp_msgs_length = chat_temp_msgs.length;
	for(var i = 0; i < chat_temp_msgs_length; i++){
		if(chat_temp_msgs[i].tries <= 5){ // try 5 times
			notifyServer_Post(chat_temp_msgs[i]);
			chat_temp_msgs[i].tries++;
		}else{
			confirmPostRand(chat_temp_msgs[i].rand);
		}
	}
}

// ***** notifyServer_Post **********************************************************
/**
 * Ship a message off to the server for processing. Still has to be verified that
 * the user is allowed to post, is posting from a legal character, etc etc. 
 *
 * @param newPost - The post data.
 */
function notifyServer_Post(newPost)
{
	$.ajax({
		url: chat_path+"php/msg_add.php",
		data: newPost,
		dataType: "JSON"
	})
	.done(function(response) {
		if(response.success){
			document.getElementById('log_add').innerHTML = response.text;
			
			if(typeof(response.messages.length) != 'undefined' && response.messages.length > 0){
				for(var i = 0; i< response.messages.length; i++){
					if(response.messages[i].trim() != ""){
						chat_msgs['.'] += '<b>System:</b> '+response.messages[i]+'<br />';
					}
				}
			}
		}else{
			if(response.text.trim() != ""){
				chat_msgs['.'] += '<b>System:</b> '+response.text+'<br />';
			}
	        
	        confirmPostRand(newPost.rand);
	        displayMessages();
		}
	});

}

// ***** chat_msgs_get **********************************************************

function chat_msgs_get()
{
  if(chat_rand % 5 == 0) { resend_dead_posts(); }; // every three seconds or so, retry the dead posts.
  var playDing = false;
  
  chat_tout = setTimeout("chat_msgs_get();", Math.round(1000*chat_timeout));
  chat_rand += 1;
  
  var rand = chat_rand;
  var room = chat_room;
  var user = chat_user;
  var pass = chat_pass;
  var mptr = chat_mptr;
	$.ajax({
		url: chat_path+"php/msg_get.php",
		data: {rand: rand,
			room: room,
			user: user,
			pass: pass,
			mptr: mptr},
		dataType: "JSON"
	})
	.done(function(response) {
		if(response.success){
	      document.getElementById('log_get').innerHTML = response; // Store the whole response

	      //var data = chat_parse(response.text); // parse the response 
	      if (response.operation == '-' && chat_user && chat_pass) { // If I got a remove event and the username and password are set 
	    	  chat_api_onload(chat_room, true); // refresh the chat?
	    	  return; 
	      }
	      /*var initializationRun = (chat_mptr == -1);*/  // I'm sure I'll need this eventually
	      for (var i = 0; i < response.lines.length; i++) // now, go through the lines
	      {
	    	line = response.lines[i];
	    	
	    	if(typeof(chat_msgs_rcvd[line.lineId]) != "undefined"){ continue; }; // if I've already seen this post, skip.
	    	chat_msgs_rcvd[line.lineId] = true; // set this to true, then process the post.
	        chat_mptr =  Math.max(chat_mptr, line.lineId);

	        if (line.type == 'room' && line.operation == 'add') // add someone to the room
	        {
	          if (chat_smsg) // if system messages are turned on
	        	  if (line.roomname == chat_room) // and the room is the room we're in
	        		  chat_msgs['.'] += '<b>System:</b> user <b>'+generateCharacterLink(line.handle, 'black', false)+'</b> enters the room<br />';
	          chat_usrs[line.handle] = new Array(line.roomname, line.gender, line.status, true);
	          chat_player_rooms[line.handle] = line.roomname;
	          //i += 5;
	        }

	        if (line.type == 'room' && line.operation == 'remove') // remove someone from the room
	        {
	          if (chat_smsg) 
	        	  if (line.roomname == chat_room) 
	        		  chat_msgs['.'] += '<b>System:</b> user <b>'+generateCharacterLink(line.handle, 'black', false)+'</b> leaves the room<br />';
	          chat_usrs[line.handle] = false;
	          //i += 3;
	        }

	        if (line.type == 'away') // set the away status
	        {
	          if (chat_usrs[line.handle]) 
	        	  chat_usrs[line.handle][3] = line.operation == 'activate';
	          //i += 3;
	        }

	        if (line.type == 'line') // process a post
	        {
	          confirmPostRand(line.chat_rand);

	          var message = "";
	          if($('#msg_'+line.lineId).length == 0){ // if the element does not exist in the form already 
		          chat_usrs[line.handle] = new Array(chat_room, line.gender, line.status, true);
		          message = line.text;
		          
		          // parse emoticons
		          message = message.replace(/%%(\w+)%%/g, '<img src="'+chat_path+'smileys/$1.gif" alt="" />');
		          
		          // check for operators
		          var delimPos = message.indexOf(" ");
		          delimPos = (message.indexOf(",") != -1 && message.indexOf(",") < delimPos ? message.indexOf(",") : delimPos );
		          delimPos = (message.indexOf("'") != -1 && message.indexOf("'") < delimPos ? message.indexOf("'") : delimPos );
		          if( delimPos > 0){
		        	  operator = message.substr(0,delimPos);// operator is whatever comes before the space, comma, or apostrophy, or blank if none of those exist.
		        	  if(operator == "/me"){
		        		  message = ""+message.substr(delimPos);
		        	  }else{
		        		  message = ":  "+message;
		        	  }
		          }else{
		        	  message = ":  "+message;
		          }
		          
		          // parse pseudo-html
		          message = replaceAndBalanceTag(message, /\[i\]/gi, '<i>', /\[\/i\]/gi,'</i>' );
		          message = replaceAndBalanceTag(message, /\[b\]/gi, '<b>', /\[\/b\]/gi,'</b>' );
		          message = replaceAndBalanceTag(message, /\[u\]/gi, '<u>', /\[\/u\]/gi,'</u>' );
	
		          // convert url's into hyperlinks
		          message = replaceURLWithHTMLLinks(message);

		          if (line.recipient_username == '.'){ // if this message is public
		        	  chat_msgs['.'] += '<span id="line_'+line.lineId+'" style="color: '+line.color+'"><b>['+chat_date(-line.interval)+'] '+generateCharacterLink(line.handle, line.color)+'</b>'+ message +'</span><br />';
		          }
		          else // it's a private message
		          {
		            preparePrivateChat(line.handle, line.recipient_username);
		            chat_msgs[line.handle][line.recipient_username] += '<span id="line_'+line.lineId+'" style="color: '+line.color+'"><b>['+chat_date(-line.interval)+'] '+generateCharacterLink(line.handle, line.color)+'</b>'+ message +'</span><br />';
		            chat_msgs[line.recipient_username][line.handle] += '<span id="line_'+line.lineId+'" style="color: '+line.color+'"><b>['+chat_date(-line.interval)+'] '+generateCharacterLink(line.handle, line.color)+'</b>'+ message +'</span><br />';
		            chat_wait[line.handle][line.recipient_username]  = false;
		            chat_wait[line.recipient_username][line.handle]  = true;
		          }
	          }
	          
		      if(document.getElementById('pingOnNew').checked && chat_room == line.roomname){ // ding on all updates for this room
		    	  playDing = true;
		      }
		      if(chat_room == line.roomname){ // ding if my name is mentioned
		    	  var trimmedUsername = chat_user.replace('GT-','');
		    	  if(message.indexOf(trimmedUsername) >= 0){
		    		  playDing = true;
		    	  }
		      }
		      if(line.recipient_username == chat_user){ // ding if I get a Priv
		    	  playDing = true;
		      }
	          //i += 8;
	        }
	      }
	      if(playDing){
	          var ding = $('#audio_ding');
	          ding = ding.get(0).play();
	      }
	      
	      if (response.lines.length > 0)
	      {
	        displayMessages();
	        displayUserList();
	      }
		}else{
			if(response.error.trim() != ""){
		        chat_msgs['.'] += '<b>System:</b> '+response.error+'<br />';
			}
	        displayMessages();
		}
		
	});
}

// ***** notifyServer_RoomChange **********************************************************
/**
 * This function is called any time a character changes the room they are currently in.
 * Updates the local log with information about characters moving about the rooms.
 * It will also be called when a user logs in for the first time, or switches characters. One
 * thing to note is that credentials are checked when this function is called, which is why
 * document elements are being addressed here. Also calls for a chat reset for the user.
 *
 * @param registered_user - Is the user registered, or is it a guest account? (True/False)
 */
function notifyServer_RoomChange(registered_user)
{
  clearTimeout(chat_tout);
  chat_XMLHttp_add.abort();
  chat_XMLHttp_get.abort();
  chat_XMLHttp_log.abort();

  chat_rand += 1;
  if (registered_user)
       chat_XMLHttp_log.open("get", chat_path+"php/msg_log.php?rand="+chat_rand+
                                                             "&room="+encodeURIComponent(chat_room)+
                                                             "&user="+encodeURIComponent(document.getElementById( 'user').value)+
                                                             "&pass="+encodeURIComponent(document.getElementById( 'pass').value)+
                                                             "&gues=0");
  else chat_XMLHttp_log.open("get", chat_path+"php/msg_log.php?rand="+chat_rand+
                                                             "&room="+encodeURIComponent(chat_room)+
                                                             "&user="+encodeURIComponent(document.getElementById('guser').value)+
                                                             "&pass="+encodeURIComponent(chat_pass)+
                                                             "&gues=1");
  chat_XMLHttp_log.send(null);
  chat_XMLHttp_log.onreadystatechange = function()
  {
    if(chat_XMLHttp_log.readyState == 4 && chat_XMLHttp_log.status == 200)
    {
      document.getElementById('log_log').innerHTML = chat_XMLHttp_log.responseText;

      var data = chat_parse(chat_XMLHttp_log.responseText);
      if (data[0] == 'OK')
      {
        chat_reset(chat_room, data[1], data[2]);
        popup_hide( 'login');
        popup_hide('glogin');
        /*document.location.reload(true);*/
      }
      if (data[0] == 'FAILED') { alert(data[1]); displayLoginPrompt(); }
      chat_msgs_get();
    }
  };
}


// ***** generateCharacterLink **********************************************************
/**
 * Takes in information about a character and returns an html string to allow for private messages
 * with this character.
 *
 * @param name - Name of the character/user to use for the link.
 * @param color - The color of the link.
 * @param sidebar - Is this link displayed on the side bar? (True / False )
 * @return - A valid html string with encoded JS to switch to private messaging.
 */
function generateCharacterLink(name, color, sidebar)
{
  sidebar = (typeof sidebar == 'undefined') ? false : sidebar ; // First, make sure away is not undefined,

  var retString = "";
  if(sidebar){ retString += '<img style="cursor: pointer;" src="'+SITE_ROOT+'/images/twilight_sparkle_cutie_mark2_15_tall.png" onClick="showHUD(this, \''+name+'\'); return false;" />&nbsp;';}
  // if there is a status, then add the icon
  if(typeof chat_usrs[name][2] != 'undefined' && chat_usrs[name][2] != 'none'){
	  retString += '<img src="'+chat_path+'style/status/'+chat_usrs[name][2]+'.png" alt="" style="margin-right: 0px;" />';
  }
  // If there is a gender, add the icon.
  if(typeof chat_usrs[name][1] != 'undefined' && chat_usrs[name][1] != 'none'){
	  retString += '<img src="'+chat_path+'style/gender/'+chat_usrs[name][1]+'.png" alt="" style="margin-right: 2px;" />';
  }

  /// Add the name and the javascript that fires the switch to private messaging
  retString += '<a style="color: '+color+'" href="#" onClick="displayPrivateChatWindow(\''+name+'\', true); return false;">' + name + '</a>';

  // If the character is on the side bar and away, add the message.
  if(sidebar && !chat_usrs[name][3]){
	  retString += '&nbsp;(away)';
  }

  return retString;
}


// ***** displayMessages **********************************************************
/* Wipes the message box's text and sets it to whatever is appropriate. Takes in account
 * whether the user is chatting privately, and makes use of the autofocus checkbox to
 * determine scrolling behavior.
 */
function displayMessages()
{
  // Do we display the current room's messages or a set of private messages for a certain user?
  document.getElementById('messages').innerHTML = (chat_priv == '.') ? chat_msgs[chat_priv] : chat_msgs[chat_user][chat_priv];
  
  // If autofocus is checked, scroll to the bottom of the message pane.
  if(document.getElementById('autofocus').checked){ 
	  document.getElementById('messages').scrollTop = document.getElementById('messages').scrollHeight+1024;
  }
}


// ***** displayUserList **********************************************************
/**
 * Reads through the chat_usrs variable to generate and display the user list on the side.
 * */
function displayUserList()
{
  var users;
  chat_usrs.sort();

  users = '';// initialize users to blank
  for (var i in chat_usrs) // for every character in the internal list of presumable all characters who were tracked in the history of the logfile...
	if (
			i != chat_user && // it's not me
			chat_usrs[i] && // and the character isn't false...?
			chat_wait[chat_user] != undefined && // I'm in wait mode?
			chat_wait[chat_user][i] != undefined && // and I'm waiting on this guy
			chat_wait[chat_user][i]) // and it's my turn ??( there is a value here besides 'false' ) 
      users = generateCharacterLink(i,'black', true)+'<br />'+users; 
  document.getElementById('users_priv').innerHTML = users; // get the users_priv element and add the users to it.
  document.getElementById('users_priv').style.display = users ? 'block' : 'none'; // turn the div visible if users is set.

  users = ''; // reset users.
  for (var i in chat_usrs)// for each char
    if (
    		i != chat_user && // if it's not me
    		chat_usrs[i] && // its a user
    		chat_usrs[i][0] == chat_room) // and they're in my room
      users = generateCharacterLink(i,'black', true)+' <br />'+users; 
  if (chat_user) // if I'm here
      users = generateCharacterLink(chat_user, 'black', true)+' <br />'+users; // put me on top
  document.getElementById('users_this').innerHTML = users; // connect to this room's div and dump the users in
  document.getElementById('users_this').style.display = users ? 'block' : 'none'; // show it if people are here.

  users = ''; // reset users
  for (var i in chat_usrs)
    if (
    		i != chat_user && // if it's not me
    		chat_usrs[i] && // they're truely here
    		chat_usrs[i][0] != chat_room) // and NOT in my room
      users = generateCharacterLink(i,'black', true)+' <br />'+users; 
  document.getElementById('users_othr').innerHTML = users; // dump them into other.
  document.getElementById('users_othr').style.display = users ? 'block' : 'none';  // show it if it needs to be shown.
  // no return value.
};

//***** replaceURLWithHTMLLinks **********************************************************

function replaceURLWithHTMLLinks(text) {
	  var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/i;
	  return text.replace(exp,"<a href='$1' target='_blank'>$1</a>"); 
};

//***** Tag Replacing/balancing **********************************************************

function replaceAndBalanceTag( message, openRegex, openTag, closeRegex, closeTag){
	
	openTagCount = (message.match(openRegex)) ? message.match(openRegex).length : 0;
	message = message.replace(openRegex, openTag);
	closeTagCount = (message.match(closeRegex)) ? message.match(closeRegex).length : 0;
	message = message.replace(closeRegex, closeTag);
	for(var i=0; i < openTagCount - closeTagCount; i++){
		  message += closeTag;
	}
	return message;
};

//***** etc **********************************************************

function confirmPostRand( rand ){
  var temp_temp_msgs = new Array(); // temporary array.
  var confirmed = false; // stores if I found the rand in the list of pending posts
  var length = chat_temp_msgs.length;
  for(var i = 0; i< length; i++){ // go through the pending posts
	  if(chat_temp_msgs[i].rand != rand){ // if it's not the one I'm looking for
		  temp_temp_msgs.push(chat_temp_msgs[i]); // move it into the temp
	  }else{ // if it is
		  confirmed=true; // don't move it and set confirmed to true
	  }
  }
  if(confirmed){
  	chat_temp_msgs = temp_temp_msgs; // update chat_temp_msgs with the removed row
  }
  return confirmed;
};

function printTmpRands(){
	var string = "chat_temp_messages has ids: (";
	for(var i = 0; i< chat_temp_msgs.length; i++){
		string += chat_temp_msgs[i].rand + ", ";
	}
	console.log(string + ");");
}