<?php
include('connect.php');
  $lgn_email = $_POST['login_email'];
  $lgn_password = $_POST['login_password'];
  $lgn_query = mysqli_query($dbc, "SELECT * FROM users WHERE email='".$lgn_email."'");
  $lgn_rows = mysqli_num_rows($lgn_query);
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('curnt_usr.php');
    if($lgn_rows != 0) {
      while ($row = mysqli_fetch_array($lgn_query)) {
        $usr_email = $row['email'];
        $usr_password = $row['password'];
        $usr_name = format_undrscr($row['username']);
      }
      if($lgn_email == $usr_email) {
        if($lgn_password == $usr_password) {
          $modded_usr_name = format_space($usr_name);
          overwriteCookie($modded_usr_name);
          echo '<script type="text/javascript">alert("Welcome back, '.$usr_name.'!")</script>';
        } else {
          echo '<h3 class="important"><b>ERROR: Incorrect Password</b></h3>';
        }
      } else {
        echo '<h3 class="important"><b>ERROR: Incorrect or Unregistered email</b></h3>';
      }
    } else {
      echo '<h3 class="important"><b>ERROR: Incorrect or Unregistered email</b></h3>';
    }
  }
 ?>

<html>
  <meta http-equiv="refresh" content="0.5; url='index.php'" />
</html>
