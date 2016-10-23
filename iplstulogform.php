<?php
session_start();
//echo $_SESSION['message'];
?>

<html>
<head>
<style>
body {
	background-image:url(ipl2.jpg);
	background-size:cover;
}
#logform {
	text-align:center;
	font-size:150%;
	margin-top:100px;
	margin-left:400px;
	margin-right:400px;
	padding-top:50px;
	padding-bottom:50px;
	border-radius: 50px;
	background-color: rgba(0,0,0,0.6);
	color:white;
	box-shadow:  inset -6px -6px rgba(0,0,0,0.5);
}
#yes {
	
	background-repeat: no-repeat;
	background-position: right;
	background-size: 10%;
}
#no{
	background-color: rgba(0,0,0,0.6);
	height:155px;
}
#inno{
	float:right;
	color:white;
	font-size: 250%;
	background-color: rgba(0,0,0,0);
	color:white;
	margin-top: 0px;
}
</style>
</head>
<body>
<div id="no">
	<h1 style=" text-align: center;"><img src="BNMIT-Title.png"></h1>
	<div id="inno">
		<a href="iplhome.php"><button style="background-color: rgba(0,0,0,0.0); color:white; font-size: 70%; border-radius: 10px; margin-right: 10px;" onmouseover="blue(this)" onmouseout="non(this)" >HOME</button></a>
		<a href="iplstudregform.php"><button style="background-color: rgba(0,0,0,0.0); color:white; font-size: 70%; border-radius: 10px; margin-right: 10px;" onmouseover="blue(this)" onmouseout="non(this)" >SIGN UP</button></a>
	</div>

</div>
<div id="logform">
  
  <form method="POST" action="iplstulog.php">
    
		    <b style="background-color:;">USN</b><br>
			<input type="text" id="yes" required name="usn" style="border-radius:10px; color:white; background-color: rgba(0,0,0,0); width:50%; line-height:3;">
		     <br><br>
		    <b style="background-color:;"><td>PASSWORD</b> <br>
			<input type="password" id="yes" required name="pass"  style="border-radius:10px; color:white; background-color: rgba(0,0,0,0); width:50%; line-height:3;" > 
		    <br>
		   <br>
		   <input type="checkbox" name="rememberme">Remember me</br></br>
		 
			<input type="submit" name="login" value="Log In" style="border-radius:20px; color:white; background-color:black; width:30%; font-size:150%; " > 
		
		</form>
</div>
<script type="text/javascript">
	function blue(x)
	{
		x.style.color="cyan";
	}function non(x)
	{
		x.style.color="white";
	}
</script>
</body>
</html>