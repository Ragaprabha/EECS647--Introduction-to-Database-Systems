<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin Change password</title>
		<script language="javascript">
			/*
			This function displays current date and time to the HTML document
			*/
			function date1(){
				document.getElementById("date1").innerHTML=Date();
			}
			/*
			This function checks if the new password and confirm password are equal
			*/
			function check1(){
				var password=document.f1.new_pwd.value;
				var confirmp = document.f1.conf_pwd.value;
				var confirm=eval(document.f1.conf_pwd.value.length);
				var len=eval(document.f1.new_pwd.value.length);
				alert("value of password is : "+password);
				if(password!=confirmp){
					alert("Please enter the correct password in both fields");
			 		return true;
				}
				else 
					alert("End of check1");
				return true;
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
			<label class="u2">Change Password</label>
				<form name="admin_chgpwd" method="post" action="AdminChangePwdDB.php" onSubmit="return check1()">
					<fieldset>
						<table>
							<tr>
        						<td>
									<br><br>
								</td>
							</tr>
							<tr>
        						<td>
									<label  class="u1">Old Password</label><br><br>
								</td>
								<td>
									<input type="password" name="old_pwd"   size=30 maxlength=30 >
								</td>
							</tr>
							<tr>
        						<td>
									<label  class="u1">New Password</label><br><br>
								</td>
								<td>
									<input type="password" name="new_pwd"   size=30 maxlength=30 >
								</td>
							</tr>
							<tr>
        						<td>
									<label  class="u1">Confirm New Password</label><br><br>
								</td>
								<td>
									<input type="password" name="conf_pwd" size=30 maxlength=30 >
								</td>
							</tr>
						</table>	
						<input type="submit" value="Submit"   name="submit">
						<input type="reset" value="reset">
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

