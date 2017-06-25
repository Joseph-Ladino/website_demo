<?php
  include('profile_image.php');
?>

<html>
  <head>
    <title>Manage Account</title>
  </head>
  <body>
    <p>
      Profile image: <img id="profile_image" width="50px" height="50px" src="<?php echo $profile_image; ?>" />
    </p>
    <form action="manage_account.php" method="post">
      <p>
        <input type="varchar" name="profile_image" placeholder="Enter Link To Image" />
      </p>
      <p>
        <input type="submit" name="submit" value="Change Profile Image" />
      </p>
    </form>
    <form action="change_password.php" method="post">
      <br />
      <p>
        Change Password:
      </p>
      <p>
        <input type="password" name="old_pass" placeholder="Old Password" />
      </p>
      <p>
        <input type="password" name="new_pass" placeholder="New Password" />
      </p>
      <p>
        <input type="password" name="conf_pass" placeholder="Confirm Password" />
      </p>
      <p>
        <input type="submit" name="submit" value="Change Password" />
      </p>
    </form>
    <form action="change_email.php" method="post">
      <br />
      <p>
        Change Email:
      </p>
      <p>
        <input type="email" name="new_email" placeholder="New Email" />
      </p>
      <p>
        <input type="email" name="conf_email" placeholder="Confirm Email" />
      </p>
      <p>
        <input type="submit" name="submit" value="Change Email" />
      </p>
    </form>
  </body>
</html>
