<?php
session_start();
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
	die("connnection failed".mysql_error);
}
//echo "connected successfull<br>";

if(isset($_POST['send']))
{
$name = array_key_exists('name', $_POST) ? $_POST['name'] : null;
$fid = array_key_exists('fid', $_POST) ? $_POST['fid'] : null;
$_SESSION['facname']=$name;
$notification=$_POST['notification'];
$date1=$_POST['date1'];
	  $sql = "INSERT INTO notification (id,notice,date1) VALUES(null,'$notification','$date1')";
      mysqli_query($db,$sql);
      echo "notice published ";
      echo  $name."<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<a href="iplnotice.php">go to previous page</a>
</body>
</html>