<?php
  //error_reporting(0);
  include('encryptor.php');
  include('encrypted.php');
  function overwriteCookie($cookie_value){
    $encrypted_cookie_value = encrypt($cookie_value);
    setcookie('currentuser', $encrypted_cookie_value, time() + 31536000, '/');
  }

  function deleteCookie(){
    setcookie('currentuser', ' ', time() - 31536000, '/');
  }
  $encrypted_user = $_COOKIE['currentuser'];
  $current_user = decrypt($encrypted_user);
  $formatted_user = format_space($current_user);
 ?>
