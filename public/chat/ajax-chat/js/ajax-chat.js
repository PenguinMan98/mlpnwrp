// Copyright (C) 2013 Pengy Programming

// ***** Var *******************************************************************

var chat_smsg = false;

var chat_message_id = -1;
var chat_rand = -1;
var chat_timeout;

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
var chat_private = new Array();

var chat_focu = true;
var chat_colr = '#484848';
if (getCookie('chat_colr'))
     chat_colr = getCookie('chat_colr');
else chat_colr = '#'+(Math.floor(6*Math.random())*32+48).toString(16)
                    +(Math.floor(6*Math.random())*32+48).toString(16)
                    +(Math.floor(6*Math.random())*32+48).toString(16);
setCookieLT('chat_colr', chat_colr, 365*24*3600);

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

function chat_api_onload(room, registered, handle)//, focu
{
	hideRooms(); // hide the rooms panel
	$('#header_messages').html(roomList[room]); // change the room name

	document.getElementById('send').focus(); // decide if you are going to focus the cursor in the text field or not
	
	chat_reset(room, registered, handle); // reset the chat
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


// ***** chat_login ************************************************************

function chat_login(asuser)
{
  if ((document.getElementById( 'login').style.display != 'block') && /* if login is hidden AND */
      (document.getElementById('glogin').style.display != 'block') || asuser){ /* guestlogin is hidden OR asuser is true */
	  if(document.getElementById( 'ajaxChatLogin')){
		  popup_show('login', 'login_drag', 'login_exit', 'element', 50,  50, 'chat', true);
		  // popup_show('glogin', 'glogin_drag', 'glogin_exit', 'element', 50,  50, 'chat', true); // show the guest login for now
	  }else{
		  popup_show('glogin', 'glogin_drag', 'glogin_exit', 'element', 50,  50, 'chat', true);
	  }
  }
  if (chat_focu && document.getElementById( 'login').style.display == 'block') document.getElementById( 'user').focus();
  if (chat_focu && document.getElementById('glogin').style.display == 'block') document.getElementById('guser').focus();
}


// ***** chat_parse ************************************************************

function chat_parse(str)
{
  str  = str.trim();
  return str.split(/\r\n/); /*Splitting on this is not very reliable*/
}


// ***** chat_priv_prepair ************************************************************

function chat_priv_prepair(user1, user2)
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


// ***** chat_priv_switch ************************************************************
// chat_reset calls this with a '.' and false

function chat_priv_switch(user, focus)
{
  if (chat_focu && focus) 
	document.getElementById('send').focus();
  if (user == chat_user) return;
  chat_priv = user;
  chat_priv_prepair(chat_user, user);
  if (user != '.'){
	  $('#exit_pm_text').html('Private with '+user);
	  showExitPM();
  }else{
	  hideExitPM();
  }
  /*if (user == '.')  // if user is '.', I'm exiting.
      document.getElementById('header_messages').innerHTML = chat_room; // show the room name
  else // otherwise,  show the link back to the main chat
	  document.getElementById('header_messages').innerHTML = '<a href="javascript:chat_priv_switch(\'.\', true)">Back to '+chat_room+'</a>'+user;*/
  chat_out_msgs();
}
function showExitPM(){
	// show the element
	$('#exit_pm').css('display','block');
	// animate moving right to 0
	$('#exit_pm').animate({
			opacity: '1',
			right: '150px'
		},1000,'swing',function(){
		});
}
function hideExitPM(){
	// animate moving left to 0
	$('#exit_pm').animate({
			opacity: '0',
			right: '0px'
		},1000,'swing',function(){
			$('#exit_pm').css('display','none');
		});
}
function showRooms(){
	// show the element
	$('#rooms').css('display','block');
	// animate moving right to 0
	$('#rooms').animate({
			opacity: '1',
			right: '150px'
		},1000,'swing',function(){
		});
}
function hideRooms(){
	// animate moving left to 0
	$('#rooms').animate({
			opacity: '0',
			right: '0px'
		},1000,'swing',function(){
			$('#rooms').css('display','none');
		});
}

// ***** chat_reset ************************************************************
// may be called with only a room and null user/pass

function chat_reset(room, registered, handle)
{
  chat_message_id  = -1;

  chat_room = room; // set globals
  chat_user = handle;
  /*chat_pass = pass;*/

  chat_usrs = new Array(); // re-initialize these arrays
  chat_msgs = new Array();
  chat_wait = new Array();
  chat_private = new Array(); // clears private messages
  chat_priv = '.';

  chat_temp_msgs = new Array(); // clear the pending messages
  chat_msgs_rcvd = {}; // clear the received post history
  chat_player_rooms = {}; // for tracking who is where

  chat_msgs['.'] = ''; // set messages to .?
  chat_priv_switch('.', false); // makes sure we aren't in private mode

  clearTimeout(chat_timeout); // stop the looping ajax

  chat_setup(); // initial run to get things set up
  
  //console.log("Starting the Ajax");
  if(typeof chat_users_timeout != 'undefined') clearInterval(chat_users_timeout);
  chat_users_timeout = setInterval("chat_users_get()", 5000); // start the ajax
  if(typeof chat_messages_timeout != 'undefined') clearInterval(chat_messages_timeout);
  chat_messages_timeout = setInterval("chat_msgs_get()", 1000); // start the ajax
  
  /*if(handle){ // if a user is chosen
	  //chat_timeout = setTimeout("chat_msgs_get();", 1); // start the ajax back up again
  }*/
}

function chat_setup(){
	chat_users_get(); // get the users. AJAX. Output is done when the response is received.
	chat_msgs_get(); // get the messages. AJAX. Output is done when the response is received.
}

//***** chat_users *********************************************************
// Calls a script that updates the user list and returns the current version

function chat_users_get(){
	$.ajax({
		url: chat_path+"php/users_get.php",
		dataType: "JSON"
	})
	.done(function(response) {

		response.characters.sort(handleSort);
		chat_usrs = response.characters;
		chat_out_usrs(); // output the users
		//console.log('chat_users_get.  Handle (now chat_user):',chat_user);
	});
}

function handleSort(a, b){
	return a.name.toUpperCase() > b.name.toUpperCase();
}

// ***** chat_msgs_add *********************************************************

function chat_msgs_add()
{
	// first, security pass // unneccesary now
    //if (!chat_user || !chat_pass) { chat_login(false); return; }
    
    // second, check for blank
	var post_text = $('#send').val();
    if (!post_text || post_text == "") return;
	
    // third, build the post
    //chat_rand += 1;
    var timestamp = Math.round(new Date().getTime() / 100);// I switched the chat rand to a timestamp.  This should fix any guid problems and false duplicate posts.
    var newPost = {
	    rand: timestamp,
	    addr: chat_addr,
	    user: chat_user,
	    pass: chat_pass,
	    priv: chat_priv,
	    chat_name_color: chat_name_color,
	    chat_text_color: chat_text_color,
	    data: post_text,
	    room: chat_room,
	    guest: guest_char,
	    tries: 1
    };
    chat_temp_msgs.push(newPost);
    
    // fourth, call it!
	add_post_ajax(newPost);
	
	// fourth, clean up
	document.getElementById('send').value = '';
	if (chat_focu) document.getElementById('send').focus();
}

/*function resend_dead_posts(){
	var chat_temp_msgs_length = chat_temp_msgs.length; // get the length of temp messages
	for(var i = 0; i < chat_temp_msgs_length; i++){ // for each message in temp messages
		if(chat_temp_msgs[i].tries <= 5){ // try 5 times
			add_post_ajax(chat_temp_msgs[i]); // try to add it.
			chat_temp_msgs[i].tries++; // increment tries
		}else{
			confirmPostRand(chat_temp_msgs[i].rand);// otherwise, confirm it and throw it away.
		}
	}
}*/

function resend_dead_posts(){
	for(var i = 0; i < chat_temp_msgs.length; i++){
		if(chat_temp_msgs[i].tries <= 5){ // try 5 times
			add_post_ajax(chat_temp_msgs[i]); // try to add it.
			chat_temp_msgs[i].tries++; // increment tries
		}else{
			if (confirmPostRand(chat_temp_msgs[i].rand)) // If this succeeds, it removes an element from chat_temp_messages
				i--; // so we must decrement i to keep the pointer from skipping one when it increments
		}
	}
}

function add_post_ajax(newPost)
{
	$.ajax({
		url: chat_path+"php/msg_add.php",
		data: newPost,
		dataType: "JSON"
	})
	.done(function(response) {
		if(response.success){
			//document.getElementById('log_add').innerHTML = response.text;
			
			if(typeof response.messages != 'undefined' && typeof response.messages.length != 'undefined' && response.messages.length > 0){
				for(var i = 0; i< response.messages.length; i++){
					if(response.messages[i].trim() != ""){
						chat_msgs['.'] += '<b>System:</b> '+response.messages[i]+'<br />';
					}
				}
			}
		}else{
			if(typeof response.text != 'undefined' && response.text.trim() != ""){
				chat_msgs['.'] += '<b>System:</b> '+response.text+'<br />';
			}
	        
	        confirmPostRand(newPost.rand);
	        chat_out_msgs();
	        
			if(typeof response.text != 'undefined' && response.text.trim() == "Character Not Logged In"){
				clearInterval(chat_users_timeout);
				clearInterval(chat_messages_timeout);
				window.location = SITE_ROOT + "/login.php";
			}
		}
	});
}

// ***** chat_msgs_get **********************************************************

function chat_msgs_get()
{
  chat_rand = Math.round(new Date().getTime() / 1000);
  if(chat_rand % 5 == 0) { resend_dead_posts(); }; // every three seconds or so, retry the dead posts.
  var playDing = false;
  
  //chat_timeout = setTimeout("chat_msgs_get();", Math.round(1000*chat_timeout));
  //chat_rand += 1;
  //console.log(chat_rand, chat_room, chat_user, chat_pass, chat_message_id);
  var rand = chat_rand;
  var room = chat_room;
  var user = chat_user;
  var pass = chat_pass;
  var mptr = chat_message_id;
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
	      //document.getElementById('log_get').innerHTML = response; // Store the whole response

	      //var data = chat_parse(response.text); // parse the response 
	      if (response.operation == '-' && chat_user && chat_pass) { // If I got a remove event and the username and password are set 
	    	  chat_api_onload(chat_room, true); // refresh the chat?
	    	  return; 
	      }
	      /*var initializationRun = (chat_message_id == -1);*/  // I'm sure I'll need this eventually
	      for (var i = 0; i < response.lines.length; i++) // now, go through the lines
	      {
	    	line = response.lines[i];
	    	
	    	if(typeof(chat_msgs_rcvd[line.chat_log_id]) != "undefined"){ continue; }; // if I've already seen this post, skip.
	    	chat_msgs_rcvd[line.chat_log_id] = true; // set this to true, then process the post.
	        chat_message_id =  Math.max(chat_message_id, line.chat_log_id);

	        /*if (line.type == 'room' && line.operation == 'add') // add someone to the room
	        {
	          if (chat_smsg) // if system messages are turned on
	        	  if (line.roomname == chat_room) // and the room is the room we're in
	        		  chat_msgs['.'] += '<b>System:</b> user <b>'+chat_msgs_usr(line.handle, 'black', false)+'</b> enters the room<br />';
	          chat_usrs[line.handle] = new Array(line.roomname, line.gender, line.status, true);
	          chat_player_rooms[line.handle] = line.roomname;
	          //i += 5;
	        }

	        if (line.type == 'room' && line.operation == 'remove') // remove someone from the room
	        {
	          if (chat_smsg) 
	        	  if (line.roomname == chat_room) 
	        		  chat_msgs['.'] += '<b>System:</b> user <b>'+chat_msgs_usr(line.handle, 'black', false)+'</b> leaves the room<br />';
	          chat_usrs[line.handle] = false;
	          //i += 3;
	        }

	        if (line.type == 'away') // set the away status
	        {
	          if (chat_usrs[line.handle]) 
	        	  chat_usrs[line.handle][3] = line.operation == 'activate';
	          //i += 3;
	        }*/

	          confirmPostRand(line.chat_rand);

	          var message = "";
	          if($('#msg_'+line.chat_log_id).length == 0){ // if the element does not exist in the form already 
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
		        		  message = "<span style=\"color: "+line.chat_name_color+";\">"+message.substr(delimPos)+"</span>";
		        	  }else{
		        		  message = ":  <span style=\"color: "+line.chat_text_color+";\">"+message+"</span>";
		        	  }
		          }else{
		        	  message = ":  <span style=\"color: "+line.chat_text_color+";\">"+message+"</span>";
		          }
//<b>[04 Mar, 08:38] <a style="color: #FF9191" href="javascript:chat_priv_switch('GT-Tekkie', true);">GT-Tekkie</a></b>:  <span style="color: #63BBFF;">test</span>
//<b>[09:30] <a style="color: #FF9191" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b> <span style="color: #FF9191;">kicks the server</span>

		          // parse pseudo-html
		          message = replaceAndBalanceTag(message, /\[i\]/gi, '<i>', /\[\/i\]/gi,'</i>' );
		          message = replaceAndBalanceTag(message, /\[b\]/gi, '<b>', /\[\/b\]/gi,'</b>' );
		          message = replaceAndBalanceTag(message, /\[u\]/gi, '<u>', /\[\/u\]/gi,'</u>' );
	
		          // convert url's into hyperlinks
		          message = replaceURLWithHTMLLinks(message);

		          if (line.recipient_username == null || line.recipient_username == '.'){ // if this message is public
		        	  chat_msgs['.'] += '<span id="line_'+line.chat_log_id+'" style="color: white;"><b>['+chat_date(-line.interval)+'] '+chat_msgs_usr(line.handle, line.chat_name_color)+'</b>'+ message +'</span><br />';
		          }
		          else // it's a private message
		          {
		            chat_priv_prepair(line.handle, line.recipient_username);
		            chat_msgs[line.handle][line.recipient_username] += '<span id="line_'+line.chat_log_id+'" style="color: white;"><b>['+chat_date(-line.interval)+'] '+chat_msgs_usr(line.handle, line.chat_name_color)+'</b>'+ message +'</span><br />';
		            chat_msgs[line.recipient_username][line.handle] += '<span id="line_'+line.chat_log_id+'" style="color: white;"><b>['+chat_date(-line.interval)+'] '+chat_msgs_usr(line.handle, line.chat_name_color)+'</b>'+ message +'</span><br />';
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
	      }
	      if(playDing){
	          var ding = $('#audio_ding');
	          ding = ding.get(0).play();
	      }
	      
	      if (response.lines.length > 0)
	      {
	        chat_out_msgs();
	        //chat_out_usrs();
	      }
		}else{
			if(response.error.trim() != ""){
		        chat_msgs['.'] += '<b>System:</b> '+response.error+'<br />';
			}
	        chat_out_msgs();
	        
			if(typeof response.error != 'undefined' && response.error.trim() == "Character Not Logged In"){
				clearInterval(chat_users_timeout);
				clearInterval(chat_messages_timeout);
				window.location = SITE_ROOT + "/login.php";
			}

		}
		
	});
}

