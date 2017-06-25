<?php
  include('curnt_usr.php');
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('connect.php');
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $conf_pass = $_POST['conf_pass'];
    if($old_pass = mysqli_query($dbc, "SELECT password FROM users WHERE username='".$formatted_user."'")) {
      if($new_pass != NULL && $new_pass != ' ') {
        if($conf_pass != NULL && $conf_pass != ' ') {
          if ($new_pass != $old_pass) {
            mysqli_query($dbc, "UPDATE users SET password='$new_pass' WHERE username='".$formatted_user."'");
            echo "<script type='text/javascript'>alert('Password Changed!');</script>";
          } else {
            echo "<script type='text/javascript'>alert('ERROR: New password has to be different from old password!');</script>";
          }
        } else {
          echo "<script type='text/javascript'>alert('ERROR: Confirmed password doesn't match new password!');</script>";
        }
      } else {
        echo "<script type='text/javascript'>alert('ERROR: Please enter a new password!');</script>";
      }
    } else {
      echo "<script type='text/javascript'>alert('ERROR: Your password is incorrect!');</script>";
    }
  }
?>
  <html>
    <head>
      <meta http-equiv="refresh" content="0.5;url=manage_account.php" />
      <title>Change Password</title>
    </head>
  </html>
