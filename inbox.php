<?php
  $msgs = array();
  include('curnt_usr.php');
  include('connect.php');
  include('encrypted.php');
  $formatted = format_space($current_user);
  $stored_messages = "SELECT messages FROM $formatted";
  $fetch_messages = mysqli_query($dbc, $stored_messages);
  $rows_fetched = mysqli_num_rows($fetch_messages);
 ?>

<html>
  <head>
    <title></title>
    <link href="#" rel="stylesheet" type="text/CSS">
  </head>
  <body>
    <div class="inbox">
      <?php while ($msgs = mysqli_fetch_array($fetch_messages)) {
        for ($i = 0; $i < count($msgs); $i++) {
          echo $msgs[$i].'<br />';
        }
      } ?>
    </div>
  </body>
</html>
