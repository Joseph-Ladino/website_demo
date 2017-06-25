<?php
  include('curnt_usr.php');
?>


<html>
  <head>
    <title>Chatroom</title>
    <?php
      $fp = fopen('chatroom1.php', 'a');
      fwrite($fp, '<h1>Welcome to the chatroom, '.$formatted_user.'</h1>');
    ?>
  </head>
</html>
