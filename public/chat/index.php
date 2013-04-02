<?php 
require_once 'Bootstrap.php'; // load everything
$_bootstrap = Bootstrap::getInstance();
?><html>
<head>

<title>My Little Pony: New Worlds Roleplay Chat!</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords"    content="" />

<link rel="stylesheet" type="text/css" href="ajax-chat/style/style.css" />

<style type="text/css"> html, body { padding: 0px; margin: 0px; background: #d0d0d0; } </style>
<script type="text/javascript" src="/mlpnwrp/public/js/jquery.js" > </script>

</head>
<body onload="chat_api_onload('Main Room', false<?if($user->data['is_registered']) echo ", '".$user->data['username']."'";?>);">
	<audio id="audio_ding" style="visibility: hidden;" controls>
	  <source src="/mlpnwrp/public/media/12844__schluppipuppie__kling-01.wav" type="audio/wav"></source>
	  <source src="/mlpnwrp/public/media/12844__schluppipuppie__kling-01.mp3" type="audio/mpeg"></source>
	</audio>
<center>
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
</center>

</body>
</html>