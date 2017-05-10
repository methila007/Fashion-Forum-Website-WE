<?php
	
session_start();
	
$_SESSION['email']= $_REQUEST['email'];
$email=$_SESSION['email'];

$_SESSION['password']=$_REQUEST['password'];
$password=$_SESSION['password'];

$db = mysqli_connect('127.0.0.1','root','','project') or die("Connecton error");
	
$res= mysqli_query($db,"select * from login where email='$email' and password='$password'");
	
	
if($row=mysqli_fetch_array($res))
   {
	
		
	if($_SESSION['email'] == 'admin' ){
		$_SESSION['admin']=true;
		echo '<script>alert("Logged IN ");</script>';
		header("Location: admin.php");
	}
	else{
		echo '<script>alert("Logged IN ");</script>';
			header("Location: pr.html"); 
	}
			
  }
else
  {
	header("Location: index.php?error=false");
	
  }	
?>
