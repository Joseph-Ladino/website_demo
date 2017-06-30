<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['msg']) {
      include('curnt_usr.php');
      $chat = $_POST['chat'];
      $msg = htmlspecialchars($_POST['msg']);
      $fp = fopen($chat.'_log.html', 'a');
      fwrite($fp, '<b>'.$current_user.':</b><span> '.$msg.'</span><br />'.PHP_EOL);
      fclose($fp);
    }
  }
?>
