
<!DOCTYPE html>
<html>

<head>
<title>
New story
</title>
<meta name="viewport" content="width=device-width, initial-scale=0">

<style>



table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    
}

td, th {
    border: 0px solid #dddddd;
    text-align: left;
    padding: 20px;
}

tr:nth-child(even) {
    background-color: #ffe6ec;
}



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 25px 28px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #ffdccc;
}

li.dropdown {
    display: inline-block;
}
li a.active {
    background-color: #ff809f;
    color: white;
}

li a:hover:not(.active) {
    background-color: hotpink;
    color: white;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #feebed;
    min-width: 180px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: #595959;
    padding: 16px 18px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #ffd9cc}

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
    color:white;background-color:#ffe0cc;margin-bottom:1px;
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
</style>
</head>
<body>

<ul>
  <li><a  href="pr.html">Whats trending!</a></li>
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
     
    </div>
    
    <li class="dropdown">
    <a href="#" class="acc">Accessories</a>
    <div class="dropdown-content">
      <a href="shoes.html">Shoes</a>
      <a href="hand.html">Handbags</a>
    </div>
  </li>
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

<br>
<h1>
 <?php echo $_POST["title"]; ?><br></h1>
<br>

<p>
 
 <?php echo $_POST["story"]; ?>
 </p>


</body>
</html>