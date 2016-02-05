<?php
$servername = "";
$username = "";
$password = "";
$dbname="";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql="SELECT COUNT(*) As num FROM Killings";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	$row=mysqli_fetch_assoc($result);
	$num=$row[num];
	echo $num;
}	


mysqli_close($conn);












?>
