<?php
  $url = getenv('CLEARDB_DATABASE_URL');
  $dbparts = parse_url($url);
  $dbhostname = $dbparts['host'];
  $dbusername = $dbparts['user'];
  $dbpassword = $dbparts['pass'];
  $dbname = ltrim($dbparts['path'],'/');
  echo $dbhostname.' '.$dbhostname.' '.$dbpassword.' '.$name
  //make connection to mysql
  $dbc = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname) or die('could not connect to database');
  //set encoding
  mysqli_set_charset($dbc, 'utf8');
 ?>
