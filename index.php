<?php
  include('curnt_usr.php');
  if($current_user != '' && $current_user != null) {
    $link = 'logout.php';
    $account = 'Logout';
  } else {
    $link = 'log_in.html';
    $account = 'Login/Signup';
  }
 ?>

<html>
  <head>
    <title>PHP Accounts Test/Example</title>
    <link href="./developer.css" rel="stylesheet" type="text/CSS" />
  </head>
  <body>
    <div class="rainbow-red twentyp">
      <div class="nav-bar">
        <ul class="nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="<?php echo $link; ?>"><?php echo $account; ?></a></li>
          <li><a href="manage_account.php">Manage Account</a></li>
          <li><a href="messages.php">Send Message</a></li>
          <li><a href="inbox.html">Inbox</a></li>
        </ul>
      </div>
  </div>
  <div class="rainbow-orange twentyp">
    <div class="mainDiv">
      <h1 class="mainHeader">Welcome</h1>
    </div>
  </div>
  <div class="rainbow-green twentyp"></div>
  <div class="rainbow-blue twentyp"></div>
  <div class="rainbow-purple twentyp"></div>
  </body>
</html>