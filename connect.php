<?php
  $dbhostname = 'localhost';
  $dbusername = 'root';
  $dbpassword = '';
  $dbname = 'practice';
  //make connection to mysql
  $dbc = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname) or die('could not connect to database');
  //set encoding
  mysqli_set_charset($dbc, 'utf8');
 ?>
