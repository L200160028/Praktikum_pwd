<?php
session_start();
echo "Anda Berhasil Login".$_SESSION['user']."dan anda terdaftar sebagai ".$_SESSION['status'];
?>
<br>
silahkan logout dengan kilk link <a href="logout.php">Disini</a>