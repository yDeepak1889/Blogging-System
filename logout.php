<?php
	
#Start Session:
session_start();

unset($_SESSION['username']); //Delete the username key
//session_destroy(); //This would delete all of the session keys

header('Location:login/index.php'); //Redirect to login.php

?>