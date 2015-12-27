<?php
session_start(); // Starting Session

$error=''; // Variable To Store Error Message
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
	
	$user_Name=$_POST['user_Name'];
	$birth_date=$_POST['birth_date'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$ssn=$_POST['ssn'];
	$email=$_POST['email'];

	$user_id=$_POST['user_id'];
	$pwd=$_POST['user_password'];

	/*-- Database Query --*/
	$acc_query = 'UPDATE Account SET Account_type = "'.mysql_real_escape_string($acc_type).'", balance = '.mysql_real_escape_string($balance).', branch = "'.mysql_real_escape_string($branch).'", nickname = "'.mysql_real_escape_string($nick_name).'",open_date = "'.mysql_real_escape_string($open_date).'", debitCard_no = '.mysql_real_escape_string($card_No).', user_id = "'.mysql_real_escape_string($user_id).'" WHERE Account_no = '.$acc_No.'';


	if(!mysql_query($acc_query,$database))
	{
		echo mysql_error();
	}
	/*-- Database Query --*/
	$user_query = 'UPDATE User SET username ="'.mysql_real_escape_string($user_Name).'",permpassword = "'.mysql_real_escape_string($pwd).'",dob = "'.mysql_real_escape_string($birth_date).'",address = "'.mysql_real_escape_string($address).'", phone = '.mysql_real_escape_string($phone).',SSN = '.mysql_real_escape_string($ssn).',email = "'.mysql_real_escape_string($email).'",gender = "'.mysql_real_escape_string($gender).'" WHERE user_id = "'.$user_id.'"';

	if(!mysql_query($user_query,$database))
	{
		die('User Table Error: ' . mysql_error());
	}
	header("Location: UpdateUserSuccess.php");// Redirecting To Other Page
}

if(isset($_POST['delete']))
{	
	/*-- Initializing PHP variables from PHP POST --*/
	$acc_No=$_POST['acc_No'];
	$user_id=$_POST['user_id'];

	/*-- Database Query --*/
	$acc_query = 'DELETE FROM Account WHERE Account_no = '.$acc_No.'';

	if(!mysql_query($acc_query,$database))
	{
		die('Account Table Error: ' . mysql_error());
	}
	/*-- Database Query --*/
	$user_query = 'DELETE FROM User WHERE user_id = "'.$user_id.'"';

	if(!mysql_query($user_query,$database))
	{
		echo "<br /><br /><br />";
		echo mysql_error();
	}

	header("Location: DeleteUserSuccess.php");// Redirecting To Other Page
}

if(isset($_POST['back']))
{
	header("Location: SearchUsers.php");// Redirecting To Other Page
}
if(isset($_POST['ok']))
{
	header("Location: SearchUsers.php");// Redirecting To Other Page
}

mysql_close($database); // Closing Connection

?>