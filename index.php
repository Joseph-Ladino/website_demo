<?php
  include('curnt_usr.php');
  if($formatted_user != '' && $formatted_user != null) {
    $link = 'logout.php';
    $account = 'Logout';
  } else {
    $link = 'log_in.html';
    $account = 'Login/Signup';
  }
  //"nu" stands for "Number of Unread"
  include('connect.php');
  $q = mysqli_query($dbc, "SELECT * FROM $formatted_user WHERE unread='true'");
  $nu = mysqli_num_rows($q);
  if ($nu == 0) {
    $nue = '';
    $title = 'No Unread Messages';
  } else {
    $nue == ' ('.$nu.')';
    $title = $nu.' Unread Message(s)';
  }
 ?>

<html>
  <head>
    <title>PHP Accounts Test/Example</title>
    <link href="./developer.css" rel="stylesheet" type="text/CSS" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  </head>
  <body>
    <div class="rainbow-red twentyp">
      <div class="nav-bar">
        <ul class="nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="<?php echo $link; ?>"><?php echo $account; ?></a></li>
          <li><a href="manage_account.php">Manage Account</a></li>
          <li><a href="messages.php">Send Message</a></li>
          <li><a href="inbox.html" id="inbox" title="<?php echo $title; ?>">Inbox<?php echo $nue; ?></a></li>
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
