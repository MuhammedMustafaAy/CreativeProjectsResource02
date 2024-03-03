<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register form</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body style="background-image: url(img/bg-03.jpg);">

<img src ="img/logo1.jpg" width="150" height="260" alt="" />
<form method="post" action="" style="background-color: lightblue;">
    <h1>Become a member :)</h1> 
    <input style="background-color: white;" type="text" name="name" placeholder="name" required="">
    <input style="background-color: white;" type="password" name="password" placeholder="password" required="">
    <button type="submit" name="submit"> Register</button>

<p class="message"> Already Registered? <a href="login.php"> Login </a></p>
</form>
<?php 
  include_once 'db1.php';

  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];

    $res=mysqli_query($link, "SELECT * FROM Student WHERE name='$name'");

    $res1=mysqli_num_rows($res);

    if($res1>=1)
    {
         ?>
         echo '<script>window.onload=function()
         {
            alert("Name exist! please choose another name");
         }
         </script>'  
        <?php      
    }
    else {
    mysqli_query($link, "INSERT INTO Student VALUES('$name', '$password')");
    ?>
    echo '<script>
        confirm("User registered! please loggin");
    </script>'
    <?php
    }
  }
 ?>
 </body>
</html>