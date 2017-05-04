<?php
  include('curnt_usr.php');
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('connect.php');
    $old_email = mysqli_query($dbc, "SELECT email FROM user WHERE username='".$formatted_user."'");
    $new_email = $_POST['new_email'];
    $conf_email = $_POST['conf_email'];
      if($new_email != NULL && $new_email != ' ') {
        if($conf_email != NULL && $conf_email != ' ') {
          if ($new_email != $old_email) {
            mysqli_query($dbc, "UPDATE users SET email='$new_email' WHERE username='".$formatted_user."'");
            echo "<script type='text/javascript'>alert('Email Changed!');</script>";
          } else {
            echo "<script type='text/javascript'>alert('ERROR: New email has to be different from old email!');</script>";
          }
        } else {
          echo "<script type='text/javascript'>alert('ERROR: Confirmed email doesn't match new email!');</script>";
        }
      } else {
        echo "<script type='text/javascript'>alert('ERROR: Please enter a new email!');</script>";
      }
  }
?>
  <html>
    <head>
      <meta http-equiv="refresh" content="0.5;url=manage_account.php" />
      <title>Change Email</title>
    </head>
  </html>
