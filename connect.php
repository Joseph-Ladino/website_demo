<?php
  $url = getenv('JAWSDB_URL');
  $dbparts = parse_url($url);
  $dbhostname = $dbparts['host'];
  $dbusername = $dbparts['user'];
  $dbpassword = $dbparts['pass'];
  $dbname = ltrim($dbparts['path'],'/');
  //make connection to mysql
  $dbc = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname) or die('could not connect to database');
  //set encoding
  mysqli_set_charset($dbc, 'utf8');
 ?>
