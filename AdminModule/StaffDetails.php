<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>View and Update Staff Details</title>
		<script language="javascript">
		/*
		This function is used to disable the Submit button and display current date and time to the HTML document
		*/
		function disableElements()
		{
			document.getElementById('submit_button').style.display = 'none';
 			document.getElementById("date1").innerHTML=Date();
		}
		/*
		This function is used to disable and enable buttons in the HTML document
		*/
		function enableElements()
		{
			document.getElementById('submit_button').style.display = 'block';
			document.getElementById('delete_button').style.display = 'none';
			document.getElementById('ok_button').style.display = 'none';
		}
		/*
		This function clears the value from the HTML fields
		*/
		function clearFields()
		{
			document.getElementById("admin_name_id").value = " ";
			document.getElementById("admin_id_id").value = " ";
			document.getElementById("admin_pwd_id").value = " ";
			document.getElementById("e-mail_id").value = " ";
			document.getElementById("phone_no_id").value = " ";
		}
		</script>
		<link rel="stylesheet" href="add22.css"/>
	</head>
	<body onLoad="disableElements()" oncontextmenu="return false;">
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
		<?php
		session_start();// Starting Session
		
		/*--------------------------------*/
		/*-- Getting the URL variable ----*/
		/*--------------------------------*/
		$adminid = $_GET["number"];
		
		/*---------------------------*/
		/*-- PHP error reporting ----*/
		/*---------------------------*/
		$error=''; 

		/*----------------------------------------------*/
		/*-- Setting Database Username and Password ----*/
		/*----------------------------------------------*/
		$username = 'bdesu';
		$password = 'password123!';

		/*---------------------------*/
		/*-- Database Connection ----*/
		/*---------------------------*/
		$database = @mysql_connect('mysql.eecs.ku.edu',$username, $password);


		if(!$database){
			die('Could not connect:' . mysql_error());
		}

		if(!mysql_select_db($username, $database)){
			die('Could not select database' .mysql_error());
		}
	
		/*-- Database Query --*/
		$sqlQuery = "SELECT * FROM AdminView where adminid ='$adminid'";
		$result= mysql_query($sqlQuery, $database);
		$row = mysql_fetch_assoc($result);


		/*-- Initializing PHP variables from database column values --*/
		$admin_ID=$row['adminid'];
		$admin_name=$row['adminname'];
		$password=$row['password'];
		$e_mail=$row['email'];
		$phone_no=$row['phone'];
		?>
		<div class="display1">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label class="u4" align = "center"><font align="center">User Details</font></label>
			<br><br>
			<form name="Staffs_details" method="post" action="EditStaffsDB.php" >
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
								<input type="text" name="admin_name"  size=30 maxlength=30 id="admin_name_id" value="<?php echo $admin_name;?>" onChange="enableElements()">
							</td>
						</tr>
						<tr>
							<td>
								<label  class="u3"> Admin ID</label>
							</td>
							<td>
								<input type="text" name="admin_id"  size=30 maxlength=20 id="admin_id_id" value="<?php echo $admin_ID;?>" onChange="enableElements()" readonly>
							</td>
						</tr>
						<tr>
							<td>
								<label  class="u3"> Password</label>
							</td>
							<td>
								<input type="text" name="admin_pwd"  size=30 maxlength=20 id="admin_pwd_id" value="<?php echo $password;?>" onChange="enableElements()">
							</td>
						</tr>
						<tr>
							<td>
								<label  class="u3">E-mail</label>
							</td>
							<td>
								<input type="text" name="e-mail"   size=30 maxlength=30 id="e-mail_id" value="<?php echo $e_mail;?>" onChange="enableElements()">
							</td>
						</tr>
						<tr>
							<td>
								<label  class="u3">Phone Number</label>
							</td>
							<td>
								<input type="text" name="phone_no" size=30 id="phone_no_id" value="<?php echo $phone_no;?>" onChange="enableElements()">
							</td>
						</tr>
					</table>
					<br><br>
					<table>
						<tr>
							<td>
								<input type="submit" value="OK"   name="ok" id="ok_button" >
							</td>
							<td>
								<input type="submit" value="Delete"   name="delete" id="delete_button">
							</td>
							<td>
								<input type="submit" value="Back"   name="back" id="back_button">
							</td>
							<td>
								<input type="submit" value="Submit"   name="submit" id="submit_button" >
							</td>
						</tr>
					</table>
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

