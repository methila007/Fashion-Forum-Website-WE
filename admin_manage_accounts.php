<!DOCTYPE html>
<html>

<head>
<title>Manage Account</title>
<img src="giphy1.gif" alt="fairylight" style="width:100%;height:400px;">
<meta name="viewport" content="width=device-width, initial-scale=0">
<script scr="ajax.js"></script>

<script>
	function del(){
		alert("delete "+val);
		window.location.href="delete.php?email="+val;
	}
</script>


<style>

body{

background-color:black;


}

.mySlides {display:none;}
ul {

     text-align:center;
    list-style-type: none;
    margin: 20px;
    padding: 0px;
    overflow: hidden;
  
   
    background-color: #1a000a;
}

li {
    float: left;
  

}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 25px 30px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: white;
}

li a.active {
    background-color: #ff809f;
    color: white;
   
}

li a:hover:not(.active) {
    background-color: hotpink;
    color: white;
}

li.dropdown {
    display: inline-block;
   
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:white;
    min-width: 180px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 16px 18px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: white}

.dropdown:hover .dropdown-content {
    display: block;
}
.mySlides {display:none;}

body
{
    font-family:Verdana,sans-serif;font-size:1.0em;
}

div#header,div#footer,div#content,div#post {
    border:1px solid grey;
    margin:5px;margin-bottom:15px;padding:8px;
    background-color:white;
}
div#header,div#footer {
    color:white;background-color:#ffe0cc;margin-bottom:5px;
}
div#content {
    background-color:#ffe0cc;
}
div#menu ul  {
    margin:0;padding:0;
}
div#menu ul li {
    display:inline; margin:2px;
}

header,footer,section,article {
    border:1px solid grey;
    margin:5px;margin-bottom:5px;padding:8px;
    background-color:white;
}
header,footer {
    color:white;background-color:#ffe0cc;margin-bottom:5px;
}
section {
    background-color:#ddd;
}
nav ul  {
    margin:0;padding:0;
}
nav ul li {
    display:inline; margin:5px;
}

table, td, th {
    border: 2px solid white;
    text-align: left;
	background-color:white;
}

table {
    border-collapse: collapse;
    width:50%;
	
}

th, td {
    padding: 20px;
	
	border: 2px solid black;
}

</style>
</head>
<body>

<ul>
  <li><a href="pr.html">Whats trending!</a></li>
  <li class="dropdown">
    <a href="#" class="fsh">Fashion</a>
    <div class="dropdown-content">
      <a href="fashionnews.html">Fashion news</a>
      <a href="prefall.html">Pre Fall 2016</a>
    </div>
  <li class="dropdown">
    <a href="#" class="bt">Beauty</a>
    <div class="dropdown-content">
      <a href="hair.html">Hair</a>
      <a href="makeup.html">Makeup</a>
      <a href="skin.html">Skincare</a>
    </div>
    <li class="dropdown">
    <a href="#" class="fd">Food</a>
    <div class="dropdown-content">
      <a href="baking.html">Baking</a>
      <a href="recipe.html">Recipes</a>
    
  
    
    <li class="dropdown">
    <a href="#" class="acc">Accessories</a>
    <div class="dropdown-content">
      <a href="shoes.html">Shoes</a>
      <a href="hand.html">Handbags</a>
        </div>
	<li class="dropdown">
    <a href="#" class="acc">Account</a>
    <div class="dropdown-content">
    
      <a href="signout.php?logout=yes">Log Out</a>
    </div>
	
      <li class="dropdown"  align="top right">
    <a href="#" class="active">+Create</a>
    <div class="dropdown-content">
    <a href="submit.html">Submit story</a>
    </div>
  
  </li>
</ul>

<?php
	$link = mysqli_connect('localhost:3306','root','',"project") or die("Connecton error");
	
	$res= mysqli_query($link,"select * from project.users");
	
	echo '<table border="5" align="center">';
	echo '<tr>';
		echo '<th>Name</th>';
		echo '<th>Email</th>';
		echo '<th>Option</th>';
	echo '</tr>';
	echo '<br/><br/><br/>';
	while($row=mysqli_fetch_array($res)){
		echo '<tr>';
		   echo '<td>'.$row['name'].'</td>';
		   echo '<td>'.$row['email'].'</td>';
		   echo '<td>';
		     echo '<a href="delete.php?em='.$row['email'].'">Delete</a>';
		   echo '</td>';
	}
	echo '</table>';
	
?>

<html>
	<br/><br/>;
	<center>
	<form action="delete.php" method="post">;
	<p style="color:white;">Write User Email to delete</p>;
	<input type="text" name="em"/><br/><br/>;
	<input type="submit" />;
	</center>;


</html>
</body>
</html>



