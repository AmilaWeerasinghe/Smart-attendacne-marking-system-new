<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>SAMS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="header">
	<h1>Smart Attendance Marking System</h1>
		<h2>Admin Login Menu</h2>
	</div>
	<form method="post" action="login.php" hright="50px">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Admin Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Admin Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn_admin">Admin Login</button>
		</div>
		<p>
			Strictly available for SAMS Admins. 
		</p>
	</form>
</body>
</html>