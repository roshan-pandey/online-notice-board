<?php
session_start();

 ?>
<html>
<head>
<title>Faculty account</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	body{
		background-color: skyblue;
		background: linear-gradient(skyblue,white);
	}
	#main{
		
		width:100%;
		line-height: 4;
	}
	#menu{
		float: right;
		font-size: 20px;
	}
	#index{
		
		float:left;
		margin-top: 150px;
		background-color:rgba(0,0,0,0.2);
		color:white;
		height: 800px;
	}
	table,tr,td,th{
		
		border :1px solid black;
		
		font-size: 20px;
	}
	tr,td,th{
		padding:8px;

	}
	table{
		width: 100%;
	}
	#nest{
		text-align: center;
		margin-top: 10px;
		background-color: ;
	}
	h1{
		border-image-repeat: no repeat;
	}
</style>
</head>
<body>

<div id="main">
    <h1 style=" text-align: center;"><img src="BNMIT-Title.png" style="height: 120px;"></h1>
    <div id="menu">
    <a href="iplnotice.php"><button style="border-radius: 20px; margin-right: 50px; line-height: 3;">publish notice</button></a>
    <a href="iplfachome.php" style="margin-right: 10px;">Home</a>
	<a href="iplfacout.php" style="margin-right: 10px;">Logout</a>
	</div>
</div>
<div id="index">
<div id="nest">
    <img src="faculty.png" style="border-radius: 50%";>
	<p style="font-size: 30px;"><b><?php if(isset($_SESSION['fname'])) echo strtoupper($_SESSION['fname']); else header("location:iplfaclogform.php")?></b></p>
	</div>
	<table  >
		<tr>
			<td>
				FACULTY ID:
			</td>
			<td>
				<?php echo strtoupper($_SESSION['fid']) ; ?>
			</td>
		</tr>
		<tr>
			<td>
				BRANCH:
			</td>
			<td>
				<?php echo strtoupper($_SESSION['fbranch']);  ?>
			</td>
		</tr>
		<tr>
			<td>
				PHONE NUMBER:
			</td>
			<td>
				<?php echo $_SESSION['fphone']; ?>
			</td>
		</tr>
		<tr>
			<td>
				EMAIL:
			</td>
			<td>
				<?php echo $_SESSION['femail'];  ?>
			</td>
		</tr>
	</table>
	<div>
		<a href=""></a>

	</div>
</body>
</html>