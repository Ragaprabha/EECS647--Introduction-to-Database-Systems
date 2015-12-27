<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Adding Staffs</title>
	<script language="javascript">
		/*
		This function displays current date and time to the HTML document
		*/
		function date1(){
			document.getElementById("date1").innerHTML=Date();
		}
		/*
		This function clears the value from the HTML fields
		*/
			
		function clearData(){
			document.getElementById("admin_name_id").value = " ";
			document.getElementById("admin_id_id").value = " ";
			document.getElementById("admin_pwd_id").value = " ";
			document.getElementById("e-mail_id").value = " ";
			document.getElementById("phone_no_id").value = " ";
		}
	</script>
	<link rel="stylesheet" href="add22.css"/>
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
	<div class="display1">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<label class="u4" align = "center"><font align="center">Staff Details</font></label>
		<br><br>
		<form name="Staffs_add" method="post" action="AddStaffsDB.php" >
			<fieldset>
			<table>
				<tr>
        			<td>
						<br>
					</td>
				</tr>
				<tr>
					<td>
						<label  class="u3">Name</label>
					</td>
					<td>
						<input type="text" name="admin_name"  size=30 maxlength=30 id="admin_name_id">
					</td>
				</tr>
				<tr>
					<td>
						<label  class="u3"> Admin ID</label>
					</td>
					<td>
						<input type="text" name="admin_id"  size=30 maxlength=20 id="admin_id_id">
					</td>
				</tr>
				<tr>
					<td>
						<label  class="u3"> Password</label>
					</td>
					<td>
						<input type="text" name="admin_pwd"  size=30 maxlength=20 id="admin_pwd_id">
					</td>
				</tr>
				<tr>
					<td>
						<label  class="u3">E-mail</label>
					</td>
					<td>
						<input type="text" name="e-mail"   size=30 maxlength=30 id="e-mail_id">
					</td>
				</tr>
				<tr>
					<td>
						<label  class="u3">Phone Number</label>
					</td>
					<td>
						<input type="text" name="phone_no" size=30 id="phone_no_id">
					</td>
				</tr>
			</table>
			<br><br>
			<input type="submit" value="Back"   name="back" >
			<input type="submit" value="Register"   name="submit" >
			<input type="button" value="Clear"   name="clear" onClick = "clearData()">
			</fieldset>
		</form>		
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

