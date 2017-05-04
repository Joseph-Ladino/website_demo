<?php
  include('connect.php');
  include('curnt_usr.php');
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $profile_image_link = $_POST['profile_image'];
    if($profile_image_link != ' ' && $profile_image_link != NULL) {
      $update_query = mysqli_query($dbc, "UPDATE images SET link='$profile_image_link' WHERE user='".$current_user."'");
    }
  }
  $profile_image_query = mysqli_query($dbc, "SELECT * FROM images WHERE user='".$current_user."'");
  $profile_image_array = mysqli_fetch_array($profile_image_query);
  $profile_image = $profile_image_array['link'];
 ?>
