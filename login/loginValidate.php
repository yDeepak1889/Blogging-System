<?php
	ob_start();
	@session_start();
	function check_data($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['name']) && isset($_POST['pass_me']) && !empty($_POST['name']) && !empty($_POST['pass_me'])) {
			$name = check_data($_POST['name']);
			$pass_me = check_data($_POST['pass_me']);
			$uname_err = "";
			$pass_me_err = "";
			if(empty($uname_err) && empty($pass_me_err)) {
				$pass_me_md = md5($pass_me);

				$query = "SELECT `id` FROM `users` WHERE `username` = '".mysqli_real_escape_string($db_link,$name)."' AND `password` = '".mysqli_real_escape_string($db_link,$pass_me_md)."'";
				
				if($query_run = mysqli_query($db_link , $query)) {
					$len = mysqli_num_rows($query_run);
					if ($len) {
						$arr = mysqli_fetch_assoc($query_run);
						$arr = $arr['id'];
						$_SESSION['id'] = $arr;
						$_SESSION['username'] = $name;
						header('Location: ../index.php');
						
					}else {
						$err_login = "Username and password not matched";
					}
				}
			}
		}
	}

?>
