<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Add New Users</title>
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
				document.getElementById("acc_No_id").value = " ";
				document.getElementById("acc_type_id").value = "SELECT";
				document.getElementById("balance_id").value = " ";
				document.getElementById("branch_id").value = "SELECT";
				document.getElementById("nick_name_id").value = " ";
				document.getElementById("open_date_id").value = " ";
				document.getElementById("card_No_id").value = " ";
				document.getElementById("user_Name_id").value = " ";
				document.getElementById("birth_date_id").value = " ";
				document.getElementById("gender1_id").checked = false;
				document.getElementById("gender2_id").checked = false; 
				document.getElementById("address_id").value = " ";
				document.getElementById("phone_id").value = " ";
				document.getElementById("ssn_id").value = " ";
				document.getElementById("email_id").value = " ";
				document.getElementById("user_id_id").value = " ";
				document.getElementById("user_password_id").value = " ";
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
			<label class="u4" align = "center"><font align="center">User Details</font></label>
			<br><br>
			<form name="Users_add" method="post" action="AddUsersDB.php" >
				<fieldset>
				<table>
					<tr>
        				<td>
							<div id ="tab"> Account Information</div>
						</td>
					</tr>
					<tr>
        				<td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Account No</label>
						</td>
						<td>
							<input type="text" name="acc_No" size=30 maxlength=10 id="acc_No_id">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3"> Account type</label>
						</td>
						<td>
							<select name="acc_type" id="acc_type_id">
								<option value="SELECT">SELECT</option>
								<option value="checking">Checking</option>
								<option value="Savings">Savings</option>
								<option value="Salary">Salary</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Balance</label>
						</td>
						<td>
							<input type="text" name="balance" size=30 maxlength=30 id="balance_id">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Branch</label>
						</td>
						<td>
							<select name="branch" id="branch_id">
								<option value="SELECT">SELECT</option>
								<option value="Overland Park">Overland Park</option>
								<option value="Lawrence">Lawrence</option>
								<option value="Lenexa">Lenexa</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Nick Name</label>
						</td>
						<td>
							<input type="text" name="nick_name" size=30 maxlength=10 id="nick_name_id">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Account Opening Date</label>
						</td>
						<td>
							<input type="date" name ="open_date" size=30 id="open_date_id">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">DebitCard Number</label>
						</td>
						<td>
							<input type="text" name="card_No" size=30 maxlength=10 id="card_No_id">
						</td>
					</tr>
					<tr>
        				<td>
							<br>
						</td>
					</tr>
					<tr>
       					<td>
							<div id ="tab"> Personal Information</div>
						</td>
					</tr>
					<tr>
       			   	    <td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">User Name</label>
						</td>
						<td>
							<input type="text" name="user_name" size=30 maxlength=30 id="user_Name_id">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Date of Birth</label>
						</td>
						<td>
							<input type="date" name="birth_date" size=30 id="birth_date_id">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Gender</label>
						</td>
						<td>
							<input type="radio" name="gender" value="male" id="gender1_id">Male<br>
							<input type="radio" name="gender" value="female" id="gender2_id">Female
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Address</label>
						</td>
						<td>
							<textarea name="address" rows="4" cols="30" id="address_id"></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Phone Number</label>
						</td>
						<td>
							<input type="text" name="phone" size=30 maxlength=15 id="phone_id">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">SSN</label>
						</td>
						<td>
							<input type="text" name="ssn" size=30 maxlength=15 id="ssn_id">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">E-mail</label>
						</td>
						<td>
							<input type="text" name="email" size=30 maxlength=30 id="email_id">
						</td>
					</tr>
					<tr>
        				<td>
							<br>
						</td>
					</tr>
					<tr>
        				<td>
							<div id ="tab"> Login Information</div>
						</td>
					</tr>
					<tr>
        				<td>
							<br>
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">User ID</label>
						</td>
						<td>
							<input type="text" name= "user_id" size=30 maxlength=30 id="user_id_id">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Password</label>
						</td>
						<td>
							<input type="text" name="user_password" size=30 maxlength=10 id="user_password_id">
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

