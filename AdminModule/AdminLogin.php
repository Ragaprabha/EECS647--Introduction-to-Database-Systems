<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin Login</title>
		<script language="javascript">
		/*
		This function displays current date and time to the HTML document
		*/
		function date1(){
			document.getElementById("date1").innerHTML=Date();
		}
		</script>
		<link rel="stylesheet" href="add22.css"/>
	</head>
	<body onLoad="date1()" oncontextmenu="return false;">
		<div class="container1">
		<div class="header11">
			<img src="logo.jpg"  height="100" width="150" align="left" /></br><B></B>
		</div>
		<div class="menu11"><marquee direction="right" >NEWS:skslspspskisjsj </marquee>
			<br/>
			<br/>
		</div>
		<div class="margin1">
		</div>
		<div class="display3">
			<h3 style= "text-align: center">Online Banking System</h3>
			<br>
			<h3 style= "text-align: center">Admin login Panel</h3>
			<form name="admin_login" method="post" action="AdminLoginVerify.php" >
				<fieldset>
					<table>
						<tr>
        					<td>
								<label  class="u1">Admin ID</label><br><br>
							</td>
							<td>
								<input type="text" name="admin_id"   size=30 maxlength=30>
							</td>
						</tr>
						<tr>
        					<td>
								<label  class="u1">Password</label><br><br>
							</td>
							<td>
								<input type="password" name="admin_pwd"   size=30 maxlength=30 >
							</td>
						</tr>
					</table>	
					<input type="submit" value="Login"   name="admin_lgn">
					<br><br>
					<a href="HomePage.php">Home Page</a>
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

