<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
     <link rel="stylesheet" href='sketch.css'>
</head>
<body>
<? php

session_start();
$servername = "localhost";
	$username = "";
	$password = "";
	$dbname = "";
$con=mysqli_connect("sql9.freemysqlhosting.net", "sql9338063", "CsJa1fuy5I","sql9338063");

if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>    <div class="middle" style="margin-top: 10%">
    <form  class="container" action="" method="post">
        <h1 >Registration</h1>
        <input type="text" name="username" placeholder="Username" required /><br>

        <input type="password"name="password" placeholder="Password"><br>
        <input type="submit" name="submit" value="Register"><br>
        <p ><a href="login.php">Click to Login</a></p><br>
    </form>
</div>
</body>
</html>