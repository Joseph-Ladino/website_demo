<?php
  $msgs = array();
  include('curnt_usr.php');
  include('connect.php');
  $read_messages = $_COOKIE['read'];
  if (isset($read_messages)) {
    $imr = preg_split("[,]", $read_messages);
    for($i = 0; $i <= count($imr); $i++) {
      mysqli_query($dbc, "UPDATE $formatted_user SET unread='false' WHERE mesg_id=$imr[$i]");
    };
  }
  $stored_messages = "SELECT * FROM $formatted_user ORDER BY mesg_id DESC";
  $fetch_messages = mysqli_query($dbc, $stored_messages);
  $rows_fetched = mysqli_num_rows($fetch_messages);
 ?>

<html>
  <head>
    <title></title>
    <link href="#" rel="stylesheet" type="text/CSS">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
    function change_css(type, mesg_id) {
      switch (type) {
          case 'read':
            $('#' + mesg_id).css({
              "border": "black",
              "color": "gray",
              "background-color": "#FFFCF9"
            });
            break;
          case 'dRead':
          var mr = mesg_id.split(/[\s]+/);
            for (var i = 0; i <= mr.length; i++) {
              change_css('read', mr[i]);
            }
            break;
          default:
        }
      }
    var marked_read = [];
    function mark_read(mesg_id) {
      marked_read.push(mesg_id);
      change_css('read', mesg_id);
      var mRV = marked_read.toString();

      mRV = mRV.replace(', ', ' ');
      document.cookie = 'read=' + mRV;
    }
    function open_message(mesg, mesg_id) {
      alert (mesg);
      mark_read(mesg_id);
    }
    </script>
  </head>
  <body>
    <div class="inbox">
      <?php while ($msgs = mysqli_fetch_array($fetch_messages)) {
        for ($i = 9; $i < count($msgs); $i++) {
          echo '<span id='."'".$msgs['mesg_id']."'".' style="cursor: pointer;" onclick="open_message('."'".$msgs['messages']."'".', '."'".$msgs['mesg_id']."'".')">'.$msgs['subject'].' | from '.$msgs['sent_from'].'</span><br />';
        }
      } ?>
    </div>
    <?php $dbrquery = mysqli_query($dbc, "SELECT mesg_id FROM $formatted_user WHERE unread='false'");
    while ($r = mysqli_fetch_array($dbrquery)) {
      for ($i = 0; $i < count($r); $i++) {
        if ($r[$i] != '' || NULL) {
            echo "<script type='text/javascript'>change_css('dRead', '".$r[$i]."');</script>";
        }
      }
    } ?>
  </body>
</html>
