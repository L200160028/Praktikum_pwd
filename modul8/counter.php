<?php
session_start();
error_reporting(E_ALL^E_NOTICE);
?>
<!DOCTYPE html>
<html>
<head>
	<title>mengakses sistem</title>
</head>
<body>
<?php
$_session['counter']++;
$_session['nama_pengunjung'] = "adul";
echo "selamat datang  ".$_session['nama_pengunjung']."!"."<br>";
echo "anda telah mengunjungi halaman ini sebanyak".$_session['counter']."kali.";
?>
</body>
</html>