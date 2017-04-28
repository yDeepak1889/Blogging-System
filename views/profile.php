
<?php
	$id = $_SESSION['id'];
	require('login/db_connect.php');

	$f1 = false;
	$f2 = false;
	$f3 = false;
	$f4 = false;
	$f5 = false;





	//First and last name done
	$query = "SELECT * FROM `users` Where `id` = '".$id."'";
	$query_run = mysqli_query($db_link, $query);
	 if($query_run){
	    	$arr1 = mysqli_fetch_assoc($query_run);
			if (!empty($arr1))
				//echo "Correct"; 
			    $f1 = true;
	}else {
		echo "<script>alert('Something went wrong')</script>";
	}

	// Personal info done
	$query = "SELECT * FROM `personal` Where `id` = '".$id."'";
	$query_run = mysqli_query($db_link, $query);
	 if($query_run){
	    	$arr2 = mysqli_fetch_assoc($query_run);
	    	if (!empty($arr2)){
	    		$f2 = true;
	    		//printf("Success");
	    	}
	    		
			//print_r($arr2);
	}else {
		echo "<script>alert('Something went wrong')</script>";
	}

	//Location info done
	$query = "SELECT * FROM `location` Where `id` = '".$id."'";
	$query_run = mysqli_query($db_link, $query);
	 if($query_run){
	    	$arr3 = mysqli_fetch_assoc($query_run);
	    	//printf("correct3");
	    	if (!empty($arr3)) 
	    		$f3 = true;
			//print_r($arr3);
	}else {
		echo "<script>alert('Something went wrong')</script>";
	}

	//Social info done
	$query = "SELECT * FROM `social` Where `id` = '".$id."'";
	$query_run = mysqli_query($db_link, $query);
	 if($query_run){
	    	$arr4 = mysqli_fetch_assoc($query_run);
	    	//printf("correct4");
	    	if (!empty($arr4)) 
	    		$f4 = true;
			//print_r($arr4);
	}else {
		echo "<script>alert('Something went wrong')</script>";
	}

	//About me
	$query = "SELECT * FROM `aboutme` Where `id` = '".$id."'";
	$query_run = mysqli_query($db_link, $query);
	 if($query_run){
	    	$arr5 = mysqli_fetch_assoc($query_run);
	    	//printf("correct4");
	    	if (!empty($arr5)) {
	    		$f5 = true;
			    //print_r($arr5);
	    	}
	    	//echo count($arr5);
	}else {
		echo "<script>alert('Something went wrong')</script>";
	}

?>


<?php
	if($_POST) {

			$name = $_FILES['file']['name'];
			$tmp_name = $_FILES['file']['tmp_name'];

			$flag = true;
		  
		  	$location = 'images/users/';
		  	if (!empty($name))
           		move_uploaded_file($tmp_name, $location.$name);

            // Personal Info
            $nick = $_POST['nick'];
            $phone = $_POST['phone'];
            $birth = $_POST['birthdate'];
            if (empty($name)) {
            	if (!empty($arr2['image'])) {
            		$location = $arr2['image'];
            	}else
            		$location = "";
            }
            if (!$f2){
            	$query = "INSERT INTO `personal` VALUES ($id,'$nick', '$phone','$birth', '$location$name')";
            	//echo $query;
            }
            else
            	$query = "UPDATE `personal` SET `nick` = '$nick', `phone` = '$phone', `birth` = '$birth', `image` = '$location$name' WHERE `id` = $id";

            $query_run = @mysqli_query($db_link, $query);

            if (!$query_run) {
            	$flag = false;
            }


            //Location 
            $country = $_POST['country'];
            $city = $_POST['city'];
            $institution = $_POST['institution'];
            if (!$f3)
            	$query = "INSERT INTO `location` VALUES ($id,'$country', '$city','$institution')";
            else
            	$query = "UPDATE `location` SET `country` = '$country', `city` = '$city', `institution` ='$institution' WHERE `id` = $id";

            $query_run = @mysqli_query($db_link, $query);

            if (!$query_run) {
            	$flag = false;
            }

            // Social
            $fb = $_POST['fb'];
            $twitter = $_POST['twitter'];
            $linkedin = $_POST['linkedin'];
            if (!$f4)
            	$query = "INSERT INTO `social` VALUES ($id,'$fb', '$twitter','$linkedin')";
            else
            	$query = "UPDATE `social` SET `fb` = '$fb', `twitter` = '$twitter', `linkedin` = '$linkedin' WHERE `id` = $id";

            $query_run = @mysqli_query($db_link, $query);

            if (!$query_run) {
            	$flag = false;
            }

            //About me
            $body = $_POST['body'];
            if (!$f5)
            	$query = "INSERT INTO `aboutme` VALUES ($id,'$body')";
            else
            	$query = "UPDATE `aboutme` SET `body` = '$body '  WHERE `id` = $id";

            $query_run = @mysqli_query($db_link, $query);

            if (!$query_run) {
            	$flag = false;
            }

		    if($flag) {
		       
		        echo  '
		      <div class="alert alert-success text-center">
		      <p>SAVED!</p>
		      </div>
		      ' ;
		    } else {
		      echo '<div class="text-center alert alert-danger">
		      		<p>Page could not be added because: '.mysqli_error($dbc)
		      		.'</div>';
		    }
	}

