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
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php" hright="50px">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? Contact an Admin 
		</p>
	</form>
</body>
</html>