<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Success Page</title>
		<script language="javascript">
		/*
		This function displays current date and time to the HTML document
		*/
		function date1(){
			document.getElementById("date1").innerHTML=Date();
		}
		</script>
		<link rel="stylesheet" href="Bdetails.css"/>
	</head>
	<body onLoad="date1()" oncontextmenu="return false;">
		<div class="container1">
		<div class="header11">
			<img src="logo.jpg"  height="100" width="150" align="left" /></br> WELCOME:
			<B><?php if(isset($_SESSION['login_user'])) echo $_SESSION['login_user']; ?></B>
			<a href="AdminLogout.php"><img src="logout.jpg" height="80" width="80" align="right" /></a>
		</div>
		<div class="menu11"><marquee direction="right" >NEWS:skslspspskisjsj </marquee>
			<br/>
			<br/>
			<ul>
				<li><a href="home.php">MY ACCOUNTS</a></li>
				<li><a href="pstatus.php">PROFILE</a></li>
				<li><a href="moneytransfer.php">MONEY TRANSFER</a></li>
				<li><a href="#">BILL PAYMENTS</a></li>
				<li><a href="#">INTEREST RATES</a></li>
			</ul>
	   </div>
	   <div class="margin1">
			<br><br><br>
			<a href="AdminHome.php">Admin Home</a>
			<br><br>
			<a href="InquireUser.php">User Management</a>
			<br><br>
			<a href="InquireStaff.php">Staff Management</a>
			<br><br>
			<a href="AdminChangePwd.php">Change Password</a>
		</div>
		<div class="display2">
		<div class="display5">
			<h4 style="color: green">
				User has been deleted successfully!!!
			</h4>
		</div>
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

