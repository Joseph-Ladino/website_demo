<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('connect.php');
    $errors = array();
    if(!empty($_POST['to_user'])) {
      if(!empty($_POST['message'])) {

      } else {
        $errors[] = 'Please specify a message!';
      }
    } else {
      $errors[] = 'Please specify who the message should be sent to!';
    }

    if(empty($errors)) {
      $usr = mysqli_real_escape_string($dbc, trim($_POST['to_user']));
      include('encrypted.php');
      $formatted_usr = format_space($usr);
      $msg = mysqli_real_escape_string($dbc, trim($_POST['message']));
      $message = "INSERT INTO $formatted_usr(messages) VALUES('$msg')";
      mysqli_query($dbc, $message);
      $sent = mysqli_affected_rows($dbc);
      mysqli_close($dbc);
      if($sent == 1) {
        echo "<script type='text/javascript'>alert('Message sent!');</script>";
      } else {
        echo "<script type='text/javascript'>alert('ERROR: System Error! Message not sent!');</script>";
      }
    } else {
      echo "ERRORS: <br />";
      foreach ($errors as $error) {
        echo $error.'<br />';
      }
    }
  }
 ?>

<html>
  <head>
    <title>Send a message!</title>
    <link href="#" rel="stylesheet" type="text/CSS" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  </head>
  <body>
    <!-- <div class="rainbow-red twentyp"> -->
      <div class="nav-bar">
        <ul class="nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="sign_up.php">Sign Up</a></li>
          <li><a href="manage_account.php">Manage Account</a></li>
          <li><a href="messages.php">Chat</a></li>
        </ul>
      </div>
    <!-- </div>
    <div class="rainbow-orange twentyp"> -->
      <div class="mainDiv">
        <h1 class="mainHeader">Send a message</h1>
      </div>
      <form action="messages.php" method="post">
        <p>
          To: <input type="text" name="to_user" maxlength="50" size="20" />
        </p>
        <p>
          Message: <br />
          <textarea contenteditable name="message" maxlength="1000" rows="10" cols="50"></textarea>
        </p>
        <input type="submit" name="send_message" value="Send Message" />
      </form>
    <!-- </div>
    <div class="rainbow-green twentyp"></div>
    <div class="rainbow-blue twentyp"></div>
    <div class="rainbow-purple twentyp"></div> -->
  </body>
</html>
