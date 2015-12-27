<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Home Page</title>
		<script language="javascript">
		/*
		This function displays current date and time to the HTML document
		*/
		function date1(){
			document.getElementById("date1").innerHTML=Date();
		}
		/*
		This function redirects HTML page
		*/
		function userLogin_OnClick(){
			window.location.href="loginpage.php";
		}
		/*
		This function redirects HTML page
		*/
		function adminLogin_OnClick(){
			window.location.href="AdminLogin.php";
		}
		</script>
		<link rel="stylesheet" href="Bdetails.css"/>
	</head>
	<body onLoad="date1()" oncontextmenu="return false;">
		<div class="container1">
		<div class="header11">
			<img src="logo.jpg"  height="100" width="150" align="left" /></br> 
		</div>
		<div class="menu11"><marquee direction="right" >NEWS:skslspspskisjsj </marquee>
			<br/>
			<br/>
		</div>
		<div class="margin1">
		</div>
		<div class="display2">
			<div class="margin2">
				<button style= "width: 90%; height:50px; background-color: #9cb369; font-size : 20px; color: #FFFFFF" class="login" type="button" onclick="userLogin_OnClick()">User Login</button>
			</div>
			<div class="margin2">
				<button style= "width: 90%; height:50px; background-color: #9cb369; font-size : 20px; color: #FFFFFF" class="login" type="button" onclick="adminLogin_OnClick()">Admin Login</button>
			</div>
			<br>
			<div  id="date1">
			</div>
		</div>
		<div class="footer1">Copyright OnlineSBI</div>
		<div class="footer2">
			<a href=" ">Privacy Statements|</a>
			<a href=" ">Disclosure|</a>
			<a href=" ">Terms Of Service|</a>
		</div>
	</div>
 </body>
</html>