?>



<div class="container profilePage" >
	<h1 class="text-center" > Manage Profile </h1>
	<form class="form-horizontal" action= "index.php?page=4" method = "POST" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-6">
				<h3 class="text-center" >Personal Information</h3>
				<p class"text-center" >Your personal information will help us to compare your activity with activity of 
					other users from your country and the neighborhood!
				</p>
				<br>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="username">Username:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" 
				      value="<?php if(!empty($_POST['username'])){ echo $_POST['username'] ;} else echo $arr1['username'];  ?>" disabled>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="nick">Nick:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="nick" name="nick" placeholder="Enter nickname" 
				      value="<?php if(!empty($_POST['nick'])){ echo $_POST['nick'] ;} else echo $arr2['nick'];  ?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="first">First Name:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="first" name="first" placeholder="Enter first name" 
				      value="<?php if(!empty($_POST['first'])){ echo $_POST['first'] ;} else echo $arr1['first'];  ?>" disabled>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="last">Last Name:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="last" name="last" placeholder="Enter last name" 
				      value="<?php if(!empty($_POST['last'])){ echo $_POST['last'] ;} else echo $arr1['last'];  ?>" disabled>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="phone">Phone:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" 
				      value="<?php if(!empty($_POST['phone'])){ echo $_POST['phone'] ;} else echo $arr2['phone'];  ?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="birthdate">Birthdate:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="DD-MM-YYYY" 
				      value="<?php if(!empty($_POST['birthdate'])){ echo $_POST['birthdate'] ;} else echo $arr2['birth'];  ?>">			      
				  </div>
				</div>

				<div class="form-group">
				  <label class="control-label col-sm-2" for = "file">Profile Pic:</label>
				  <div class="col-sm-8">
				    <label class="custom-file">
				 	
				 	<input type="file" id="file" name="file" class="custom-file-input">

				      <span class="custom-file-control"></span>
				    </label>
				  </div>
				</div>

				<hr>

				<h3 class="text-center" >Location</h3>
				<br>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="country">Country:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="country" name="country" placeholder="Enter country" 
				      value="<?php if(!empty($_POST['country'])){ echo $_POST['country'] ;} else echo  $arr3['country'];  ?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="city">City:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" 
				      value="<?php if(!empty($_POST['city'])){ echo $_POST['city'] ;} else echo  $arr3['city'];  ?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="institution">Institution:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="institution" name="institution" placeholder="Enter institution" 
				      value="<?php if(!empty($_POST['institution'])){ echo $_POST['institution'] ;} else echo  $arr3['institution'];  ?>">
				  </div>
				</div>

			</div>
			
			<div class="col-md-6">
				<h3 class="text-center" >About me</h3>
				<p class="text-center">Tell us what you interested in...</p>
				<div class = "form-group">
				        <label class="control-label col-sm-2" for = "body">Body:</label>
				        <div class="col-sm-10">
				          <textarea class="form-control" name = "body" id = "body" placeholder = "Page Body" rows="8"
				          ><?php if(!empty($_POST['body'])){ echo $_POST['body'] ; }else {echo  $arr5['body'];}  ?></textarea >
				        </div>
				</div>

				<hr>

				<h3 class="text-center" >Social Media</h3>
				<br>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fb">Facebook:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="fb" name="fb" placeholder="http://" 
				      value="<?php if(!empty($_POST['fb'])){ echo $_POST['fb'] ;} else echo  $arr4['fb'];  ?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="twitter">Twitter:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter name" 
				      value="<?php if(!empty($_POST['twitter'])){ echo $_POST['twitter'] ;} else echo $arr4['twitter'];  ?>">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="linkedin">LinkedIn:</label>
				  <div class="col-sm-8">
				    <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="LinkedIn Id" 
				      value="<?php if(!empty($_POST['linkedin'])){ echo $_POST['linkedin'] ;} else echo $arr4['linkedin'];  ?>">
				  </div>
				</div>


			</div>
		</div>
		<hr>
		<div class="form-group ">
		  <div class="text-center">
		    <button type="submit" class="btn btn-default">SAVE</button>
		  </div>
		</div>

		<input type = "hidden" name= "submitted" value= "1">

	</form>
</div>
<hr>