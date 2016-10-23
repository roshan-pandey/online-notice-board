<?php
session_start();
//$cookie_name = "loggedin";
$fid = array_key_exists('fid', $_POST) ? $_POST['fid'] : null;
if(strpos($fid, 'cs')!==false)
{
    $bran='cs1';
}
if(strpos($fid, 'is')!==false)
{
    $bran='is1';
}
if(strpos($fid, 'ec')!==false)
{
    $bran='ec1';
}
if(strpos($fid, 'ee')!==false)
{
    $bran='ee1';
}
if(strpos($fid, 'me')!==false)
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

    $fid = array_key_exists('fid', $_POST) ? $_POST['fid'] : null;
	//$branch = ($_POST['branch']);
	$password = ($_POST['pass']);
	
	$password = md5($password);
	$sql = "select * from faculty where fid = '$fid' and password = '$password' ";
	$result = mysqli_query($db,$sql);
	
	if(mysqli_num_rows($result)==1)
	{
		$row=$result->fetch_assoc();
		 $_SESSION["message"]="you are now logged in ";
		 $_SESSION['fname'] = $row["name"];
		 $_SESSION['fid'] = $row["fid"];
		 $_SESSION['fbranch'] = $row["branch"];
		 $_SESSION['fphone'] = $row["phone"];
		 $_SESSION['femail'] = $row["email"];

		header("location: iplfachome.php");
		
	}
	else
	{
		echo "username password do not match";
		
	}
}
?>