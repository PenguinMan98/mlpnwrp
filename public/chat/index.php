<?php require_once('Security/ids.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>Ajax Chat</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords"    content="" />

<link rel="stylesheet" type="text/css" href="ajax-chat/style/style.css" />

<style type="text/css"> html, body { padding: 0px; margin: 0px; background: #d0d0d0; } </style>

</head>
<body onload="chat_api_onload('Main Room', false);">
<center>
<?php
$chat_list = array('Main Room', 'Anything', 'Maccys Pathfinder', 'Razors d20 Modern');
$chat_logs = array('add' => false, 'get' => false, 'log' => false);
$chat_show = array('login' => false, 'guest' => true);
$chat_path = 'ajax-chat/';
include_once 'ajax-chat/ajax-chat.php';
?>
<br><br>
<table width="824">
	<tr>
		<td width="30%">Some</td>
		<td width="70%">Test</td>
	</tr>
</table>
</center>

</body>
</html>