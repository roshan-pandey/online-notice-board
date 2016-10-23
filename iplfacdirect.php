<?php
$option = array_key_exists('option', $_POST) ? $_POST['option'] : null;
if(isset($option))
{
if($option=='login')
{
	header("location:iplfaclogform.php");
}
if($option=='signup')
{
	header("location:iplfacregform.php");
}
}
else
{
	echo "OOPs..!! You forget to select your option";
}
?>