<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="wrapper fadeInDown">
    <div id="formContent">
        <form method="post" action="">
        Username : <input type="text" name="username" placeholder="admin"><br><br>
        Password : <input type="password" name="password" placeholder="*****"><br><br>
        <input type="submit" name="submit" value="Login">
        </form>
    </div>
</div>
<?php
session_start();
require('process.php');
if(isset($_POST['username']) and isset($_POST['password'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM admin WHERE username='$username' and password='$password'";
$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
$count=mysqli_num_rows($result);
if($count==1)
{
$_SESSION['username']=$username;
echo"You have logged in successfully";
header("location: home.php");
}
else{
$fmsg="Invalid username or password";
echo"<br>Invalid username or password";
}
}
?></center>
</body>
</html>