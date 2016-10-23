<?php
session_start();
//$cookie_name = "loggedin";
$usn = array_key_exists('usn', $_POST) ? $_POST['usn'] : null;
if(strpos($usn, 'cs')!==false)
{
    $bran='cs1';
}
if(strpos($usn, 'is')!==false)
{
    $bran='is1';
}
if(strpos($usn, 'ec')!==false)
{
    $bran='ec1';
}
if(strpos($usn, 'ee')!==false)
{
    $bran='ee1';
}
if(strpos($usn, 'me')!==false)
{
    $bran='me1';
}
$db = mysqli_connect("localhost","root","","$bran");
if(!$db)
{
	die("database connection error: ".mysqli_connect_error());
}
//echo"connected<br>";
if(isset($_POST['login']))
{

    $usn = array_key_exists('usn', $_POST) ? $_POST['usn'] : null;
	//$branch = ($_POST['branch']);
	$password = ($_POST['pass']);
	
	$password = md5($password);
	$sql = "select * from student where usn = '$usn' and password = '$password' ";
	$result = mysqli_query($db,$sql);
	
	if(mysqli_num_rows($result)==1)
	{
		$row=$result->fetch_assoc();
		 $_SESSION["message"]="you are now logged in ";
		 $_SESSION['name'] = $row["name"];
		 $_SESSION['usn'] = $row["usn"];
		 $_SESSION['branch'] = $row["branch"];
		 $_SESSION['phone'] = $row["phone"];
		 $_SESSION['email'] = $row["email"];

		header("location: iplstuhome.php");
		
	}
	else
	{
		echo "username password do not match";
		
	}
}
?>