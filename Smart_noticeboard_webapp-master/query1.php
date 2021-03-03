<!DOCTYPE html>
<html>

<body>
<center><h2>
<?php
$conn = new mysqli("localhost","root","","nmit");

if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}

	$sql = "insert into query values ('" .$_POST["name"] ."','" .$_POST["ques"] ."','" .$_POST["email"] ."')";

	if ($conn->query($sql)==TRUE){
	echo "New query added successfully";
	}
	else
	{
	echo "Error: ".$sql."<br>".$conn->error;
	}

?>


</h2></center>

</body>
</html>