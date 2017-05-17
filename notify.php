<?php
  include("curnt_user.php");
  include("connect.php");
  function alert($mesg) {
    mysqli_query($dbc, "INSERT INTO $formatted_user(messages, sent_from) VALUES($mesg, 'Computer')");
  }
 ?>
