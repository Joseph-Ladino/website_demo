<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['msg']) {
      include('curnt_usr.php');
      $msg = htmlspecialchars($_POST['msg']);
      $fp = fopen('chatroom1_log.html', 'a');
      fwrite($fp, '<b>'.$current_user.':</b><span> '.$msg.'</span><br />'.PHP_EOL);
      fclose($fp);
    }
  }
?>
