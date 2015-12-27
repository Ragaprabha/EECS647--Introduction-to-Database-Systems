<?php
session_start(); // Starting Session
/*---------------------------*/
/*-- PHP error reporting ----*/
/*---------------------------*/
$error=''; 
/*----------------------------------------------*/
/*-- Setting Database Username and Password ----*/
/*----------------------------------------------*/
$username = 'bdesu';
$password = 'password123!';

$database = @mysql_connect('mysql.eecs.ku.edu',$username, $password);

/*---------------------------*/
/*-- Database Connection ----*/
/*---------------------------*/

if(!$database){
	die('Could not connect:' . mysql_error());
}

if(!mysql_select_db($username, $database)){
	die('Could not select database' .mysql_error());
}

/*-- This function is executed when the submit button is clicked after entering User details ----*/
if(isset($_POST['submit'])) 
{
	/*-- Initializing PHP variables from PHP POST --*/
	$acc_No=$_POST['acc_No'];
	$acc_type=$_POST['acc_type'];
	$balance=$_POST['balance'];
	$branch=$_POST['branch'];
	$nick_name=$_POST['nick_name'];
	$open_date=$_POST['open_date'];
	$card_No=$_POST['card_No'];
	$user_Name=$_POST['user_name'];
	$birth_date=$_POST['birth_date'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$ssn=$_POST['ssn'];
	$email=$_POST['email'];
	$user_id=$_POST['user_id'];
	$pwd=$_POST['user_password'];

	/*-- Database Query --*/
	$query = mysql_query("select * from User where user_id='$user_id'", $database);
	$rows = mysql_num_rows($query);
	if ($rows == 1) {
	} 
	else {
		/*-- Database Query --*/
		$user_query = 'INSERT INTO User(user_id, username, onetimepassword,permpassword,profilepassword, dob,address, phone, email, gender,SSN)
    	VALUES("'.mysql_real_escape_string($user_id).'","'.mysql_real_escape_string($user_Name).'","'.mysql_real_escape_string($pwd).'","'.mysql_real_escape_string($pwd).'","'.mysql_real_escape_string($pwd).'","'.mysql_real_escape_string($birth_date).'","'.mysql_real_escape_string($address).'",'.mysql_real_escape_string($phone).',"'.mysql_real_escape_string($email).'","'.mysql_real_escape_string($gender).'",'.mysql_real_escape_string($ssn).')';
		
		if(!mysql_query($user_query,$database))
		{
		echo "<br /><br /><br />";
		echo mysql_error();
		}
	}
	
	/*-- Database Query --*/
	$acc_query = 'INSERT INTO Account(Account_no, Account_type, balance, branch, nickname, open_date, debitCard_no, user_id)
    VALUES('.mysql_real_escape_string($acc_No).',"'.mysql_real_escape_string($acc_type).'",'.mysql_real_escape_string($balance).',"'.mysql_real_escape_string($branch).'","'.mysql_real_escape_string($nick_name).'","'.mysql_real_escape_string($open_date).'",'.mysql_real_escape_string($card_No).',"'.mysql_real_escape_string($user_id).'")';


	if(!mysql_query($acc_query,$database))
	{
		die('Account Table Error: ' . mysql_error());
	}

	/*--- Page redirection --*/
	header("Location: AddUserSuccess.php");
}

/*-- This function is executed when the back button is clicked----*/

if(isset($_POST['back']))
{	
	/*--- Page redirection --*/
	header("Location: InquireUser.php");
}
mysql_close($database); // Closing Connection
?>