<?php
$conn = new mysqli("localhost","root","","nmit");

if($conn->connect_error)
{
die("Connection failed:".$conn->connect_error);
}
$sql = "select * from notices where category='".$_POST["cat"]."'";

$res=$conn->query($sql);

if($res->num_rows >0)
        {
            while($row=$res->fetch_assoc())
            {

                echo "select * from notices where category='".$_POST["cat"]."'";
                echo "<br><br>";
                echo "<table border=1>";
                echo "<tr> <td>Notice Id</td><td>". $row["nid"] . "</td></tr>";
                echo "<tr><td>Date</td><td>". $row["ndate"] . "</td></tr>";
                echo "<tr><td>Category</td><td>". $row["category"] . "</td></tr>";
                echo "<tr><td>Description</td><td>". $row["description"] . "</td></tr>";
                echo "</table>";
                
                // else
                // echo file_get_contents("login.php");
                break;
            }
        }
else
    {
        echo "No notices in this category<br><br>";
        echo "<a href='login.php'>TRY AGAIN</a>";
    }
?>
