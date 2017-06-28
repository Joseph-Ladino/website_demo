<?php include('friend_list.php'); ?>
<html>
  <head>
    <title>Friends</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  </head>
  <body>
    <input type="text" id="friend" />
    <br />
    <div id="friendWrapper"></div>
    <script type="text/javascript">
      function updateFriendList() {
        $.ajax({
          url: 'friend_list.php',
          type: 'POST',
          cache: false,
          data: {'get': 'friends'},
          success: function(response) {
              $('#friendWrapper').html('<span class="friends">' + response + ' </span>');
            }
          });
        }
      function addFriend() {
        $.ajax({
          url: 'friend_list.php',
          type: 'POST',
          data: {'added': $('#friend').val()},
          success: function(response) {
            updateFriendList();
            confirm(response);
            //$('#friendWrapper').append(response);
          }
        });
      }
      $(document).ready(updateFriendList);
      $('#friend').keydown(function(e) {
        if(e.which == 13) {
          addFriend();
        }
      });
    </script>
  </body>
</html>
