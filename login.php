<html>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="tampil.css"/>

	<?php session_start();
	if(isset($_SESSION['username'])) {
	header('location:ui.php'); }
	require_once("conek.php");
	?>
	
	<head>
	<div class="kotak_login">
		<p class="tulisan_login"><b>Silahkan login</p>
	</head>
	
	<form action="proseslogin.php" method="post">
	<body>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required"></input>

			<label>Password</b></label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required"></input>

			<input type="submit" class="tombol_login" value="Login"/>

		</div>
	</body>
	</form>
</html>