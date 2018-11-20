<?php 
	if(isset($_POST['submit']) ){ 

	$username = $_POST['user'];
	$password = $_POST['pass'];
	$con = mysqli_connect("localhost","root","");
	$username =	stripcslashes($username);
	$password =	stripcslashes($password);
	$username = mysqli_real_escape_string($con,$username);
	$password =	mysqli_real_escape_string($con,$password);


	
	mysqli_select_db($con,"pwusername");
	$kerja = "select * from users where username = '$username' and password = '$password'";
	$result = mysqli_query($con,$kerja)
			or die("Gagal : ".mysqli_error($con));
	$row = mysqli_fetch_array($result);

	if($row['username'] == $username && $row['password'] == $password){
		echo "Berhasil. Selamat Datang ".$row['username'];
	}
	else{
		echo "Username Or Password you've entered was invalid...";
	}
}
else echo "Ga bisa";
 ?>