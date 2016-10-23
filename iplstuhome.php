<?php
session_start();
$_SESSION['s1']="Software Engineering";
$_SESSION['a1']="95%";
$_SESSION['s2']="System Software";
$_SESSION['a2']="96%";
$_SESSION['s3']="DBMS";
$_SESSION['a3']="88%";
$_SESSION['s4']="CN-1";
$_SESSION['a4']="97%";
$_SESSION['s5']="Operating System";
$_SESSION['a5']="87%";
$_SESSION['s6']="FLAT";
$_SESSION['a6']="93%";
 ?>
<html>
<head>
<title>Student account</title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		background-color: skyblue;
		background: linear-gradient(skyblue,white);
		background-repeat: no-repeat;
	}
	#facdetails{
		margin-left: 600px;
		margin-top: 80px;
		margin-right: 400px;
		
	}
	#main{
		
		width:100%;
		line-height: 4;
	}
	#menu{
		float: right;
		font-size: 20px;
		margin-right: 5px;
	}
	#index{
		
		float:left;
		margin-top: 70px;
		background-color:rgba(0,0,0,0.2);
		color:white;
		height: 756px;
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
</style>
</head>
<body>

<div id="main">
    <h1 style=" text-align: center;"><img src="BNMIT-Title.png" style="height: 120px;"></h1>
    <div id="menu">
    <a href="iplnoticestu.php"><button style="border-radius: 20px; margin-right: 50px; line-height: 3;">view notice board</button></a>
    <a href="iplstuhome.php" style="margin-right: 10px;">Home</a>
	<a href="iplstudirout.php" style="margin-right: 10px;">Logout</a>
	</div>
</div>
<div id="index">
<div id="nest">
     <img src="student.png" style="border-radius: 50%" ;>
	<p style="font-size: 30px;"><b><?php if(isset($_SESSION['name'])) echo strtoupper($_SESSION['name']); else header("location:iplstulogform.php")?></b></p>
</div>
	<table  >
		<tr>
			<td>
				USN:
			</td>
			<td>
				<?php echo strtoupper($_SESSION['usn']) ; ?>
			</td>
		</tr>
		<tr>
			<td>
				BRANCH:
			</td>
			<td>
				<?php echo strtoupper($_SESSION['branch']);  ?>
			</td>
		</tr>
		<tr>
			<td>
				PHONE NUMBER:
			</td>
			<td>
				<?php echo $_SESSION['phone']; ?>
			</td>
		</tr>
		<tr>
			<td>
				EMAIL:
			</td>
			<td>
				<?php echo $_SESSION['email'];  ?>
			</td>
		</tr>
	</table>
	<br><br>
	<div>
		
		<table>
			<tr>
				<th>
					Subject
				</th>
				<th>Attendence</th>
			</tr>
			<tr>
				<td><?php echo $_SESSION['s1']; ?></td>
				<td><?php echo $_SESSION['a1'] ?></td>
			</tr>
			<tr>
				<td><?php echo $_SESSION['s2']; ?></td>
				<td><?php echo $_SESSION['a2'] ?></td>
			</tr>
			<tr>
				<td><?php echo $_SESSION['s3']; ?></td>
				<td><?php echo $_SESSION['a3'] ?></td>
			</tr>
			<tr>
				<td><?php echo $_SESSION['s4']; ?></td>
				<td><?php echo $_SESSION['a4'] ?></td>
			</tr>
			<tr>
				<td><?php echo $_SESSION['s5']; ?></td>
				<td><?php echo $_SESSION['a5'] ?></td>
			</tr>
			<tr>
				<td><?php echo $_SESSION['s6']; ?></td>
				<td><?php echo $_SESSION['a6'] ?></td>
			</tr>
		</table>
	</div>
</div>
<div id="facdetails">
<h2>Know your faculties...</h2>
<br>
<p>
<img src="faculty.png" style="border-radius: 50%">
<h3>JAMES</h3>
Professor,<br>
Department of <?php echo strtoupper($_SESSION['branch']); ?>.
</p>
<br><br>
<p>
<img src="faculty.png" style="border-radius: 50%">
<h3>HERRY</h3>
Assistant Professor,<br>
Department of <?php echo strtoupper($_SESSION['branch']); ?>.
</p>
<br><br>

<p>
	<img src="faculty.png" style="border-radius: 50%">
	<h3>JACK</h3>
	Assistant Professor,<br>
    Department of <?php echo strtoupper($_SESSION['branch']); ?>.
</p>
<br><br>
<p>
	<img src="faculty.png" style="border-radius: 50%">
	<h3>AMANDA</h3>
	Assistant Professor,<br>
    Department of <?php echo strtoupper($_SESSION['branch']); ?>.
</p>
<br><br>

</div>


</body>
</html>