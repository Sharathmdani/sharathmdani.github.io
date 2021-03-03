<!DOCTYPE html5>
<html>
<body>

<?php
$conn = new mysqli("localhost","root","","nmit");

if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}
$sql = "select * from admin where name='".$_POST["name"]."'";

$res=$conn->query($sql);

if($res->num_rows >0)
		{
			while($row=$res->fetch_assoc())
			{
				if($row["pswd"]==$_POST["pswd"])
				{

				header('Location: login/index.php');

				// echo "Welcome  ";//. $_POST["usn"];
				// echo "<br><br>";
				// echo "<table border=1>";
				// echo "<tr> <td>First Name</td><td>". $row["first_name"] . "</td></tr>";
				// echo "<tr><td>Last Name</td><td>". $row["last_name"] . "</td></tr>";
				// echo "<tr><td>Email</td><td>". $row["email"] . "</td></tr>";
				// echo "<tr><td>Phone No</td><td>". $row["phoneno"] . "</td></tr>";
				// echo "<tr><td>Branch</td><td>". $row["branch"] . "</td></tr>";
				// echo "<tr><td>USN</td><td>". $row["usn"] . "</td></tr>";
				// echo "<tr><td>Pasword</td><td>". $row["password"] . "</td></tr>";
				//echo "</table>";
				}
				else
				echo file_get_contents("login.html");
				break;
			}
		}
else
	{
		echo "USERNAME DOES NOT EXIST<br><br>";
		echo "<a href='login.html'>TRY AGAIN</a>";
	}
?>

</body>
</html>