<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php
	$mysqli = new mysqli("localhost","root","","mm");
	$result = $mysqli->query('SELECT * FROM files');
		if($result)
		{
			echo "Success<br>";
		}
		else{
			echo "not success";
		}
	
?>
<table width="340" border="1">
<tr>
<th width="150"> <div align="center">Picture</div></th>
<th width="150"> <div align="center">Name</div></th>
<th width="150"> <div align="center">Edit</div></th>
</tr>
<?php
	while($objResult = mysqli_fetch_array($result))
	{
?>
<tr>
<td><center><img src="myfile/<?=$objResult["FilesName"];?>"></center></td>
<td><center><?=$objResult["Name"];?></center></td>
<td><center><a href="PageUploadToMySQL4.php?FilesID=<?=$objResult["FilesID"];?>">Edit</a></center></td>
</tr>
<?php
	}
?>
</table>
<?php
mysqli_close($mysqli);
?>
</body>
</html>