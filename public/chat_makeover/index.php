<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>css test</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords"    content="" />

<link rel="stylesheet" type="text/css" href="ajax-chat/style/style.css" />
<style type="text/css"> html, body { padding: 0px; margin: 0px; background: #d0d0d0; } </style>
<link rel='stylesheet' type='text/css' href='css/chat/style.css' />
	
<link rel='stylesheet' media='screen and (max-width: 700px)' href='css/chat/narrow.css' />
<link rel='stylesheet' media='screen and (min-width: 701px) and (max-width: 900px)' href='css/chat/medium.css' />
<link rel='stylesheet' media='screen and (min-width: 901px)' href='css/chat/wide.css' />
<!--[if !IE]>-->
<link type="text/css" rel="stylesheet" media="only screen and (max-device-width: 480px)" href="css/chat/narrow.css">
<!--<![endif]-->
	
<script src="js/jquery.js"> </script>

</head>
<body onload="chat_api_onload('Main Room', false);">
<?php
$chat_logs = array('add' => false, 'get' => false, 'log' => false);
$chat_show = array('login' => false, 'guest' => true);
$chat_path = 'ajax-chat/';
include_once 'ajax-chat/ajax-chat.php';
?>

</body>
</html>