<?php
  $msgs = array();
  include('curnt_usr.php');
  include('connect.php');
  $stored_messages = "SELECT * FROM $formatted_user";
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
        for ($i = 3; $i < count($msgs); $i++) {
          echo $msgs['messages'].' | from '.$msgs['sent_from'].'<br />';
        }
      } ?>
    </div>
  </body>
</html>
