<?php
	session_start();
	
    if($_GET['logout']=='yes') {
        session_destroy();
		echo '<script>alert("logging out");</script>';
        echo "<script>window.location='index.php'</script>";
    }

?>