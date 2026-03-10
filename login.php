<?php 
ob_start();
session_start();
require_once 'classes/db.php';
require_once 'classes/alert.php';
require_once 'classes/user.php';

if (isset($_SESSION['login_id']) && isset($_SESSION['login_type']) ) {
	$login = $_SESSION['login_id'];
	$login_type = $_SESSION['login_type'];
	if ($login_type == "member") {
		header("Location: accounts/member/");
	}elseif ($login_type == "admin") {
		header("Location: accounts/admin/");
	}elseif ($login_type == "trainer") {
		header("Location: accounts/trainer/");
	}
}

if(isset($_POST["login"])){
//get the request parameters
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);

	$user = new User();

	$tof = $user->login($username,$password);

	if(!$tof){
		$status = Alert::create('danger','Aunthentication Failed','Invalid email or password.');
	}else{
		$login = $_SESSION['login_id'];
		$login_type = $_SESSION['login_type'];
		if ($login_type == "member") {
			header("Location: accounts/member/");
		}elseif ($login_type == "admin") {
			header("Location: accounts/admin/");
		}elseif ($login_type == "trainer") {
			header("Location: accounts/trainer/");
		}
		
	}
}
?>
<!DOCTYPE html>
<html lang = "en">
<?php require "includes/header.php";?>
<body>

	<div class="container form-container">
		<h3 style="color: #000;">Login</h3>
		<form class="form" method="post" role="form">
			<?php if(isset($status)) echo $status;  ?>
			<div class="form-group">
				<label for="username" class="control-label">Username</label>
				<input type="email" name="username" id="username" class="form-control" required="true">
			</div>
			<div class="form-group">
				<label for="password" class="control-label">Password</label>
				<input type="password" name="password" id="password" class="form-control" required="true">
			</div>
			<button type="submit" name="login" id="login" class="btn btn-primary btn-block">Login</button>
			<br>
			<div style="text-align:center;">
				<a href="index.php#serviceSection">Register</a>
			</div>
		</form>
	</div>

	
</body>