<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["filUpload"]["name"]);
$name=$_POST['txtName'];
$pic=$_FILES['filUpload']['name'];
	if(move_uploaded_file($_FILES["filUpload"]["tmp_name"], $target_file))
	{
		echo "Copy/Upload Complete<br>";

		//*** Insert Record ***//
		$mysqli = new mysqli("localhost","root","","mm");
		if(mysqli_connect_error()){
				echo "not connect";
		}else{
			 echo "connect complete<br><br>";
				 $sql="INSERT INTO files (Name,FilesName) values('$name','$pic');";
				 $result = $mysqli->query($sql);
				 if($result)
				 {
					 echo "Success<br>";
				 }
				 else{
					 echo "not success";
				 }
		}
	}
?>
<a href="PageUploadToMySQL3.php">View files</a>
</body>
</html>