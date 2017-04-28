<?php
  require('login/db_connect.php');
  @session_start();
  if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
  }else {
    header('Location:../index.php');
  }
?>


<?php
  //Body
  $query = "SELECT `body` FROM `aboutme` Where `id` = '".$id."'";
  $query_run = mysqli_query($db_link, $query);
   if($query_run){
        $arr4 = mysqli_fetch_assoc($query_run);
        //printf("correct4");
        if (!empty($arr4)) {
          $body = $arr4['body'];
        }else {
          $body = " ";
        }
      //print_r($arr4);
  }else {
    echo "<script>alert('Something went wrong')</script>";
  }

  //Image
  $query = "SELECT `image`, `nick` FROM `personal` Where `id` = '".$id."'";
  $query_run = mysqli_query($db_link, $query);
   if($query_run){
        $arr4 = mysqli_fetch_assoc($query_run);
        //printf("correct4");
        if (!empty($arr4)) {
          $image = $arr4['image'];
          $nick = $arr4['nick'];
        }
        else{
          $image = "";
          $nick = " ";
        }
      //print_r($arr4);
  }else {
    echo "<script>alert('Something went wrong')</script>";
  }

  //Links
  $query = "SELECT * FROM `social` Where `id` = '".$id."'";
  $query_run = mysqli_query($db_link, $query);
   if($query_run){
        $arr4 = mysqli_fetch_assoc($query_run);
        //printf("correct4");
        if (!empty($arr4)) {
          $fb = $arr4['fb'];
          $twitter = $arr4['twitter'];
          $linkedin = $arr4['linkedin'];
        } else {
          $fb = "#";
          $twitter = '#';
          $linkedin = '#';
        }
      //print_r($arr4);
  }else {
    echo "<script>alert('Something went wrong')</script>";
  }

?>



<!-- First Container -->
<div class="container-fluid bg-1 text-center" style="padding-top: 70px;padding-bottom: 70px; background-color: #ecf0f1">
  <h3 class="margin">Who Am I?</h3>
  <img src="<?php if (empty($image)){echo 'images/users/img.png';}else{echo $image;} ?>" class="img-responsive img-circle margin wow rotateInUpLeft" style="display:inline" alt="Profile Pic" width="350" height="350">
  <h3><?php echo $nick ?></h3>
</div>


<!-- Second Container -->
<div class="container text-center" style="padding-top:100px ; padding-bottom:50px;">
  <h3>About Me</h3>
  <p><?php echo $body; ?></p>
</div>
<hr>
<div class="container-fluid text-center" style="padding-top: 70px;padding-bottom: 70px;">    
  <h3 >Where To Find Me?</h3><br>
  <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          <ul class="list-inline text-center">
              <li>
                  <a href="<?php echo $twitter; ?>" target = "_blank">
                      <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li>
                  <a href="<?php echo $fb; ?>" target = "_blank">
                      <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li>
                  <a href="<?php echo $linkedin ?>" target = "_blank">
                      <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
          </ul>
      </div>
  </div>
  
</div>
