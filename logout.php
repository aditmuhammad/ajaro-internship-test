<html>
<title>LOGOUT</title>
<link rel="stylesheet" type="text/css" href="tampil.css"/>
<?php session_start();
unset($_SESSION['username']);
?>
<body>
<div class="kotak_login">
<p class="tulisan_login"><b>Anda telah berhasil logout
Silahkan klik untuk login kembali<b></p>
<a href="login.php"><input type="submit" class="tombol_login" value="Kembali"/></b></a>
</div>
</html>