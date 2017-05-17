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
    <script type="text/javascript">function open_message(mesg) {
      alert (mesg);
      mark_read();
    }</script>
  </head>
  <body>
    <div class="inbox">
      <?php while ($msgs = mysqli_fetch_array($fetch_messages)) {
        for ($i = 5; $i < count($msgs); $i++) {
          echo '<span style="cursor: pointer;" onclick="open_message('."'".$msgs['messages']."'".')">'.$msgs['subject'].' | from '.$msgs['sent_from'].'</span><br />';
        }
      } ?>
    </div>
  </body>
</html>
