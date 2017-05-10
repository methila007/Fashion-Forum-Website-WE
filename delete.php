<?php
	$link = mysqli_connect('localhost:3306','root','','project') or die("Connecton error");
	
	$e = $_GET['em'];
	
	echo "<script>alert('Delete');</script>";
    echo '<script>alert('.$e.' deleted);</script>';
	$res= mysqli_query($link,"delete from project.users where email='".$e."'");
	$res2= mysqli_query($link,"delete from project.login where email='".$e."'");
	
	header('Location:admin_manage_accounts.php');	
?>

