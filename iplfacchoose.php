<html>
<head>
<style>
#body {
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
body{
	background-image:url(ipl1.jpg);
	background-repeat:no-repeat;
	background-position:center;
	background-size:cover;

}
h3:hover{
	color:red;
}
</style>

</head>

<body >
<div id="body">
<div class="well">

<h3><b style="color:lightblue;" onmouseover="red(this)" onmouseout="lightblue(this)">Already have an account? Go to LOG IN</b></h3>
<h3><b style="color:lightblue;" onmouseover="red(this)" onmouseout="lightblue(this)">Want an account? Go to SIGN UP</b></h3>

</div>
<form method="POST" action="iplfacdirect.php" >
<p>
<input id="log" type="radio" name="option" value="login" checked >LOG IN</br>
</p>
<p>
<input id="sign" type="radio" name="option" value="signup">SIGN UP</br>
</p>
<p>
<input type="submit" name="submit" value="SUBMIT" style="background-color:black; border-radius:20px; color:white; font-size:150%;">
</p>
</form>
</div>
<script type="text/javascript">
	function red(x)
	{
        x.style.color="cyan";
	}
	function lightblue(x)
	{
        x.style.color="lightblue";
	}
</script>
</body>
</html>