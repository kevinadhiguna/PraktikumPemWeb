<?php  
	$con = mysqli_connect('localhost','root','');

	if (!$con) {
		echo "Tidak tersambung pada Server";
	}

	if (!mysqli_select_db($con,'dblw')) {
		echo "Database belum dipilih..";
	}

	$user=$_POST['user'];
	$pwd=$_POST['pwd'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$jk=$_POST['jk'];
	$birth_date=$_POST['birth_date'];
	$email=$_POST['email'];

	$sql="insert into users (username,password,firstname,lastname,jk,birth_date,email) values ('$user','$pwd','$first_name','$last_name','$jk','$birth_date','$email')";
	if (!mysqli_query($con,$sql)) {
		echo "Pengisian belum berhasil";
	}
	else{
		echo "Pengisian Berhasil!";
	}
	//header("refresh:2; url=signup.php");
