<?php
  //checks to see if form was submitted
  if($_SERVER['REQUEST_METHOD'] == 'POST') {

    //retrieve values from inputs
    $username = $_POST['usrname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //checks if user submitted HTML tags/elements
    if($username[0] != '<' && $email[0] != '<' && $password[0] != '<') {

      //checks if inputs are NOT empty
      if(!empty($username) && !empty($age) && !empty($gender) && !empty($email) && !empty($password)) {

        //connects to database
        include('connect.php');

        //checks username availability
        $check_usr_name = mysqli_query($dbc, "SELECT * FROM users WHERE username='".$username."'");
        $usrname_available = mysqli_num_rows($check_usr_name);
        $check_email = mysqli_query($dbc, "SELECT * FROM users WHERE email='".$email."'");
        $email_available = mysqli_num_rows($check_email);
        if($usrname_available == 0) {

           if($email_available == 0) {

             //removes spaces from username
             include('encrypted.php');
             $modded_username  = format_space($username);

            //inputs data from form into database
            mysqli_query($dbc, "INSERT INTO users(username, age, gender, email, password) VALUES('$modded_username', '$age', '$gender', '$email', '$password')");

            //decides which profile picture to use and then sets it
            if ($gender == 'Male') {
              $default_image = 'https://static1.squarespace.com/static/55253789e4b0cd08f76cea0e/t/556b8400e4b0c3683a9cfbbd/1433109521463/image+headshot-advisory+panel_+bill+patterson.png';
            } elseif ($gender == 'Female') {
              $default_image = 'https://cdn.daybreak.tv/wp-content/uploads/shutterstock_362901368.jpg';
            }
            mysqli_query($dbc, "INSERT INTO images(user, link) VALUES('$modded_username', '$default_image')");

            //creates new user a personal table
            //nut stands for New User Table
            $nut = "CREATE TABLE ".$modded_username." (
              `mesg_id` BIGINT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`mesg_id`), messages VARCHAR(1000) NOT NULL, sent_from VARCHAR(50) NOT NULL, subject VARCHAR(150) NOT NULL, unread VARCHAR(5) NOT NULL
              )";
            mysqli_query($dbc, $nut);

            //creates user a friends table
            //nft stands for New Friends Table
            $nft = "CREATE TABLE `".$modded_username."-friends` (
              `user` VARCHAR(50) NULL
              )";
            mysqli_query($dbc, $nft);

            //tells user account was made sucessfully
            echo '<script type="text/javascript">alert("Account Made Succesfully! Please sign in on home screen.");</script>';
          } else {
            echo '<script type="text/javascript">alert("That email is already signed up!");</script>';
          }
        } else {
          echo '<script type="text/javascript">alert("That username is taken!");</script>';
        }
      } else {
        echo "<script type='text/javascript'>alert('Please fill in missed field(s)');</script>";
      }
    } else {
      echo "<script type='text/javascript'>alert('Invalid Username! Character \"<\": Not Allowed');</script>";
    }
  }
 ?>

 <html>
   <meta http-equiv="refresh" content="0.3; url=index.php" />
   <body>
     <?php
        include('curnt_usr.php');
        overwriteCookie($modded_username);
        echo $_COOKIE['currentuser'];
      ?>
   </body>
 </html>
