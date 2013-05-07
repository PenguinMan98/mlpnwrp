<?php 
require_once '../../application/Core/Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();
?><html>
<head>

<title>My Little Pony: New Worlds Roleplay Chat!</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords"    content="" />

<link rel="stylesheet" type="text/css" href="ajax-chat/style/style.css" />

<style type="text/css"> html, body { padding: 0px; margin: 0px; background: #d0d0d0; } </style>
<script type="text/javascript" src="<?=SITE_ROOT?>/js/jquery.js" > </script>

</head>
<body>
	<audio id="audio_ding" style="visibility: hidden;" controls>
	  <source src="<?=SITE_ROOT?>/media/12844__schluppipuppie__kling-01.wav" type="audio/wav"></source>
	  <source src="<?=SITE_ROOT?>/media/12844__schluppipuppie__kling-01.mp3" type="audio/mpeg"></source>
	</audio>
<?php
$chat_logs = array('add' => false, 'get' => false, 'log' => false);
$chat_show = array('login' => true, 'guest' => true);
$chat_path = 'ajax-chat/';
include_once 'ajax-chat/ajax-chat.php';
?>
<!-- <br><br>
<table width="824">
	<tr>
		<td width="30%">Some</td>
		<td width="70%">Test</td>
	</tr>
</table> -->

</body>
</html>
<script>
	$(function(){
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