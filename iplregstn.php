<?php
session_start();
$dep = array_key_exists('branch', $_POST) ? $_POST['branch'] : null;
$db = mysqli_connect("localhost","root","","$dep");
if(!$db)
{
	die("connnection failed".mysql_error);
}
echo "connected successfull<br>";

if(isset($_POST['reg_btn']))
{
$name = array_key_exists('fullname', $_POST) ? $_POST['fullname'] : null;
$usn = array_key_exists('usn', $_POST) ? $_POST['usn'] : null;
$branch = array_key_exists('branch', $_POST) ? $_POST['branch'] : null;
$email = array_key_exists('email', $_POST) ? $_POST['email'] : null;
$password = array_key_exists('password', $_POST) ? $_POST['password'] : null;
$phone = array_key_exists('phone', $_POST) ? $_POST['phone'] : null;
$password2 = array_key_exists('password2', $_POST) ? $_POST['password2'] : null;

  if($password == $password2)
  {
	  $password = md5($password);
	  $sql = "INSERT INTO student(name,usn,branch,email,phone,password) VALUES('$name','$usn','$branch','$email',$phone,'$password')";
      mysqli_query($db,$sql);
      echo "you are successfully registered: ";
      echo  $name;
      	  
  }	  
  else
  {
	 echo "password not matched\n";
  }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Press Below Button to Login</title>
</head>
<body>
<form method="POST" action="iplstulogform.php">
  <input type="submit" name="Login" value="Login">

</form>

</body>
</html>