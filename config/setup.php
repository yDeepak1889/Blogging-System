<?php
//Setup FIle:


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


#Database connection:
include('config/connection.php');
 
#Constants:
DEFINE('D_TEMPLATE','template');

#Functions:
include('functions/data.php');
include('functions/template.php');



$site_title = 'CMS';




if(isset($_GET['page'])) {
	$pageid= $_GET['page'];
} else {
	$pageid = 1;
}

if(isset($_GET['blog'])) {
	$blog= $_GET['blog'];
}





?>
