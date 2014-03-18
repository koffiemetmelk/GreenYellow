<?php
	include_once 'database.php';
	Session_start(); 
	
	$name = $_POST['email'];
	$password = sha1($_POST['password']);
	
	$query = "select * from leden where email = '$name' and password = '$password'";
	$result = mysql_query($query);
	
	if ($row = mysql_fetch_assoc($result))
	{
		 $_SESSION['user'] = true;
		 $_SESSION['id'] = $row['id'];
		 header("Location:admin.php");
	}
	else
	{
		header("Location:index.php");
	}
?>