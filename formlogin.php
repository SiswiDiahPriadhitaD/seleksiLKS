<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="asset/css/form.css">
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
	<div class="left">
		<div class="img">
			<img src="asset/img/favicon-96x96.png">
			<p>Asian Games <br> 2018 | Jakarta-Palembang</p>
		</div>
	</div>
	<center>
	<div class="right">
		<form action="login.php" method="post" enctype="multipart/form-data">
		<h1>Login page</h1>
			<table>
				<tr>
					<td><input type="text" name="username" placeholder="Username"></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Password"></td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-login">Login</button></td>
				</tr>
				<tr>
					<td><p>Belum Sign up?<a href="register.php">Sign Up</a></p></td>
				</tr>
			</table>
		</form>
	</div>
	</center>
</body>
</html>