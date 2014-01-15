<?php

require './include/config.php';

session_start();

if(isset($_POST["regname"]))
{
	$password = isset($_POST["regpass1"]) ? $_POST["regpass1"] : '';
	$password_confirm = isset($_POST["regpass2"]) ? $_POST["regpass2"] : '';
	$regname =  isset($_POST["regname"]) ? $_POST["regname"] : '';
	$regemail =  isset($_POST["regemail"]) ? $_POST["regemail"] : '';

	if($password == $password_confirm)
	{

		$sql = "insert into users SET name='$regname', email='$regemail',password='$password'";
		$result = mysql_query($sql) or die(mysql_error());
		print "<h1>you have registered sucessfully</h1>";
		print "<a href='index.php'>go to login page</a>";
	}
	else
	{
		print "passwords doesnt match";
	}
}
else
{

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>register</title>
</head>
<body  bgcolor="black"    style="color:white;">
<FORM ACTION="register.php" METHOD=POST>
<h1>welcome to the registration page</h1>
please input the registration details to create an account here<br>
<table border="2">
<tr>
<td>User Name :</td><td><input name="regname" type="text" size"20"></input></td>
</tr>
<tr>
<td>email :</td><td><input name="regemail" type="text" size"20"></input></td>
</tr>
<tr>
<td>password :</td><td><input name="regpass1" type="password" size"20"></input></td>
</tr>
<tr>
<td>retype password :</td><td><input name="regpass2" type="password" size"20"></input></td>
</tr>
</table>
 <input type="submit" value="register me!"></input>
</FORM>
</body>
</html>

<?php

}
