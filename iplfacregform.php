

<html>
<head>
<style>
#main {
	text-align:center;
    font-size:150%;
    margin-top:10px;
    margin-left:400px;
    margin-right:400px;
    padding-top:50px;
    padding-bottom:50px;
    border-radius: 50px;
    background-color: rgba(0,0,0,0.6);
    color:white;
    box-shadow:  inset -6px -6px rgba(0,0,0,0.5);
}
	
body {
	background-image: url(ipl3.jpg);
    background-position: center;
	background-repeat: no-repeat;
    background-size:cover;
}
#field{
width:30%;
}
b{
    color:#ff3333;
}
input{
    text-size:20px;
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
<script type="text/javascript">
	
	function form_valid()
	{
		var sname=document.getElementById("username").value;
        var sfid=document.getElementById("userusn").value;
        var sbranch=document.getElementById("userbranch").value;
        var semail=document.getElementById("useremail").value;
        var sphone=document.getElementById("userphone").value;
        var spassword=document.getElementById("userpassword").value;
        var spassword2=document.getElementById("userpassword2").value;

        if(sname=="" || sfid=="" || sbranch=="" || semail=="" || sphone=="" || spassword=="" || spassword2=="")
        {
        	alert("please fill the details");
        	return false;

        }
        else
        {
        	return true;
        }
	}
</script>
</head>

<body >
<div id="no">
    <h1 style=" text-align: center;"><img src="BNMIT-Title.png"></h1>
    <div id="inno">
        <a href="iplhome.php"><button style="background-color: rgba(0,0,0,0.0); color:white; font-size: 70%; border-radius: 10px; margin-right: 10px;" onmouseover="blue(this)" onmouseout="non(this)" >HOME</button></a>
        <a href="iplfaclogform.php"><button style="background-color: rgba(0,0,0,0.0); color:white; font-size: 70%; border-radius: 10px; margin-right: 10px;" onmouseover="blue(this)" onmouseout="non(this)" >LOGIN</button></a>
    </div>

</div>


<div id="main">
<form method ="POST" action ="iplfacreg.php" onsubmit="return form_valid();">
<div id="field">
<b> * require field</b><br>
</div>
<b1 style="font-size: 20px;">FULL NAME:</b1> <br><input type ="text" name = "fullname" id="username" style=" border-radius:10px; color:white; background-color: rgba(0,0,0,0); width:50%; line-height:2; " required><b>*</b>
</br><br>
<b1 style="font-size: 20px;">FACULTY ID:</b1> <br><input type ="text" name = "fid" id="userusn" style=" border-radius:10px; color:white; background-color: rgba(0,0,0,0); width:50%; line-height:2; " required><b>*</b>
</br><br>
<b1 style="font-size: 20px;">BRANCH:</b1> <br><select  name = "branch" id="userbranch" style=" border-radius:10px; color:white; background-color: rgba(0,0,0,0); font-size: 20px;  width:50%; line-height:3;" required>
<option value="cs1" style="border-radius:10px; width:100%; line-height:2; ">CSE</option>
<option value="is1" style="border-radius:10px; width:100%; line-height:2; ">ISE</option>
<option value="ec1" style="border-radius:10px; width:100%; line-height:2; ">ECE</option>
<option value="ee1" style="border-radius:10px; width:100%; line-height:2; ">EEE</option>
<option value="me1" style="border-radius:10px; width:100%; line-height:2; ">ME</option>
</select><b>*</b>
<br><br>
<b1 style="font-size: 20px;">EMAIL:</b1> <br><input type ="email" name = "email" id="useremail" style="  border-radius:10px; color:white; background-color: rgba(0,0,0,0); width:50%; line-height:2;" required><b>*</b>
</br><br>
<b1 style="font-size: 20px;">PHONE NUMBER:</b1> <br><input type ="text" name = "phone" id="userphone" style=" border-radius:10px; color:white; background-color: rgba(0,0,0,0); width:50%; line-height:2;" required><b>*</b>
</br><br>
<b1 style="font-size: 20px;">PASSWORD:</b1> <br><input type ="password" name = "password" id="userpassword" style=" border-radius:10px; color:white; background-color: rgba(0,0,0,0); width:50%; line-height:2;" required><b>*</b>
</br><br>
<b1 style="font-size: 20px;">RE-ENTER PASSWORD:</b1> <br><input type ="password" name = "password2" id="userpassword2" style=" border-radius:10px; color:white; background-color: rgba(0,0,0,0); width:50%; line-height:2;" required ><b>*</b>
<br></br><br>
<input type ="submit" name = "reg_btn" value = "sign up" style="border-radius:20px; color:white; background-color:black; font-size:150%;"></br>
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