function room_change(room, registered, handle){
	
	$.ajax({
		url: chat_path+"php/room_change.php",
		dataType: "JSON",
		data: {
			handle: handle,
			room: room
		}
	})
	.done(function(response) {
		if(response.success){
			chat_api_onload(room, registered, handle)
		}else{
			/*alert('Invalid Room Change');*/
		}
	});

}

// ***** chat_msgs_log **********************************************************
// shouldn't need this.  It just checks for a logged in state.
/*function chat_msgs_log(asuser)
{
  clearTimeout(chat_timeout);

  chat_rand += 1;
  if (asuser)
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
  $.get();
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
      }
      if (data[0] == 'FAILED') { alert(data[1]); chat_login(false); }
      chat_msgs_get();
    }
  };
}*/


// ***** chat_msgs_usr **********************************************************
/*
 * Takes a user, color, and away status and formats an html dealie for them.
 * */
function chat_msgs_usr(handle, color, sidebar)
{
	//console.log('chat_msgs_usr called with:',handle,color,sidebar);
  sidebar = (typeof sidebar == 'undefined') ? false : sidebar ; // first, are we on the sidebar?,
  // then build a return string
  var retString = "";
  if(sidebar){ retString += '<img style="cursor: pointer;" src="'+SITE_ROOT+'/images/twilight_sparkle_cutie_mark2_15_tall.png" onClick="showHUD(this, \''+handle+'\'); return false;" />&nbsp;';}
  // if there is a status, then add the icon
  /*if(typeof chat_usrs[user] != 'undefined' && typeof chat_usrs[user][2] != 'undefined' && chat_usrs[user][2] != 'none'){
	  retString += '<img src="'+chat_path+'style/status/'+chat_usrs[user][2]+'.png" alt="" style="margin-right: 0px;" />';
  }
  // if there is a gender, then add the icon
  if(typeof chat_usrs[user] != 'undefined' && typeof chat_usrs[user][1] != 'undefined' && chat_usrs[user][1] != 'none'){
	  retString += '<img src="'+chat_path+'style/gender/'+chat_usrs[user][1]+'.png" alt="" style="margin-right: 2px;" />';
  }*/
  // always add the name and the javascript that fires the switch to private messaging
  retString += '<a style="color: '+color+'" href="#" onClick="chat_priv_switch(\''+handle+'\', true); return false;">' + handle + '</a>';

  // if the user is away, add this
  /*if(sidebar && typeof chat_usrs[user] != 'undefined' && typeof chat_usrs[user][3] != 'undefined' && !chat_usrs[user][3]){
	  retString += '&nbsp;(away)';
  }*/
  // ship it out
  return retString;
}

