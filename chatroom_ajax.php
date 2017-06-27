<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $msg = htmlspecialchars($_POST['msg']);
    $fp = fopen('chatroom1_log.html', 'a');
    fwrite($fp, $msg.'<br />');
    fclose($fp);
  }
?>
