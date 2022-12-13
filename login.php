<?php 
	session_start();
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$query = mysqli_query($con,"SELECT * FROM login WHERE username='$username' AND password='$password'");

	$result = mysqli_num_rows($query);
	$status = mysqli_fetch_array($query);

	if ($result > 0) {
		if ($status['status']=="admin") {
			$_SESSION['username']=$status['username'];
?>
				<script type="text/javascript">
					alert('Selamat datang admin');
					window.location='admin.php';
				</script>
<?php
		}else{

			$_SESSION['username']=$status['username'];
?>
				<script type="text/javascript">
					alert('Selamat datang user');
					window.location='user.php';
				</script>
<?php
		}
	}else{
		echo "salah";
	}
 ?>