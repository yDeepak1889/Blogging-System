<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

<?php include('../config/connection.php');?>

    <?php
        $q = "SELECT * FROM blogs WHERE id= $_GET[blog]";
        $r = mysqli_query($dbc,$q);
        $list = mysqli_fetch_assoc($r);
        $id = $list['user'];
        $q1 = "SELECT * FROM `social` WHERE `id` = $id";
        $r1 = mysqli_query($dbc,$q1);
        $list1 = mysqli_fetch_assoc($r1);
        $q2 = "SELECT * FROM `users` WHERE `id` = $id";
        $r2 = mysqli_query($dbc,$q2);
        $list2 = mysqli_fetch_assoc($r2);
    ?>

   

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo "../".$list['image']?>'); ">
        <div class="container-fluid" style="background: rgba(0,0,0, 0.7);">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading" >
                        <h1 style="color:#edece8;"><?php echo $list['title']?></h1>
                        <hr class="small" style="color:black;">
                        <span class="subheading" style="color:#c5c6c9;font-weight:700;font-size:30px"><?php echo $list['heading']?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>
                    <?php echo $list['body']?>
                </p>
                
                <p style="color : #096b8c;"> 
                    <?php echo "By : ".$list2['username'];?>
                </p>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="../index.php">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <h3 class= "text-center">Where to find me!</h3><br>
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="<?php echo $list1['twitter'];?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $list1['fb'];?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $list1['linkedin'];?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Bloggers 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
