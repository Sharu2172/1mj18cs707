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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
	<div class="wrapper">
		<div class="card">
			<form action="extra/login.php" method="POST" class="d-flex flex-column">
				<div class="h3 text-center text-white"><u>Admin Login</u></div>
				<div class="d-flex align-items-center input-field my-3 mb-4">
					<span class="bi-person-fill p-2"></span>
					<input type="text" placeholder="UserName" name="user" required class="form-control">
				</div>
				<div class="d-flex align-items-center input-field mb-4">
					<span class="bi-key-fill p-2"></span>
					<input type="password" placeholder="Password" name="passwd" required class="form-control" id="pwd">
					<button class="btn" id="eye">
						<span class="bi-eye-slash"></span>
					</button>
				</div>
				<div class="d-sm-flex align-items-sm-center justify-content-sm-between">
					<div class="mt-sm-0 mt-3"><a href="../index.php">Student Login</a></div>
				</div>
				<div class="my-3"> <input type="submit" value="Login" class="btn btn-primary"> </div>
			</form>
		</div>
		<script>
			const togglePassword = document.querySelector('#eye');
			const password = document.querySelector('#pwd');
			togglePassword.addEventListener('click', function(e) {
				e.preventDefault();
				// toggle the type attribute
				const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
				password.setAttribute('type', type);
			});
		</script>
</body>

</html>