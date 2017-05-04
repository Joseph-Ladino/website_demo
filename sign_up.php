<html>
  <head>
    <title>Sign Up</title>
    <link href="./defaults.css" rel="stylesheet" type="text/CSS" />
    <script src="https:code.jquery.com/jquery-3.1.1.min.js"></script>
  </head>
  <body id="signupBody">
    <form action="handle.php" method="post">
      <p>
        Username (Only Characters: "0-9", "a-z", "A-Z", "$", and "_" are allowed!)<span class="required">*</span>:
        <input type="text" id="usrname" name="usrname" size="20" maxlength="50" />
      </p>
      <p>
        Age<span class="required">*</span>:
        <select name="age">
          <option value="10-24">10-24</option>
          <option value="10-24">25-34</option>
          <option value="10-24">35-44</option>
          <option value="10-24">45-59</option>
          <option value="10-24">60+</option>
        </select>
      </p>
      <p>
        Gender<span class="required">*</span>:
        <input checked type="radio" name="gender" value="Male" /> Male
        <input type="radio" name="gender" value="Female" /> Female
      </p>
      <p>
        Email<span class="required">*</span>:
        <input type="email" id="email" name="email" size="30" maxlength="100" />
      </p>
      <p>
        Password<span class="required">*</span>:
        <input type="password" name="password" size="20" maxlength="100" />
      </p>
      <input type="submit" value="submit" />
    </form>
  </body>
</html>
