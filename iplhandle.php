<?php
$designation=$_POST['designation'];
if($designation=='student')
{
	header("location:iplchoose.php");
}
else if($designation=='faculty')
{
	header("location:iplfacchoose.php");
}
else
{
	echo "OOPs..!! You forget to select your option";
}
?>