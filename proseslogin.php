<html>
<title>ERROR</title>
<link rel="stylesheet" type="text/css" href="tampil.css"/>
<head>
<div class="kotak_login">
</head>
<body>
<center>
<?php session_start();
require_once("conek.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("SELECT * FROM tb_login WHERE username = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0) {
echo '<p class="tulisan_login"><b>Username Belum Terdaftar !!!</b></p>';
echo '<a href="login.php"><input type="submit" class="tombol_login"/ value="Kembali"></a>';
} else {
if($pass != $hasil['password']) {
echo '<p class="tulisan_login"><b>Password Salah !!!</b></p>';
echo '<a href="login.php"><input type="submit" class="tombol_login"/ value="Kembali"></a>';
} else {
$_SESSION['username'] = $hasil['username'];
header('location:ui.php');
}
}
?>
</center>
</div>
</body>
</html>