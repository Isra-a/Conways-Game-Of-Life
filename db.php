<? php

session_start();
//omitted
$servername = "";
	$username = "";
	$password = "";
	$dbname = "";
$con=mysqli_connect($servername, $username,$password,$dbname);

if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
