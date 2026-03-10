<?php 
ob_start();
session_start();
require_once 'classes/db.php';
require_once 'classes/alert.php';
require_once 'classes/user.php';

if (!isset($_GET['package']) ) {
	header('Location: index.php#serviceSection');
}

if(isset($_POST["next"])){
	//get the request parameters
	$package = $_GET['package'];

	$conn = Db::get()->conn;
	$sql = "SELECT * FROM `packages` WHERE `id` = :package";
	$stmt = $conn->prepare($sql);
	$stmt->bindparam(":package",$package);
	$stmt->execute();
	$packge =  $stmt->fetch(PDO::FETCH_OBJ);
	$pay_amount = $packge->price;

	$name = trim($_POST["name"]);
	$age = trim($_POST["age"]);
	$gender = trim($_POST["gender"]);
	$weight = trim($_POST["weight"]);
	$phone = trim($_POST["phone"]);
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);

	$_SESSION['name'] = $name;
	$_SESSION['age'] = $age;
	$_SESSION['gender'] = $gender;
	$_SESSION['weight'] = $weight;
	$_SESSION['phone'] = $phone;
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['pay_amount'] = $pay_amount;
	$_SESSION['package'] = $package;

	header("Location:payments/select_processor.php");
}
?>
<!DOCTYPE html>
<html lang = "en">
<?php require "includes/header.php";?>
<body>

	<div class="container form-container">
		<h3 style="color: #000;">Register</h3>
		<form class="form" method="post" role="form" id="add-form">
			<?php if(isset($status)) echo $status;  ?>
			<div class="form-group">
				<label for="name" class="control-label">Name</label>
				<input type="text" name="name" id="name" class="form-control" required="true">
			</div>
			<div class="form-group">
				<label for="age" class="control-label">Age</label>
				<input type="text" name="age" id="age" class="form-control" required="true">
			</div>
			<div class="form-group">
				<label for="gender" class="control-label">Gender</label>
				<select class="form-control" id="gender" name="gender">
					<option>Male</option>
					<option>Female</option>
				</select>
			</div>
			<div class="form-group">
				<label for="weight" class="control-label">Weight (Kg)</label>
				<input type="number" name="weight" id="weight" class="form-control" required="true">
			</div>
			<div class="form-group">
				<label for="phone" class="control-label">Phone</label>
				<input type="text" name="phone" id="phone" class="form-control" required="true">
			</div>
			<div class="form-group">
				<label for="username" class="control-label">Email</label>
				<input type="email" name="username" id="username" class="form-control" required="true">
			</div>
			<div class="form-group">
				<label for="password" class="control-label">Password</label>
				<input type="password" name="password" id="password" class="form-control" required="true">
			</div>
			<button type="submit" name="next" id="next" class="btn btn-primary btn-block">Next Step</button>
			<br>
			<div style="text-align:center;">
				<a href="login.php">Login</a>
			</div>
		</form>
	</div>

	<script>
		document.getElementById("add-form").addEventListener("submit", function(event){
			var name =
			document.getElementById("name").value;
			var age =
			document.getElementById("age").value;
			var weight =
			document.getElementById("weight").value;
			var phone =
			document.getElementById("phone").value;
			var password =
			document.getElementById("password").value;

			var regName = /\d+$/g;	

			var regAge = /^(1[89]|[2-9]\d)$/gm;

			var regPhone=/^\d{10}$/;	


			if (name == "" || regName.test(name)) {
				window.alert("Please enter your name properly.");
				event.preventDefault();
				return;
			}

			if (!regAge.test(age) || age<20 || age>200) {
				window.alert("Please enter your age properly.");
				event.preventDefault();
				return;
			}

			if (weight == "" || weight<20 || weight>200) {
				window.alert("Please enter your weight properly.");
				event.preventDefault();
				return;
			}

			if (!regPhone.test(phone)) {
					window.alert("Please enter a valid phone number.");
					event.preventDefault();
					return;
			}

			if (password.length < 6) {
				window.alert("Please enter a longer password. Atleast 6 characters");
					event.preventDefault();
					return;
			}
			

		});
	</script>
	
</body>