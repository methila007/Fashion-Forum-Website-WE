<?php
$login_code= isset($_REQUEST['error']) ? $_REQUEST['error'] : '1';
if($login_code=="false"){
    $login_message="Wrong Credentials !";
	  $color="red";
}
if($login_code=="culprit"){
    $login_message="errorAdmin";
	  $color="red";
}
else{
    $login_message="Please Login !";
	  $color="green";
}
?>
<!DOCTYPE html>

<html >
  <head>
    <meta charset="UTF-8">
    <title>WE!Login Form</title>
    
    
    <link rel="stylesheet" href="source/css/reset.css">

    
        <link rel="stylesheet" href="source/css/style.css">

    <script>
		function index(){
			window.location.href = 'index1.html';
		}
	
	</script>
    
    
  </head>

  <body>

    <div class="contain">
   <div id="close" class="close">Close</div>
</div>
<div class="containmain">
  <div class="center">
  <div class="profile">
    
  </div>	
  <?php if($login_message=="Wrong Credentials !")
 {
	echo '<script>alert("Wrong Credentials!");</script>';					
	} 
	if($login_message=="errorAdmin")
    {
	echo '<script>alert("Hey!!!! You are not the Admin you culprit!!");</script>';
	}
	?>

  <form class="form" action="checkaccess.php" method="post">
  
  
  <input type="text" class="topform" placeholder="Email" name="email"><br>
  <input type="password" class="bottomform" placeholder="Password" name="password"><br>
  <input type="submit" value="Sign In"><br/><br/>
  <input type="button" value="Sign Up" onclick="index();" >
</form>
 
    </div>
</div>
    <script src='jquery.min.js'></script>       <!-- baire theke load korsi --> 

        <script src="source/js/index.js"></script>  <!-- baire theke load korsi --> 

    
    
    
  </body>
</html>
