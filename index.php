<?php
	#Start the session:
	ob_start();
	@session_start();
	if(!isset($_SESSION['username'])) {
		//echo "<script>alert('Log in successful')</script>";
		header('Location: login/index.php');
		print_r($_SESSION); 
	}

?>



<?php include('config/setup.php');?>

<!DOCTYPE html>
<html>

<head>
	<meta charset = "utf-8">
	<meta http-equiv="refresh" content="10000">
	<title>CMS</title>

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<?php include('config/css.php');?>
	<?php include('config/js.php');?>
</head>

<body>



	<?php include(D_TEMPLATE.'/navigation.php');?>

	<div class= "innerBody">

		<?php 
			if($pageid == 1) { 
			  include(D_TEMPLATE.'/carousel.php');
			  include('views/home.php');
			} 
			if($pageid == 0) {
			  include(D_TEMPLATE.'/developers.php');
			} 
			if($pageid == 3) {
				//include(D_TEMPLATE.'/write.php');
				include('views/write.php');
			}
			if($pageid == 2) {
				//include(D_TEMPLATE.'/write.php');
				include('views/aboutme.php');
			} 
			if($pageid == 4) {
				include('views/profile.php');
			}
			
		?>

		<?php include(D_TEMPLATE.'/debug.php');?>	

	</div>




	<?php include(D_TEMPLATE.'/footer.php');?>


	 <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
              

</body>

</html>