<?php
$first=$_POST["fname"];
$last=$_POST["lname"];
$email =$_POST["email-id"];
$pass=$_POST["pass"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mysql";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
echo "Connected successfully";
echo "<br>";	

$sql="insert into testing(first_name,last_name) values('$first','$last')";

if(mysqli_query($conn,$sql))
{
    echo "New Record Entered";
}
else
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
