<?php
    $q = "SELECT * FROM blogs WHERE id= $blog";
    $r = mysqli_query($dbc,$q);
    $list = mysqli_fetch_assoc($r);


?>



<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('<?php echo $list["image"]?>'')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1><?php echo $list['title']?></h1>
                    <hr class="small">
                    <span class="subheading"><?php echo $list['heading']?></span>
                </div>
            </div>
        </div>
    </div>
</header>