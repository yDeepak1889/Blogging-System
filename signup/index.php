<?php
#Start session
session_start();
#Database connection:
include('db_connect.php');
include('signUpValidate.php');
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CMS | Login</title>

  <?php include('metaData.php'); ?>

</head>

<body>
  <div class="wrapper">
   <form class = "login" role = "form" action = "<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "POST">
      <p class="title"> SIGN UP </p>
    <p style = "color:#fc5a5a;"><?php if (isset($err_signup)) echo $err_signup; ?></p>
      <input type="text" placeholder="Username" autofocus  name = "regname"/>

      <i class="fa fa-user"></i>

      <input type="text" placeholder="First Name" autofocus  name = "regFirstName"/>

      <i class="fa fa-male"></i>

      <input type="text" placeholder="Last Name" autofocus  name = "regLastName"/>

      <i class="fa fa-male"></i>

      <input type="password" placeholder="Password" name = "regpass"/>

      <i class="fa fa-key"></i>
      <input type="password" placeholder="Re-Password" name = "reregpass"/>

      <i class="fa fa-key"></i>
      <a href="../login/index.php" style="color:#60605f;font-size:15px;margin-top:30px;">Log in!</a>

      <button type="submit">
        <i class="spinner"></i>
        <span class="state">Sign Up</span>
      </button>
  </form>

  </p>
</div>


</body>
</html>
