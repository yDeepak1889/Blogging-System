<?php
	//CSS

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Optional Theme -->
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- jQuery CSS -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

<!--FontAwesome -->
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href="css/animate.min.css" rel="stylesheet">

<style type="text/css">
	html {
	  position: relative;
	  min-height: 100%;
	}
	body {
	  /* Margin bottom by footer height */
	  margin-bottom: 100px;
	}
	


	body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
	}

	.profilePage .form-group{
		font: 200 10px/1.8 Lato, sans-serif;
		color: #777;
	}

	.innerBody {
		margin-top:50px;
	}

/*	.navbar {
	      font-family: Montserrat, sans-serif;
	      
	      margin-bottom: 0;
	      background-color: #2C2C2C;
	      color:white;
	      border: 0;
	      font-size: 15px !important;
	      letter-spacing: 4px;
	      opacity: 1;
	  }

	.navbar a{
		color:#fff;
	}

	.navbar a:hover {
		background-color: black;
	    color: #777;
	}

	.navbar .active {
		background-color: #000;
		color: #111;

	}
*/
	
	/*NAVBAR */
	.navbar{
		background-color: #2C2C2C;
		border-color: transparent;

		transition:background-color 1s;
		
	}
	.navbar-nav{
		margin:0px 100px 0px;
	}

	.navbar .navbar-nav li a,.navbar .navbar-header, .navbar .navbar-nav li a:focus,.navbar .navbar-nav li a:active:focus{
		color:white;
	}

	.navbar .navbar-nav li a:hover{
		color:#16a085;
	}

	.carousel-inner img {
		-webkit-filter: grayscale(90%);
		    filter: grayscale(90%); /* make all photos black and white */ 
	   
	    width: 100%; /* Set width to 100% */


	    margin: auto;
	}

	.carousel-caption h3 {
	    color: #fff !important;
	}
f
	@media (max-width: 600px) {
	    .carousel-caption {
	        display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
	    }
	}

	footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  /* Set the fixed height of the footer here */
	  background-color: #2C2C2C;
	     color: #f5f5f5;
	     padding: 10px;
	     text-align: center;
	}

	footer a {
	    color: black;
	}

	footer a:hover {
	    color: #777;
	    text-decoration: none;
	}

	
	/*DEVELOPERS PAGE CSS */

	#developers {
		margin-top: 100px;
		margin-right: 50px;
		margin-left: 50px;

	}

	#developers img {
		-webkit-filter: grayscale(50%);
		    filter: grayscale(50%); /* make all photos black and white */ 
	 }

	 /* Remove rounded borders from list */
	#developers .list-group-item:first-child {
	    border-top-right-radius: 0;
	    border-top-left-radius: 0;
	}

	#developers .list-group-item:last-child {
	    border-bottom-right-radius: 0;
	    border-bottom-left-radius: 0;
	}

	/* Remove border and add padding to thumbnails */
	#developers .thumbnail {
		background-color: #2C2C2C;
	    padding: 0 0 15px 0;
	    border: none;
	    border-radius: 0;
	}

	#developers .thumbnail p {
	    margin-top: 15px;

	    color: white;
	}

	/* Black buttons with extra padding and without rounded borders */
	#developers .btn-dev {
	    padding: 10px 20px;
	    background-color: white;
	    color: #2C2C2C;
	    border-radius: 0;
	    transition: .2s;
	}

	/* On hover, the color of .btn will transition to white with black text */
	#developers .btn-dev:hover, .btn-dev:focus {
	    border: 3px solid white;
	    background-color: #2C2C2C;
	    color: white;
	}

	
	.blogs {
		    padding: 50px 50px;

		   /* background-color: #ecf0f1;*/
	}

	#blogLink:hover{
		color:#054c68;
	}
	#blogLink{
		color:#212121;
	}
	#blogP:hover{
		color:#525556;
	}
	#blogP{
		color:#757575;
	}

</style>