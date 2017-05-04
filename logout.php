<?php
  include('curnt_usr.php');
  if(isset($_COOKIE['currentuser'])) {
    deleteCookie();
    $msg = 'You\'ve been logged out succesfully';
    $title = 'Signed Out';
  } else {
    $msg = 'You\'re not signed in!';
    $title = 'Not Signed In';
  }
 ?>

<html>
  <meta http-equiv="refresh" content="0.6; url=index.php" />
  <head>
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <?php echo $msg; ?>
  </body>
</html>
