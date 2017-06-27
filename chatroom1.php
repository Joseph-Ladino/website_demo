<?php
  include('curnt_usr.php');
  include('chatroom_ajax.php');
  session_start();
  if(!isset($_COOKIE['currentuser'])) {
    loginscreen();
  } elseif(isset($_COOKIE['currentuser']) && isset($_SESSION['joined'])) {
  } else {
    $chat_msg = '<b class="alert">'.$current_user.' has joined the chat.</b><br />'.PHP_EOL;
    $fp = fopen('chatroom1_log.html', 'a');
    fwrite($fp, $chat_msg);
    fclose($fp);
    $_SESSION['joined'] = True;
  }
  function loginscreen() {
    $sign_in = '<a href="log_in.html">Log in to your account to use the chatroom.</a>';
    echo $sign_in;
  }
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['leave'] == 'true') {
    $chat_msg = '<b class="alert">'.$current_user.' has left the chat.</b><br />'.PHP_EOL;
    $fp = fopen('chatroom1_log.html', 'a');
    fwrite($fp, $chat_msg);
    fclose($fp);
    session_destroy();
  }
?>

<html>
  <head>
    <title>Chatroom</title>
    <link href="./chatroom_style.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  </head>
  <body>
    <div id="chat">
      <?php
        $open_chat = fopen('chatroom1_log.html', 'r');
        $chat_contents = fread($open_chat, filesize('chatroom1_log.html'));
        fclose($open_chat);
        echo $chat_contents;
      ?>
    </div>
    <input id="msgInput" placeholder="Enter message" />
    <input id="send" type="button" value="Send Message" />
    <input id="leaveChat" type="button" value="Leave Chat" />
    <script type="text/javascript" src="chatroom_script.js"></script>
  </body>
</html>
