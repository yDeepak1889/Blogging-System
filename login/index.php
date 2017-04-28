<?php 
#Start session

#Database connection:
include('db_connect.php');
include('loginValidate.php');
ob_start();
@session_start();
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
      <p class="title"> LOG IN</p>
    <p style = "color:#fc5a5a;"><?php if (isset($err_login)) echo $err_login; ?></p>
      <input type="text" placeholder="Username" autofocus  name = "name"/>

      <i class="fa fa-user"></i>

      <input type="password" placeholder="Password" name = "pass_me"/>

      <i class="fa fa-key"></i>
      <a href="../signup/index.php" style="color:#60605f;font-size:15px;margin-top:30px;">Sign up!</a>

      <button type="submit">
        <i class="spinner"></i>
        <span class="state">Log in</span>
      </button>
  </form>

  </p>
</div>
  

</body>
</html>
