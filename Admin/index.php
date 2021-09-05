<!-- File to add header style and function to multipe pages with preset navigation bar. -->
<?php
include('../dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<!-- Header tag to include all stylesheet and javascript files -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="extra/icon.png" type="image/x-icon" />
	<meta name="description" content="" />
	<meta name="author" content="D.Sharath" />
	<meta name="generator" content="Hugo 0.79.0" />
	<title>Student Management System</title>
	<!-- Bootstrap core CSS -->
	<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
	<div class="wrapper">
		<div class="card">
			<form action="extra/login.php" method="POST" class="d-flex flex-column">
				<div class="h3 text-center text-white"><u>Admin Login</u></div>
				<div class="d-flex align-items-center input-field my-3 mb-4">
					<span class="far fa-user p-2"></span>
					<input type="text" placeholder="UserName" name="user" required class="form-control">
				</div>
				<div class="d-flex align-items-center input-field mb-4">
					<span class="fas fa-lock p-2"></span>
					<input type="password" placeholder="Password" name="passwd" required class="form-control" id="pwd">
					<button class="btn" onclick="showPassword()">
						<span class="fas fa-eye-slash"></span>
					</button>
				</div>
				<div class="d-sm-flex align-items-sm-center justify-content-sm-between">
					<div class="mt-sm-0 mt-3"><a href="../index.php">Student Login</a></div>
				</div>
				<div class="my-3"> <input type="submit" value="Login" class="btn btn-primary"> </div>
			</form>
		</div>
		<script>
			function showPassword() {
				var password = document.getElementById('pwd');
				if (password.type === 'password') {
					password.type = "text";
				} else {
					password.type = "password";
				}
			}
		</script>
</body>

</html>