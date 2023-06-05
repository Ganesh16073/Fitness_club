<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validated Login Form</title>
	<link rel="stylesheet" href="val.css">
</head>
<body>
	<div class="container">
		<h1 class="label">User Login</h1>
		<form class="login_form" action="home.html" method="post" name="form" onsubmit="return validated()">
			<div class="font">Email or Phone</div>
			<input autocomplete="off" type="text" name="email">
			<div id="email_error">Please fill up your Email or Phone</div>
			<div class="font font2">Password</div>
			<input type="password" name="password">
			<div id="pass_error">Please fill up your Password</div>
			<button title="login"><a href="index.php" class="button">log in</a></button>
			
			
			
		</form>
	</div>	
	<script src="valid.js"></script>
</body>
</html>