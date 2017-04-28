 

<div class="container" >
  <h1 class="col-sm-offset-2"> What you want it to be! </h1>
  <?php 


  function check_data($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

    if($_POST) {
      $name = $_FILES['file']['name'];
      $tmp_name = $_FILES['file']['tmp_name'];

      if(empty($_POST['title']) ) {
        echo  '
          <div class="col-sm-offset-2  col-sm-10 alert alert-danger">
          <p>Please input title!</p>
          </div>
          ' ;      
      } else if(empty($_POST['heading']) ) {
        echo  '
          <div class="col-sm-offset-2  col-sm-10 alert alert-danger">
          <p>Please input heading!</p>
          </div>
          ' ;      
      } else if(empty($_POST['profile']) ) {
        echo  '
          <div class="col-sm-offset-2  col-sm-10 alert alert-danger">
          <p>Please input profile!</p>
          </div>
          ' ;      
      } else if(empty($_POST['body']) ) {
        echo  '
          <div class="col-sm-offset-2  col-sm-10 alert alert-danger">
          <p>Please input body!</p>
          </div>
          ' ;      
      } else if(empty($name) ) {
        echo  '
          <div class="col-sm-offset-2  col-sm-10 alert alert-danger">
          <p>Please choose a file for the image!</p>
          </div>
          ' ;      
      } else {
        $location = 'images/users/';
        move_uploaded_file($tmp_name, $location.$name);
        $id = $_SESSION['id'];
        $strBody = $_POST['body'];
        $remove[] = "'";
        $remove[] = '"';
        $remove[] = "-"; // just as another example
        $strBody = str_replace( $remove, "", $strBody);
        //$strBody = check_data($strBody);
        $q = "INSERT INTO blogs (user,title,heading,profile,body,image) VALUES ($id, '$_POST[title]','$_POST[heading]','$_POST[profile]','$strBody','$location$name')";
        $r = mysqli_query($dbc,$q);
        if($r) {
            $_POST['title'] = "";
            $_POST['heading']="";
            $_POST['profile']="";
            $_POST['body']="";
            echo  '
          <div class="col-sm-offset-2  col-sm-10 alert alert-success">
          <p>Blog Added!</p>
          </div>
          ' ;
        } else {
          echo '<p>Page could not be added because: '.mysqli_error($dbc);
          echo '<p>'.$q.'</p>';
        }
      }
    }

  ?>

   <form class="form-horizontal" action= "index.php?page=3" method = "POST" enctype="multipart/form-data">
            
        <div class="form-group">
          <label class="control-label col-sm-2" for="title">Title:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" 
              value="<?php if(!empty($_POST['title'])){ echo $_POST['title'] ;} else echo '';  ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="heading">Heading:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter Heading" 
              value="<?php if(!empty($_POST['heading'])){ echo $_POST['heading'] ; }  ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="profile">Website:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="profile" name="profile" placeholder="Enter Your Profile Link" 
              value="<?php if(!empty($_POST['profile'])){ echo $_POST['profile'] ; }  ?>">
          </div>
        </div>


        <div class = "form-group">
                <label class="control-label col-sm-2" for = "body">Body:</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name = "body" id = "body" placeholder = "Page Body" rows="15"
                  ><?php if(!empty($_POST['body'])){ echo $_POST['body'] ; }  ?></textarea >
                </div>
        </div>

        

        <div class="form-group">
          <label class="control-label col-sm-2" for = "file">Image:</label>
          <div class="col-sm-10">
            <label class="custom-file">
              <input type="file" id="file" name="file" class="custom-file-input">
              <span class="custom-file-control"></span>
            </label>
          </div>
        </div>
        

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </div>

        <input type = "hidden" name= "submitted" value= "1">

  </form>
</div>
<hr>