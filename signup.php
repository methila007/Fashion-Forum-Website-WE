<?php
	$link = mysqli_connect('127.0.0.1','root','',"project") or die("Connecton error");
	
	session_start();
	
	$n = $_REQUEST['nam'];
	$un = $_REQUEST['uname'];
	$em = $_REQUEST['email'];
	$pass = $_REQUEST['password'];
	
	$res= mysqli_query($link,"insert into project.users values ('".$n."','".$un."','".$em."','".$pass."')") or die("Could not connect to database ");
	$res= mysqli_query($link,"insert into project.login values ('".$em."','".$pass."')") or die("Could not connect to database ");
	
	echo '<script>alert("User Created ");</script>';
	header("Location: index.php"); 
	
   
?>
