<?php
  include("curnt_usr.php");
  include("connect.php");

  $q = mysqli_query($dbc, "SELECT * FROM $formatted_user WHERE unread='true'");
  $num_of_unread = mysqli_num_rows($q);
 ?>
