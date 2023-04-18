<!DOCTYPE html>
<html>  
<head>   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

<style>
body {
    background-image: url("pexels-olya-kobruseva-5791788 (1).jpg");
    background-size: 100% 100%;
    background-size : cover;
    background-attachment: fixed, scroll;
}

h1 {
  display: flex;		
  color: rgb(255, 255, 255);
  text-align: center;
  font-size: 80px;
  font-family: 'Playfair Display';
  justify-content: center;
}

h2 {
  font-family: 'Playfair Display';
}

#p2 {
  color: rgb(0, 0, 0);
  font-family: 'Playfair Display';
  font-size: 19px;
  width: 80%;
  padding: 40px;
  margin: 100px auto;
  border-radius: 10px;
  text-align: center;
}

#p1 {
  color: rgb(0, 0, 0);
  font-family: 'Playfair Display';
  font-weight: bold;
  font-size: 30px;
  width: 80%;
  padding: 20px;
  margin: 30px auto;
  border-radius: 10px;
  text-align: center;
}


/* Add a black background color to the top navigation */
.topnav {
  display: flex;
  background-color: rgba(255, 253, 253, 0.733);
  overflow: hidden;
  border-radius: 10px;
  padding: 0px 0px; 
  margin: 0px;
  width: 100%;
  height: 50px;
  justify-content: center;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family: 'Playfair Display';
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: rgb(0, 0, 0);
  color: rgb(255, 255, 255);
}

/* Add an active class to highlight the current page */
.topnav a.icon {
  color: rgb(0, 0, 0);
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Horizontal Line*/
.new1 {
  display: flex;
  border-top: 1px solid gray;
  width: 400px;
  justify-content: center;
}

.footer {
  display: flex;	
}

.accept {
  text-align: center;
}

</style>
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="DSWProject.php" target="_blank">Home</a>
    <a href="product.php" target="_blank">Products</a>
    <a href="about.php">About</a>
    <a href="logout.php">Logout</a>
  </div>  

<hr class="new1">

<h1>ABOUT US</h1>

<p id="p1">
We are a full-service interior design company located in Noida, 
India since 2015, specializing in both residential and commercial design. 
Whether you need a quick refresh of furniture and paint colors, 
or an extensive whole-house renovation, 
we can provide the expertise to make sure the project runs smoothly and gives 
you the best results possible.
</p>

<p id="p1">
Because we are a small design firm, 
we are extremely flexible and nimble. 
We have relationships with many local craftsmen and subcontractors, 
so you can be assured that your project is completed with the highest standards. 
Or, if you prefer, you can hire your own contractors, 
and we’ll work with them throughout the remodeling process.
</p>

<hr class="new1">

<div class="accept">
	<p id="p1">MADE BY</p>
	<p id="p1">ADITYA POKHRIYAL - 20803017</p>
    <p id="p1">DHRUV GARG - 20803021</p>
    <p id="p1">RITHVIK KALRA - 20803019</p>
    <p id="p1">AISHWARYA SHANKER - 20803009</p>
</div>

</body>
</html>