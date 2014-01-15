<?php

 session_start();
 session_destroy();
 session_start();
 
if(isset($_GET["regname"]))
{
	$password = isset($_GET["regpass1"]) ? $_GET["regpass1"] : '';
	$password_confirm = isset($_GET["regpass2"]) ? $_GET["regpass2"] : '';
	$regname =  isset($_GET["regname"]) ? $_GET["regname"] : '';
	$regemail =  isset($_GET["regemail"]) ? $_GET["regemail"] : '';

	if($password == $password_confirm)
	{

		$conn=  mysql_connect("localhost", "root")or die(mysql_error());
		mysql_select_db("test",$conn);
		
		$sql="insert into users (name,email,password)values('$regname','$regemail','$password')";
		$result=mysql_query($sql,$conn) or die(mysql_error());		
		
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
	print "invaild input data";
}
// dones