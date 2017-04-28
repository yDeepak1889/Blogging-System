<?php
	function check($data) {
		$data = trim ($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	if (isset($_POST['regname']) && isset($_POST['regpass']) && isset($_POST['reregpass'])) {

		$username = check($_POST['regname']);
		$password = check($_POST['regpass']);
		$re_pass = check($_POST['reregpass']);
		$first_name = check($_POST['regFirstName']);
		$last_name = check($_POST['regLastName']);
		$name_err = "";
		$pass_err = "";
		$username_err = "";
		$pass_match = "";
		$err_signup = "";

		if (preg_match('/^[a-zA-Z0-9]*$/', $username) && !preg_match('/^[a-z0-9]*$/', $username) && !preg_match('/^[A-Z0-9]*$/', $username) && !preg_match('/^[0-9]*$/', $username)) {
			$flag_pass = true;
		}else{
			$err_signup = "Username should contain at least one capital letter , one small letter and one numeric digit\n";
		}
		if (preg_match('/^[a-zA-Z0-9]*$/', $password)) {
			$flag_usr = true;
		}else{
			$err_signup = "Password should not contain ant special character";
		}
		if ($password !== $re_pass) {
				$err_signup = "Both Password should match\n";
		}
		if (empty($err_signup)) {

				$query0 = "SELECT `username` FROM `users` WHERE `username` = '$username'";
				$query_run0 = @mysqli_query($db_link, $query0);
				$len = @mysqli_num_rows($query_run0);
				if ($len) {
					$err_signup = "Username already exists";
				}else {
					$password_md = md5($password);
					$query = "INSERT INTO `users`  (`first`, `last`,`password`, `username`) VALUES ('$first_name','$last_name', '$password_md','$username')";
					//echo $query;
					$query_run = @mysqli_query($db_link, $query);
					//echo $query_run;
					if (!$query_run) {
						echo "<script>alert('Sign Up Unsuccessful')</script>";
					}else {
						unset($password);
						unset($password_md);
						unset($username);
						unset($re_pass);
						echo "<script>alert('Successfully signed Up')</script>";
						header('Location: ../login/index.php');
					}
				}
		}
	}
?>

