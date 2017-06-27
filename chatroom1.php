<?php
  include('curnt_usr.php');
  include('chatroom_ajax.php');
  if(!isset($_COOKIE['currentuser'])) {
    loginscreen();
  } else {
    //$chat_msg = $current_user.' has joined the chat.';
  }
  function loginscreen() {
    $sign_in = '<a href="log_in.html">Log in to your account to use the chatroom.</a>';
    echo $sign_in;
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
        $open_chat = fopen('chatroom1_log.html', r);
        $chat_contents = fread($open_chat, filesize('chatroom1_log.html'));
        fclose($open_chat);
        echo $chat_contents;
      ?>
    </div>
    <input id="msgInput" placeholder="Enter message" />
    <input id="send" type="button" value="Send Message" />
    <script type="text/javascript">
    function sendMessage() {
      var msg = $('#msgInput').val();
      $.post(
        "chatroom_ajax.php",
        {'msg': msg},
        function(response) {
          $('html').prepend(response);
        }
      );
    }
    $('#send').click(sendMessage);
    function load_chat() {
      $.ajax({
        url: 'chatroom1_log.html',
        cache: false,
        success: function(html) {
          $('#chat').html(html);
        }
      });
    }
    setInterval(load_chat, 1500);
    </script>
  </body>
</html>