// ***** chat_out_msgs **********************************************************

function chat_out_msgs()
{
  // the switch between displaying the PM's and the public
  document.getElementById('chat').innerHTML = (chat_priv == '.') ? chat_msgs[chat_priv] : chat_msgs[chat_user][chat_priv];
  if(document.getElementById('autofocus').checked){ /*Disable autofocus!*/
	  // I have no idea why this is done 5 times
	  document.getElementById('chat').scrollTop = document.getElementById('chat').scrollHeight+1024;
	  document.getElementById('chat').scrollTop = document.getElementById('chat').scrollHeight+1024;
	  document.getElementById('chat').scrollTop = document.getElementById('chat').scrollHeight+1024;
	  document.getElementById('chat').scrollTop = document.getElementById('chat').scrollHeight+1024;
	  document.getElementById('chat').scrollTop = document.getElementById('chat').scrollHeight+1024;
  }
}


// ***** chat_out_usrs **********************************************************
/*
 * This seems to be the function that outputs users to the main page.  
 * It draws its data from the chat_usrs variable.
 * */
function chat_out_usrs()
{
  var users = '';
  //chat_usrs.sort(); // I've already sorted
  var pmNotice = $('#users_private');
  var thisRoom = $('#users_this_room');
  var otherRoom = $('#users_other'); 

  for (var i in chat_usrs){ // for every character in the internal list of presumable all characters who were tracked in the history of the logfile...
	if (
			chat_usrs[i].name != chat_user && // it's not me
			typeof chat_private[chat_usrs[i].name] != 'undefined' && // If I've gotten a private from this guy
			chat_private[chat_usrs[i].name]['last_seen'] < chat_private[chat_usrs[i].name]['last_received']  // and I haven't seen the latest
			)
		users += chat_msgs_usr(chat_usrs[i].name, chat_usrs[i].chat_name_color, true)+'<br />'; // get the formated html and then we append it to users
  }
  pmNotice.html(users); // get the users_priv element and add the users to it.
  pmNotice.css('display', (users ? 'block' : 'none')); // turn the div visible if users is set.

  users = ''; // reset users.
  for (var i in chat_usrs){// for each char
    if ( chat_usrs[i].chat_room_id == chat_room) // if they're in my room
      users += chat_msgs_usr(chat_usrs[i].name, chat_usrs[i].chat_name_color, true)+' <br />'; // format them
  }
  //if (chat_user) // if I'm here
      //users = chat_msgs_usr(chat_user, 'black', true)+' <br />'+users; // put me on top
  thisRoom.html(users); // connect to this room's div and dump the users in
  //document.getElementById('users_this').style.display = users ? 'block' : 'none'; // show it if people are here. (WTF?)

  users = ''; // reset users
  for (var i in chat_usrs)
    if (
    		chat_usrs[i].name != chat_user && // if it's not me
    		chat_usrs[i].chat_room_id != chat_room) // and NOT in my room
      users += chat_msgs_usr(chat_usrs[i].name, 'white', true)+' <br />'; // format them up
  otherRoom.html(users); // dump them into other.
  otherRoom.css('display', (users ? 'block' : 'none'));  // show it if it needs to be shown.
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