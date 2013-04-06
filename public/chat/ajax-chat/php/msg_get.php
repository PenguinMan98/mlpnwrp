<?php

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

if (isset($_GET['room']) &&
    isset($_GET['user']) &&
    isset($_GET['pass']) &&
    isset($_GET['mptr']))
{ /* to get messages, you must be logged in and in a room and tell me the last message you got */
  include_once 'init.php'; /*Get the INIT*/
  $modified = unlog_users(); /* refresh the user list and note if we changed it */

  if ($chat_data['kick'][$_GET['user']] ||
      $chat_data['kick'][$_SERVER['REMOTE_ADDR']]) /* If this user is kicked */
  {
    echo "-\r\n"; /*return a - and STOP*/
    die;
  }

  if (isset($chat_data['user'][$_GET['user']]) &&
      isset($chat_data['pass'][$_GET['user']]) &&
           ($chat_data['pass'][$_GET['user']]) == $_GET['pass']) /* If the user is logged in, */
       echo "+\r\n"; /* print a + */
  else {
  	echo "-\r\n"; /* if they are not, a - and STOP */
  	die();
  }

  foreach ($chat_data['data'] as $i => $x)  /* foreach post in the data array, */
    if ($i > $_GET['mptr']) /* if the message is newer than the last one we got, */
      if (!is_array($x)) /* if the post is text, */
           echo "$i\r\n$x\r\n"; /* print it with its id */
      else if ($x['priv'] == '.' && $x['room'] == $_GET['room'] || /* If it's in my room, */
               $x['priv'] != '.' && $x['user'] == $_GET['user'] || /* If it's a priv for me */
               $x['priv'] != '.' && $x['priv'] == $_GET['user'])  /* If it's a priv from me */
             echo "$i\r\n{$x['data']}\r\n" . (time()-$x['time']) . "\r\n"; /* print it  */

  if ($modified) file_put_contents('data.txt', serialize($chat_data));  /* If I made changes, add the modified contents to the file */
}

?>