<!DOCTYPE html>

<html>

<head>

<title> LOGIN form</title>

<link rel="stylesheet" type="text/css" href="form.css">

</head>

<body style="background-image: url(img/bg-03.jpg);">

<img src ="img/logo1.jpg" width="150" height="260" alt="" />



<form method="post" action="" style="background-color: lightblue;" >
 <h1>Welcome to Sportify :)</h1>   

<input type="text" name="name" placeholder="name" required="">

<input type="password" name="password" placeholder="password" required="">

<button type="submit" name="submit"> LOGIN</button>

<p class="message"> Not Registered? <a href="register1.php"> Register </a></p>

</form>



<?php

session_start();
include_once 'db1.php';

if(isset($_POST["submit"]))

{

 $name = $_POST['name'];

 $password = $_POST['password'];

 $res = mysqli_query($link, "SELECT * FROM Student WHERE name='$name' && password='$password'");


 $res1 = mysqli_num_rows($res);
 if($res1 == 1)
 {
 echo '<script> window.onload=function() { alert("Successfully Logged In"); } </script>';header("location:index-2.html");
 }
 else
 {
 echo '<script> window.onload=function() { alert("LOGIN ERROR"); } </script>';
 }}
?>

</body>

</html>