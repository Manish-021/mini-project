<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
	<body style="background-image: url('https://static.vecteezy.com/system/resources/previews/001/849/553/original/modern-gold-background-free-vector.jpg');
background-size: cover; text-align: center;">
<img src="bl.png" alt="" style="height:400px; padding-top: 20px; text-align: center; background-size: cover; width: 75%; height: 300px; ">


<?php

if (isset($_POST['submit'])) {

 $fname = $_POST['name'];
 $dob = $_POST['dob'];
 $phone = $_POST['number'];
 $mail = $_POST['email'];
 $password = $_POST['pass'];

$connection = mysqli_connect('localhost','root','','mini');
if(!$connection){
	echo "you are not connected to server";
}

$query_insert = "INSERT INTO sign_up(name,mobile,password,DOB,gmail) VALUES('$fname','$phone','$password','$dob','$mail')";

if (mysqli_query($connection,$query_insert)) {
	echo"<br>";
	echo "<p style='text-align: center;color: white; font-size: 20px;'>sucessfully created an account</p>";
}

}

?>
<form action="login.html" style="text-align: center; font-size: 20px;">
	<br>
	<input type="submit" name="s1" value="please login">
</form>

</body>
</html>

