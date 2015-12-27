<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>View and Update User Details</title>
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
			document.getElementById("acc_No_id").value = " ";
			document.getElementById('acc_type_id').value = " ";
			document.getElementById('balance_id').value = " ";
			document.getElementById("branch_id").value = " ";
			document.getElementById('nick_name_id').value = " ";
			document.getElementById("open_date_id").value = " ";
			document.getElementById("card_No_id").value = " ";
			document.getElementById("user_Name_id").value = " ";
			document.getElementById("birth_date_id").value = " ";
			document.getElementById("gender1_id").value = " ";
			document.getElementById("gender2_id").value = " "; 
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
		$acc_No = $_GET["number"];
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
		$sqlQuery = "SELECT * FROM UserAccountView where Account_no=$acc_No";
		$result= mysql_query($sqlQuery, $database);
		$row = mysql_fetch_assoc($result);

		/*-- Initializing PHP variables from database column values --*/

		$account_No=$row['Account_no'];
		$acc_type=$row['Account_type'];
		$balance=$row['balance'];
		$branch=$row['branch'];
		$nick_name=$row['nickname'];
		$open_date=$row['open_date'];
		$card_No=$row['debitCard_no'];
		$user_Name=$row['username'];
		$birth_date=$row['dob'];
		$address=$row['address'];
		$phone=$row['phone'];
		$ssn=$row['SSN'];
		$gender=$row['gender'];
		$email=$row['email'];
		$user_id=$row['user_id'];
		$pwd=$row['permpassword'];
		
		?>

		<div class="display1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label class="u4" align = "center"><font align="center">User Details</font></label>
			<br><br>
			<form name="Users_details" method="post" action="EditUsersDB.php" >
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
								<input type="text" name="acc_No"  size=30 maxlength=10 value="<?php echo $account_No;?>" id="acc_No_id" readonly>
							</td>
						</tr>
						<tr>
							<td>
								<label  class="u3"> Account type</label>
							</td>
							<td>
								<select name="acc_type" id="acc_type_id" onChange="enableElements()">
									<option value="SELECT">SELECT</option>
									<option value="checking"<?php if ($acc_type == 'checking') echo ' selected="selected"'; ?>>Checking</option>
									<option value="Savings"<?php if ($acc_type == 'Savings') echo ' selected="selected"'; ?>>Savings</option>
									<option value="Salary"<?php if ($acc_type == 'Salary') echo ' selected="selected"'; ?>>Salary</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label  class="u3">Balance</label>
							</td>
							<td>
								<input type="text" name="balance"   size=30 maxlength=30 value="<?php echo $balance;?>" id="balance_id" onChange="enableElements()">
							</td>
						</tr>
						<tr>
							<td>
								<label  class="u3">Branch</label>
							</td>
							<td>
								<select name="branch" id="branch_id" onChange="enableElements()">
									<option value="SELECT">SELECT</option>
									<option value="Overland Park"<?php if ($branch == "Overland Park") echo ' selected="selected"'; ?>>Overland Park</option>
									<option value="Lawrence"<?php if ($branch == "Lawrence") echo ' selected="selected"'; ?>>Lawrence</option>
									<option value="Lenexa"<?php if ($branch == "Lenexa") echo ' selected="selected"'; ?>>Lenexa</option>
								</select>
							</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Nick Name</label>
						</td>
						<td>
							<input type="text" name="nick_name"   size=30 maxlength=10 value="<?php echo $nick_name;?>" id="nick_name_id" onChange="enableElements()">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Open Date</label>
						</td>
						<td>
							<input type="date" name="open_date" size=30 value="<?php echo $open_date;?>" id="open_date_id" onChange="enableElements()">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">DebitCard Number</label>
						</td>
						<td>
							<input type="text" name="card_No"  size=30 maxlength=10 value="<?php echo $card_No;?>" id="card_No_id" onChange="enableElements()">
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
							<input type="text" name="user_Name"  size=30 maxlength=30 value="<?php echo $user_Name;?>" id="user_Name_id" onChange="enableElements()">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Date of Birth</label>
						</td>
						<td>
							<input type="date" name="birth_date" size=30 value="<?php echo $birth_date;?>" id="birth_date_id" onChange="enableElements()">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Gender</label>
						</td>
						<td>
							<?php
                        	if ($gender == "male")
                        	{
                            	echo "<input type='radio' name='gender' value='male' id='gender1_id'  onChange='enableElements()'checked> Male <br> <input type='radio' name='gender' value='female' id='gender2_id' onChange='enableElements()'> Female";
                        	}
                        	else
                        	{
                            	echo "<td><input type='radio' name='gender' id='gender1_id' value='male' onChange='enableElements()'> Male <br><input type='radio' name='gender' value='female' id='gender2_id' onChange='enableElements()' checked> Female </td>";
                        	}
       						?>
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Address</label>
						</td>
						<td>
							<textarea name="address" rows="4" cols="30" placeholder="HTML tags allowed" id="address_id" onChange="enableElements()"><?php echo $address;?></textarea>
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Phone Number</label>
						</td>
						<td>
							<input type="text" name="phone"  size=30 maxlength=15 value="<?php echo $phone;?>" id="phone_id" onChange="enableElements()">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">SSN</label>
						</td>
						<td>
							<input type="text" name="ssn" size=30 maxlength=15 id="ssn_id" value="<?php echo $ssn;?>" onChange="enableElements()">
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">E-mail</label>
						</td>
						<td>
							<input type="text" name="email" size=30 maxlength=30 value="<?php echo $email;?>" id="email_id" onChange="enableElements()">
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
							<input type="text" name= "user_id" size=30 maxlength=30 value="<?php echo $user_id;?>" id="user_id_id" readonly>
						</td>
					</tr>
					<tr>
						<td>
							<label  class="u3">Password</label>
						</td>
						<td>
							<input type="text" name="user_password" size=30 maxlength=10 value="<?php echo $pwd;?>" id="user_password_id" onChange="enableElements()">
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

