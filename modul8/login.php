<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
$conn=mysqli_connect('localhost','root','','informatika');


$user= $_POST['user'];
$pass=$_POST['pass'];
$submit=$_POST['submit'];

if ($submit) {
	$sql = "select * from user where user='$user' and pass='$pass' ";
	$query= mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($query);
	
	if ($row['user'] !='') {
		// berhasil login
		$_SESSION['user']=$row['user'];
		$_SESSION['status']=$row['status'];
		?>
		<script language script="JavaScript">
			alert('anda login sebagai <?php echo $row['user'];
				?>');
			document.location='hasillogin.php';
		</script>
		<?php
	}else{
		// gagal login
		?>
		<script language script="JavaScript">
			alert('gagal login');
			document.location='login.php';
		</script>
		<?php
	}
}
?>
<form method="POST" action="login.php">
	<p align="center">
		Username	: <input type="text" name="user"><br>
		Password	: <input type="password" name="pass"><br>
		<input type="submit" name="submit">
	</p>
</form>