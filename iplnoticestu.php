<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>NOTICE BOARD</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>notice board</title>
	<style type="text/css">
		#main{
			background:linear-gradient(pink,white);
		}
	</style>
</head>
<body>
<div id="main">
<div id="header">
<h1 style=" text-align: center;"><img src="BNMIT-Title.png" style="height: 120px;"></h1>
</div>

<?php
$usn = $_SESSION['usn'];
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

	$sql = "select notice,date1 from notification order by id desc";
	$result = mysqli_query($db,$sql);
	 while($r=$result->fetch_assoc())
	 {
	 	echo "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>"
	 	."<li>".nl2br($r['notice']).
	 	"<br>".$r['date1']."<br>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
	 }
		/*$row=$result->fetch_assoc();
		$newnotice=$row['notice'];
		echo"------------------------------------------------------------------------------------------------------------------------<br>";
		 echo $newnotice."<br>";
		 echo"-----------------------------------------------------------------------------------------------------------------------<br>";*/


?>
<a href="iplstuhome.php" style="font-size: 20px;">go back to previous page</a>
</body>
</html>