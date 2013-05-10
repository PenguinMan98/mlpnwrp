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

$handle = "";
if(!preg_match("/^[\w_-]*$/", $_POST['handle'])){ 
	header("Location: ../login.php");// reject a bad username.
}
$handle = $_POST['handle'];


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
		
		<div id="chat">
		
		<span>
			<b>[04 Mar, 08:38] <a style="color: #FF9191" href="javascript:chat_priv_switch('GT-Tekkie', true);">GT-Tekkie</a></b>:  <span style="color: #63BBFF;">test</span>
		</span><br>
		<span>
			<b>[09:30] <a style="color: #FF9191" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b> <span style="color: #FF9191;">kicks the server</span>
		</span><br>
		<span style="color: #b070d0"><b>[04 Mar, 08:39] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tekkie', true);">GT-Tekkie</a></b>:  <a href="http://www.abeautifulsite.net/blog/2011/11/detecting-mobile-devices-with-javascript/" target="_blank">http://www.abeautifulsite.net/blog/2011/11/detecting-mobile-devices-with-javascript/</a></span><br><span style="color: #b0b050"><b>[04 Mar, 17:30] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Oh, no spaces</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  ah</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  Welcome!</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  underscores work I think</span><br><span style="color: #b0b050"><b>[04 Mar, 17:30] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  You coded this, eh?</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  No, this chat was taken from the net</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  It had a very specific feature set we wanted for a casual gaming site</span><br><span style="color: #b070d0"><b>[04 Mar, 17:31] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  No forced logins but perks if you do</span><br><span style="color: #b070d0"><b>[04 Mar, 17:31] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  dice roller, etc</span><br><span style="color: #b070d0"><b>[04 Mar, 17:31] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  Well, this chat had no dice roller. I had to make one</span><br><span style="color: #b070d0"><b>[04 Mar, 17:32] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  but I think mine is better than filly's</span><br><span style="color: #b070d0"><b>[04 Mar, 17:33] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  right now the actual login is disabled</span><br><span style="color: #b070d0"><b>[04 Mar, 17:34] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  guest mode only</span><br><span style="color: #b0b050"><b>[04 Mar, 17:36] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Why no forced logins?</span><br><span style="color: #b0b050"><b>[04 Mar, 17:37] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Also, you'll have to forgive me I have three RPs and like, a dozen chats running...so my replies may be a bit slow. T.T</span><br><span style="color: #b070d0"><b>[04 Mar, 17:37] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  I haven't built the databasing system for it yet</span><br><span style="color: #b070d0"><b>[04 Mar, 17:37] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  understood</span><br><span style="color: #b0b050"><b>[04 Mar, 17:37] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  But it WILL have one eventually</span><br><span style="color: #b070d0"><b>[04 Mar, 17:38] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  Yes. ASAP</span><br><span style="color: #b0b050"><b>[04 Mar, 17:38] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Gotcha</span><br><span style="color: #b0b050"><b>[04 Mar, 17:38] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  cause yeah, it needs that</span><br><span style="color: #b0b050"><b>[04 Mar, 17:42] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Though to be honest, I think Filly has an excellent chat system. There are a few things I dont like but they're minor. </span><br><span style="color: #b070d0"><b>[04 Mar, 17:58] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  true</span><br><span style="color: #b070d0"><b>[04 Mar, 17:58] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  I think I can do better.</span><br><span style="color: #b070d0"><b>[04 Mar, 17:58] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  This chat is a terrible way to start but it's better than nothing</span><br><span style="color: #b070d0"><b>[04 Mar, 17:58] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  I intend to take it apart piece by piece and rewrite it my way</span><br><span style="color: #b070d0"><b>[04 Mar, 17:59] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  My main attraction to it is that it is very simple</span><br><span style="color: #b070d0"><b>[04 Mar, 18:00] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  only what you need and nothing else</span><br><span style="color: #b070d0"><b>[04 Mar, 18:00] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  Gives me a foundation to learn the code and then build on</span><br><span style="color: #b070d0"><b>[04 Mar, 18:02] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  bbiab</span><br><span style="color: #b070d0"><b>[04 Mar, 22:23] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tekkie', true);">GT-Tekkie</a></b>:  test</span><br><span style="color: #b070d0"><b>[04 Mar, 22:23] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tekkie', true);">GT-Tekkie</a></b>:  <a href="http://www.abeautifulsite.net/blog/2011/11/detecting-mobile-devices-with-javascript/" target="_blank">http://www.abeautifulsite.net/blog/2011/11/detecting-mobile-devices-with-javascript/</a></span><br><span style="color: #b070d0"><b>[04 Mar, 22:35] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-GM_Joe', true);">GT-GM_Joe</a></b>:  test</span><br><span style="color: #b070d0"><b>[04 Mar, 22:53] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Milagra', true);">GT-Milagra</a></b>:  test</span><br><span style="color: #b070d0"><b>[04 Mar, 22:53] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Milagra', true);">GT-Milagra</a></b>:  Some test text with a link</span><br><span style="color: #b070d0"><b>[04 Mar, 23:06] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-GM_Joe', true);">GT-GM_Joe</a></b>:  some test <a href="http://stackoverflow.com/questions/4146927/implode-an-array-with-jquery-javascript" target="_blank">http://stackoverflow.com/questions/4146927/implode-an-array-with-jquery-javascript</a> text with a link</span><br><span style="color: #b070d0"><b>[00:33] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Kailara', true);">GT-Kailara</a></b>:  test</span><br><span style="color: #b070d0"><b>[09:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  test <a href="http://65.103.240.130/mlpfia/public/forum/viewtopic.php?f=2&amp;t=2&amp;p=12#p12" target="_blank">http://65.103.240.130/mlpfia/public/forum/viewtopic.php?f=2&amp;t=2&amp;p=12#p12</a> test</span><br><span style="color: #b070d0"><b>[09:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  Awww... I had file linking working last night...</span><br>
		<span style="color: #b070d0"><b>[11:14] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Test', true);">GT-Test</a></b>:  Ah, there it goes</span><br>
		<span style="color: #b070d0"><b>[11:14] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Test', true);">GT-Test</a></b> notes. Kicking the server worked</span><br>

		<span style="color: #b070d0"><b>[04 Mar, 08:38] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tekkie', true);">GT-Tekkie</a></b>:  test</span><br><span style="color: #b070d0"><b>[04 Mar, 08:39] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tekkie', true);">GT-Tekkie</a></b>:  <a href="http://www.abeautifulsite.net/blog/2011/11/detecting-mobile-devices-with-javascript/" target="_blank">http://www.abeautifulsite.net/blog/2011/11/detecting-mobile-devices-with-javascript/</a></span><br><span style="color: #b0b050"><b>[04 Mar, 17:30] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Oh, no spaces</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  ah</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  Welcome!</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  underscores work I think</span><br><span style="color: #b0b050"><b>[04 Mar, 17:30] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  You coded this, eh?</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  No, this chat was taken from the net</span><br><span style="color: #b070d0"><b>[04 Mar, 17:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  It had a very specific feature set we wanted for a casual gaming site</span><br><span style="color: #b070d0"><b>[04 Mar, 17:31] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  No forced logins but perks if you do</span><br><span style="color: #b070d0"><b>[04 Mar, 17:31] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  dice roller, etc</span><br><span style="color: #b070d0"><b>[04 Mar, 17:31] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  Well, this chat had no dice roller. I had to make one</span><br><span style="color: #b070d0"><b>[04 Mar, 17:32] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  but I think mine is better than filly's</span><br><span style="color: #b070d0"><b>[04 Mar, 17:33] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  right now the actual login is disabled</span><br><span style="color: #b070d0"><b>[04 Mar, 17:34] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  guest mode only</span><br><span style="color: #b0b050"><b>[04 Mar, 17:36] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Why no forced logins?</span><br><span style="color: #b0b050"><b>[04 Mar, 17:37] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Also, you'll have to forgive me I have three RPs and like, a dozen chats running...so my replies may be a bit slow. T.T</span><br><span style="color: #b070d0"><b>[04 Mar, 17:37] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  I haven't built the databasing system for it yet</span><br><span style="color: #b070d0"><b>[04 Mar, 17:37] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  understood</span><br><span style="color: #b0b050"><b>[04 Mar, 17:37] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  But it WILL have one eventually</span><br><span style="color: #b070d0"><b>[04 Mar, 17:38] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  Yes. ASAP</span><br><span style="color: #b0b050"><b>[04 Mar, 17:38] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Gotcha</span><br><span style="color: #b0b050"><b>[04 Mar, 17:38] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  cause yeah, it needs that</span><br><span style="color: #b0b050"><b>[04 Mar, 17:42] <a style="color: #b0b050" href="javascript:chat_priv_switch('GT-PrincessSapphire', true);">GT-PrincessSapphire</a></b>:  Though to be honest, I think Filly has an excellent chat system. There are a few things I dont like but they're minor. </span><br><span style="color: #b070d0"><b>[04 Mar, 17:58] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  true</span><br><span style="color: #b070d0"><b>[04 Mar, 17:58] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  I think I can do better.</span><br><span style="color: #b070d0"><b>[04 Mar, 17:58] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  This chat is a terrible way to start but it's better than nothing</span><br><span style="color: #b070d0"><b>[04 Mar, 17:58] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  I intend to take it apart piece by piece and rewrite it my way</span><br><span style="color: #b070d0"><b>[04 Mar, 17:59] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  My main attraction to it is that it is very simple</span><br><span style="color: #b070d0"><b>[04 Mar, 18:00] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  only what you need and nothing else</span><br><span style="color: #b070d0"><b>[04 Mar, 18:00] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  Gives me a foundation to learn the code and then build on</span><br><span style="color: #b070d0"><b>[04 Mar, 18:02] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek_Croon', true);">GT-Tek_Croon</a></b>:  bbiab</span><br><span style="color: #b070d0"><b>[04 Mar, 22:23] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tekkie', true);">GT-Tekkie</a></b>:  test</span><br><span style="color: #b070d0"><b>[04 Mar, 22:23] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tekkie', true);">GT-Tekkie</a></b>:  <a href="http://www.abeautifulsite.net/blog/2011/11/detecting-mobile-devices-with-javascript/" target="_blank">http://www.abeautifulsite.net/blog/2011/11/detecting-mobile-devices-with-javascript/</a></span><br><span style="color: #b070d0"><b>[04 Mar, 22:35] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-GM_Joe', true);">GT-GM_Joe</a></b>:  test</span><br><span style="color: #b070d0"><b>[04 Mar, 22:53] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Milagra', true);">GT-Milagra</a></b>:  test</span><br><span style="color: #b070d0"><b>[04 Mar, 22:53] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Milagra', true);">GT-Milagra</a></b>:  Some test text with a link</span><br><span style="color: #b070d0"><b>[04 Mar, 23:06] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-GM_Joe', true);">GT-GM_Joe</a></b>:  some test <a href="http://stackoverflow.com/questions/4146927/implode-an-array-with-jquery-javascript" target="_blank">http://stackoverflow.com/questions/4146927/implode-an-array-with-jquery-javascript</a> text with a link</span><br><span style="color: #b070d0"><b>[00:33] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Kailara', true);">GT-Kailara</a></b>:  test</span><br><span style="color: #b070d0"><b>[09:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  test <a href="http://65.103.240.130/mlpfia/public/forum/viewtopic.php?f=2&amp;t=2&amp;p=12#p12" target="_blank">http://65.103.240.130/mlpfia/public/forum/viewtopic.php?f=2&amp;t=2&amp;p=12#p12</a> test</span><br><span style="color: #b070d0"><b>[09:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b>:  Awww... I had file linking working last night...</span><br><span style="color: #b070d0"><b>[09:30] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Tek', true);">GT-Tek</a></b> kicks the server</span><br>
		<span style="color: #b070d0"><b>[11:14] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Test', true);">GT-Test</a></b>:  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes  Ah, there it goes</span><br>
		<span style="color: #b070d0"><b>[11:14] <a style="color: #b070d0" href="javascript:chat_priv_switch('GT-Test', true);">GT-Test</a></b> notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked notes. Kicking the server worked</span><br>
		
		</div>
		
        <div id="room_list">
        	<div id="header_messages"><?=$current_room->getRoomName()?> long freaking room name</div>
        	<div id="messages"></div>
            <div id="header_users">Users</div>
		    <div id="users">
		      <?php if (count($chat_list) >= 2) { ?>
		      <b class="first">Private msgs</b><div id="users_priv"></div>
		      <b class="other">This room   </b><div id="users_this"></div>
		      <b class="other">Other rooms </b><div id="users_othr"></div>
		      <?php } ?>
		      <?php if (count($chat_list) == 1) { ?>
		      <b class="first">Private msgs</b><div id="users_priv"></div>
		      <b class="other">Users       </b><div id="users_this"></div><div id="users_othr"></div>
		      <?php } ?>
		    </div>
        
        </div>

        <div id="form">
        	<span id="character_name"><?=$handle?></span>:
        	<input id="send" type="text" size="100" autocomplete="off" />
    		<input id="submit_send" class="submit" type="submit" value="Send" />
    		&nbsp;&nbsp;Autofocus&nbsp;<input id="autofocus" checked=true class="input" type="checkbox" onclick="autofocus = this.checked;" />
    		&nbsp;&nbsp;Ping On New&nbsp;<input id="pingOnNew" class="input" type="checkbox" onclick="pingOnNew = this.checked;" /></div>
        
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