<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
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

    <form class="container" method="post" name="login">
        <h1 >Login</h1>
        <input type="text" name="username" placeholder="Username" autofocus="true"/><br>
        <input type="password"  name="password" placeholder="Password"/><br>
        <input type="submit" value="Login" name="submit" /><br>


        <p ><a href="registration.php">New Registration</a></p><br>
    </form>

	<button id="myBtn">Leader Board</button>

	<div id="myModal" class="modal">

  		<div class="modal-content">
    			<span class="close">&times;</span>
			<p> Since this is not a score-based game, this leaderboard contians information retrieved from the 
database.  </p>
    			<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: mysqli_connect(): The server requested authentication method unknown to the client [caching_sha2_password] in C:\wamp64\www\ah\login.php on line <i>61</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0003</td><td bgcolor='#eeeeec' align='right'>404192</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\ah\login.php' bgcolor='#eeeeec'>...\login.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.2477</td><td bgcolor='#eeeeec' align='right'>453544</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.mysqli-connect' target='_new'>mysqli_connect</a>
(  )</td><td title='C:\wamp64\www\ah\login.php' bgcolor='#eeeeec'>...\login.php<b>:</b>61</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: mysqli_connect(): (HY000/2054): The server requested authentication method unknown to the client in C:\wamp64\www\ah\login.php on line <i>61</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0003</td><td bgcolor='#eeeeec' align='right'>404192</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\ah\login.php' bgcolor='#eeeeec'>...\login.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.2477</td><td bgcolor='#eeeeec' align='right'>453544</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.mysqli-connect' target='_new'>mysqli_connect</a>
(  )</td><td title='C:\wamp64\www\ah\login.php' bgcolor='#eeeeec'>...\login.php<b>:</b>61</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property 'connect_error' of non-object in C:\wamp64\www\ah\login.php on line <i>63</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0003</td><td bgcolor='#eeeeec' align='right'>404192</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\ah\login.php' bgcolor='#eeeeec'>...\login.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-uncaught-exception' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Fatal error: Uncaught Error: Call to a member function query() on bool in C:\wamp64\www\ah\login.php on line <i>68</i></th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Error: Call to a member function query() on bool in C:\wamp64\www\ah\login.php on line <i>68</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0003</td><td bgcolor='#eeeeec' align='right'>404192</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp64\www\ah\login.php' bgcolor='#eeeeec'>...\login.php<b>:</b>0</td></tr>
</table></font>
