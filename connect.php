<?php
  if(strpos($_SERVER['REQUEST_URI'], 'my_projects')) {
    $dbparts = array('host'=>'localhost', 'user'=>'root', 'pass'=>'', 'path'=>'practice');
    $dbname = $dbparts['path'];
  } else {
    $url = getenv('CLEARDB_DATABASE_URL');
    $dbparts = parse_url($url);
    $dbname = ltrim($dbparts['path'],'/');
  }
  $dbhostname = $dbparts['host'];
  $dbusername = $dbparts['user'];
  $dbpassword = $dbparts['pass'];
  //make connection to mysql
  $dbc = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname) or die('could not connect to database');
  //set encoding
  mysqli_set_charset($dbc, 'utf8');
 ?>
