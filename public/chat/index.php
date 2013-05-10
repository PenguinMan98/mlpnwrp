<?php 
/*
 * Notes to self:
 * 1) Using the session to store anything specific to one instance of the chat is a bad idea because it will 
 * cause complications later for having multiple windows open.
 * */
require_once '../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();

if (empty($_POST['handle'])) // if no username, 
{
	header("Location: ../login.php");// send them to login.php.
} 
if($user->data['user_id'] == ANONYMOUS) {
	//echo "Logged in as guest: " . $_POST['handle'] . "<br>";
	// add the character handle to the temporary player table
} elseif(empty($_POST['character_id'])) {
	//echo "Logged in as user: " . $user->data['username'] . " with guest character: ".$_POST['handle']."<br>";
	// add the character handle to the temporary player table
} else {
	//echo "Logged in as user: " . $user->data['username'] . " with character: ".$_POST['handle']."<br>";
	// tell the database this character is logged in
}
//$chat_logs = array('add' => false, 'get' => false, 'log' => false);// probably won't need this
//$chat_show = array('login' => true, 'guest' => true); // or this
//$chat_path = 'ajax-chat/'; // make everything relative to site_root
include_once PUBLIC_ROOT . '/chat/ajax-chat/php/init.php'; /*the main php include file*/

?><html>
<head>

<title>My Little Pony: New Worlds Roleplay Chat!</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords"    content="" />

<link rel="stylesheet" type="text/css" href="<?=SITE_ROOT?>/chat/ajax-chat/style/style.css" />

<script type="text/javascript" src="<?=SITE_ROOT?>/js/jquery.js" > </script>

<script type="text/javascript">
var room 		 = 'Main Room'; /* for now default this */
var handle 		 = '<?=$_POST['handle']?>';
var forum_login  = <?=($user->data['user_id'] == ANONYMOUS) ? false : true; ?>;
var chat_timeout = <?=$chat_t_refresh;?>;
var autofocus    = true;
var back_posts   = 50;
var dingOnNew    = false;
var chat_addr    = "<?= $_SERVER['REMOTE_ADDR'] ?>";
var SITE_ROOT	 = "<?=SITE_ROOT?>";

</script>

</head>
<body>
	<audio id="audio_ding" style="display: none;" controls>
	  <source src="<?=SITE_ROOT?>/media/12844__schluppipuppie__kling-01.wav" type="audio/wav"></source>
	  <source src="<?=SITE_ROOT?>/media/12844__schluppipuppie__kling-01.mp3" type="audio/mpeg"></source>
	</audio>
	<div id="page-wrap">

		<div id="top_menu">&nbsp;&nbsp;<a href="<?=SITE_ROOT?>">Home</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="<?=SITE_ROOT?>/rules">Site Rules</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="#">Chat Commands</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="#">Room List</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="#">Preferences</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="#">Profile</a>&nbsp;&nbsp;
			|&nbsp;&nbsp;<a href="#">Logout</a>&nbsp;&nbsp;
		</div>
		
		<div id="chat">Chat
		

		</div>
		
        <div id="room_list">Room List</div>

        <div id="form">Form</div>
        
	</div>
	
</body>
	

	<?php include_once PUBLIC_ROOT . '/chat/ajax-chat/ajax-chat.php'; /*the main HTML include file*/?>

</body>
</html>
<script>
	$(function(){
		// this is the call that starts it all.
		chat_api_onload('Main Room', false<?if($user->data['is_registered']) echo ", '".$user->data['username']."'";?>);

			/* TAB COMPLETION */
		$('#send').keydown(function( e ){
			if(e.which == 9){
				var post = $('#send').val();
				var lastWord = post.match(/\w*$/i);
				for (var i in chat_usrs){
					var regex = '^' + lastWord;
					if( i.match(new RegExp(regex, 'i')) ){
						var replaceRegex = lastWord + '$';
						$('#send').val( post.replace( new RegExp( replaceRegex, 'i'), i) );
					}
				}
				return false;
			}
		});
	});
	
	/*character HUD*/
	function showHUD(element, charName){
		var linkRect = element.getBoundingClientRect();
		if(!linkRect || charName == "") return false;
		var linkVCenterOffset = (linkRect.bottom - linkRect.top) / 2;
		$.ajax({
			url: chat_path+"php/character_info.php",
			data: {characterName: charName},
			dataType: "JSON"
		})
		.done(function(response) {
			if(response.success && $('#character_info_base').css('display') == 'none'){
				$('#character_info_base').css('display','block');
				$('#character_info_base').css('left', linkRect.left-250 );

				$('#hud_character_name').html('<a href="http://www.mlpnwrp.org/character/view/'+response.characterInfo.name+'" target="_blank">' + response.characterInfo.name + '</a>');
				
				$('#hud_player_name').html(response.characterInfo.username);

				if(		typeof chat_usrs == 'undefined' || 
						typeof chat_usrs[response.characterInfo.name] == 'undefined' || 
						typeof chat_usrs[response.characterInfo.name][3] == 'undefined' || 
						!chat_usrs[response.characterInfo.name][3]){ 
					$('#hud_activity_status').html('Away'); 
				}else{
					$('#hud_activity_status').html('Active'); 
				};
				
				$('#hud_room').html(chat_player_rooms[response.characterInfo.name]);
				$('#hud_room').off('click');
				$('#hud_room').on('click',function(){chat_api_onload(chat_player_rooms[response.characterInfo.name], true, chat_user, chat_pass);});
				$('#hud_room').css('cursor','pointer');

				$('#hud_chat_status').html('A status');
				
				var modalRect = $('#character_info_base').get(0).getBoundingClientRect();
				var modalVCenterOffset = (modalRect.bottom - modalRect.top) / 2;
				$('#character_info_base').css('top', linkRect.top + linkVCenterOffset - modalVCenterOffset );
			}else{
				$('#character_info_base').css('display','none');
			}
		});
	}
</script>