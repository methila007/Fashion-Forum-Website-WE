<?php
session_start();
if(ISSET($_SESSION['admin']))
{
	
}
else
{

header("Location: index.php?error=culprit");	
	
}

?>
<!DOCTYPE html>
<html>

<head>
<title>Home</title>
<img src="giphy1.gif" alt="fairylight" style="width:100%;height:400px;">
<meta name="viewport" content="width=device-width, initial-scale=0">

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
    width: 100%;
}

th, td {
    padding: 100px;
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
	<li>	<a href="admin_manage_accounts.php">Manage Accouts</a>
  </li>
</ul>

<table style="width:50%" align ="center">
  <tr>
    <th><div class="w3-content w3-section" style="max-width:1000px"  >
	<a href="shoes4.html">
  <img class="mySlides" src="en1.jpg" style="width:950px; hight:40px">
  <a href="hair4.html">
  <img class="mySlides" src="frizzy1.jpg" style="width:950px; hight:30px">
   <a href="fn1.html">
  <img class="mySlides" src=" hijab1.jpg " style="width:950px; hight:30px">
  <a href="fn4.html">
  <img class="mySlides" src=" mark1.jpg " style="width:950px; hight:30px">
</div></th>
    
  </tr>


</table>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); 
}
</script>

</body>
</html>



