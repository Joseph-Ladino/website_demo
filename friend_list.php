<?php
  include('curnt_usr.php');
  include('connect.php');
  $friendsTable = $formatted_user.'-friends';
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['get']) {
      $r = "SELECT user FROM `$friendsTable`";
      $q = mysqli_query($dbc, $r);
      while($row = mysqli_fetch_array($q)) {
        echo format_undrscr($row[0]).'<br />';
      }
    }
    if($_POST['added'] != null && $_POST['added'] != ' ') {
      $addedUser = format_space(htmlspecialchars(trim($_POST['added'])));
      $q = mysqli_query($dbc, "SELECT id FROM users WHERE BINARY username='$addedUser'");
      while ($row = mysqli_fetch_array($q)) {
        if(!empty($row[0])) {
          $q = mysqli_query($dbc, "SELECT user FROM `$friendsTable` WHERE BINARY user='".$addedUser."'");
            while ($user = mysqli_fetch_array($q)) {
              if ($user[0] == $addedUser) {
                $continue = false;
                return $continue;
              } else {
                $continue = true;
                return $continue;
              }
              return $continue;
            }
            if ($continue != false) {
              echo $addedUser." has already been added as a friend!";
            } else {
              $r = "INSERT INTO `$friendsTable`(user) VALUES('$addedUser')";
              $q = mysqli_query($dbc, $r);
              $addedUser = format_space($addedUser);
              echo 'The user, '.$addedUser.', has been added to your friend list.';
            }
        } else {
          echo 'The user, '.$addedUser.', does not exist.';
        }
      }
    }
  }
?>
