<?php 
session_start();
?>
<!DOCTYPE html>
<html >
<head>
	<title>notice board</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    	#notice{
    		text-align: center;
    		
    	}
    	textarea{
    		margin-top: 30px;
    		border-radius: 20px;
    		padding: 10px;
    	}
    	#details{
    		margin-left: 550px;
    	}
    	#header{
    		background-color: rgba(0,0,0,0.5);
    		width:100%;
		    height: 130px;
    	}
    	#menu{
		float: right;
		font-size: 20px;
		margin-right: 5px;
	}
    </style>
</head>
<body style="background:linear-gradient(lightgreen,white); background-repeat: no-repeat;">
<div id="header">
	<h1 style=" text-align: center;"><img src="BNMIT-Title.png"></h1>
	<div id="menu">
    <a href="iplfachome.php"><button>Home</button></a>
	</div>
</div>
<div id="notice">
	<form method="POST" action="iplnotice1.php">
		<textarea type="text" name="notification" rows="22" cols="110" style="font-size: 20px;"></textarea><br><br>
		<div id="details">
		Name:<input type="text" name="name">
		FID:<input type="text" name="fid"><br><br>
		Date:<input type="text" name="date1" value="dd-mm-yyyy">
		</div>
		<input type="submit" name="send" value="Publish Notice" style="background-color:hsl(120,100%,75%); line-height: 3; border-radius: 35px; padding: 5px; font-size: 20px; text-align: center;" />
	</form>
</div>
</body>
</html>