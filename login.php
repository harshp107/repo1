<?php

include	"dbconn.php";

	$username=$_POST['username'];
	$password=$_POST['password'];
	

$sql="select * from users where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] =$username && $row['password'] == $password){

                echo "Logged in!";
}}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>login</title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<body>
<form method="post" action="">
Username<input type="text" name="username">
Password<input type="password" name="password">

<input type="submit" name="login" value="login">
<a href="signup.php">signup</a>

</form>

</body>
</html>
