<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action ="" method="post">
		<label>Name :<input type="text" name="name"><br></label>
		<label>Kritik :<br><textarea cols=="45" rows="5" name="kritik"></textarea></label></br>
		<label>Saran :<br><textarea cols=="45" rows="5" name="saran"></textarea></label></br>
		<input type="submit" name="post" value="Post">
	</form>

<?php 

$name = $_POST[ "name" ];
$text = $_POST[ "kritik" ];
$post = $_POST[ "post" ];

if($post){
	$write = fopen("com.txt", "a+");
	fwrite($write, "<u><b> $name</b></u><br>$text<br>");
	fclose($write);


	$read=fopen("com.txt", "r+t");
	echo "All Comments:<br> ";

	while (!feof($read)) {
		# code...
		echo fread($read, 1024);
	}

	fclose($read);
}

else{

	$read=fopen("com.txt", "r+t");
	echo "All Comments:<br> ";

	while (!feof($read)) {
		# code...
		echo fread($read, 1024);
	}

	fclose($read);

}

?>
</body>
</html>