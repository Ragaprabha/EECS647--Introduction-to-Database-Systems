<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin Home</title>
		<script language="javascript">
		/*
		This function displays current date and time to the HTML document
		*/
		function date1(){
			document.getElementById("date1").innerHTML=Date();
		}
		/*
		This function prevents back operation of browser after Admin logins 
		*/
		function preventBack(){window.history.forward();}

    	setTimeout("preventBack()", 0);

    	window.onunload=function(){null};	
	
		function admin_home(){
			window.location.href="AdminHome.php";
		}
		function user_mgmt(){
			window.location.href="InquireUser.php";
		}
		function staff_mgmt(){
			window.location.href="InquireStaff.php";
		}
		function admin_chngpwd(){
			window.location.href="AdminChangePwd.php";
		}
		function logout()
		{
			window.location.href="HomePage.php";
		}
		</script>
		<link rel="stylesheet" href="Bdetails.css"/>
	</head>
	<body onLoad="date1()" oncontextmenu="return false;">
		<div class="container1">
		<div class="header11">
		<img src="logo.jpg"  height="100" width="150" align="left" onClick = "logout()"/></br> WELCOME:
		<B><?php if(isset($_SESSION['login_user'])) echo $_SESSION['login_user']; ?></B>
		<a href="AdminLogout.php"><img src="logout.jpg" height="80" width="80" align="right" /></a>
		</div>
		<div class="menu11"><marquee direction="right" >NEWS:skslspspskisjsj </marquee>
			<br/>
			<br/>
		</div>
		<div class="margin1"></div>
		<div class="display2">
		<div class="display5">
			<button style="background-color:#FF4500" type="button" onclick="admin_home()">Admin Home</button>
			<h4 style="color: green">
				This option reloads the page
			</h4>
		</div>
		<div class="display5">
			<button style="background-color:#FF4500" type="button" onclick="user_mgmt()">User Management</button>
			<h4 style="color: green">
				This option enables you to manage Customer Details
			</h4>
		</div>
		<div class="display5">
			<button style="background-color:#FF4500" type="button" onclick="staff_mgmt()">Staff Management</button>
				<h4 style="color: green">
					This option enables you to manage Staff Details
				</h4>
		</div>
		<div class="display5">
			<button style="background-color:#FF4500" type="button" onclick="admin_chngpwd()">Change Password</button>
				<h4 style="color: green">
					This option enables you to change your password
				</h4>
		</div>
	</div>
	<div class="footer11">Copyright OnlineSBI</div>
	<div class="footer21">
		<a href=" ">Privacy Statements|</a>
		<a href=" ">Disclosure|</a>
		<a href=" ">Terms Of Service|</a>
	</div>
	</div>
</body>
</html>

