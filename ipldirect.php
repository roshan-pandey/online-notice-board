<?php
$option = array_key_exists('option', $_POST) ? $_POST['option'] : null;
if(isset($option))
{
if($option=='login')
{
	header("location:iplstulogform.php");
}
if($option=='signup')
{
	header("location:iplstudregform.php");
}
}
else
{
	echo "OOPs..!! You forget to select your option";
}
?>