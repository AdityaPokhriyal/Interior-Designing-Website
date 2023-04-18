<!DOCTYPE html>
<html>  
<head>   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

<style>
body {
    background-image: url("Background.jpeg");
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

#a1 {
  font-family: 'Playfair Display';
  color: black;
}

#p1 {
  color: rgb(0, 0, 0);
  font-family: 'Playfair Display';
  font-weight: bold;
  font-size: 35px;
  width: 80%;
  padding: 40px;
  margin: 100px auto;
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

/* Flip Cards animations*/
.flex-container1 {
  display: flex;
  background-color: transparent;
  width: 1050px;
  height: 300px;
  perspective: 1000px;
  margin: 100px;
  justify-content: space-evenly;
}

.flex-container2 {
  display: flex;
  background-color: transparent;
  width: 1050px;
  height: 300px;
  perspective: 1000px;
  margin: 100px;
  justify-content: space-evenly;
}

.flex-card-inner {
  position: relative;
  width: 310px;
  height: 100%;
  text-align: center;
  transition: transform 1.6s;
  transform-style: preserve-3d;
  box-shadow: 0 15px 8px 0 rgba(0,0,0,0.2);
  border-radius: 10px;
}

.flex-card:hover {
  transform: rotateY(180deg);
}

.flex-card-front {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flex-card-front {
  background-color: transparent;
  color: black;
}

.flex-card-back {
  background-color: transparent;
  transform: rotateY(180deg);
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
    <a href="DSWProject.php">Home</a>
    <a href="product.php" target="_blank">Products</a>
    <a href="about.php" target="_blank">About</a>
    <a href="logout.php">Logout</a>
  </div>  

<h1>Interior Design</h1>

<hr class="new1">

<p id="p1">SIGNATURE COLLECTION</p>

<hr class="new1"> 

<div class="flex-container1">
  <div class="flex-card-inner flex-card">
    <div class="flex-card-front">
      <img src="P1.jpeg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
    </div>
    <div class="flex-card-back">
      <a id="a1">PRICE: ₹8,499.00</a>
      <p>This Table and Chair set made of Ratten Material is perfectly 
        designed for comfort lover people to relax in balcony.
      </p>
    </div>
  </div>  

  <div class="flex-card-inner flex-card">
    <div class="flex-card-front">
      <img src="P2.jpeg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
    </div>
    <div class="flex-card-back">
      <a id="a1">PRICE: ₹1,599.00</a>
      <p>These Premium Wooden hexagonal carved frames would be a perfect addition to your decor. 
        These frames will make your wall look too pretty to ignore! Decorate your wall NOW! 
        Use them to hold a mirror or the photos of your loved ones.
      </p>
    </div>
  </div>

  <div class="flex-card-inner flex-card">
    <div class="flex-card-front">
      <img src="P3.jpeg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
    </div>
    <div class="flex-card-back">
      <a id="a1">PRICE: ₹4,399.00</a>
      <p>This Dressing Table made of Sheesham Wood perfectly complements any bedroom furniture with a wood finish.
      </p>
    </div>
  </div>
</div>

<div class="flex-container2">
  <div class="flex-card-inner flex-card">
    <div class="flex-card-front">
      <img src="P4.jpeg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
    </div>
    <div class="flex-card-back">
      <a id="a1">PRICE: ₹34,999.00</a>
      <p>This is a Cane woven, beautifully designed sofa set gives an aesthetic look and reflects the 
        combination of traditional elegance and contemporary convenience in art- loving households.</p>
    </div>
  </div>  

  <div class="flex-card-inner flex-card">
    <div class="flex-card-front">
      <img src="P5.jpeg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
    </div>
    <div class="flex-card-back">
      <a id="a1"">PRICE: ₹2,199.00</a>
      <p>This stunning and eye-catching foldable chair made of rosewood adds vivid flair to any room.</p>
    </div>
  </div>

  <div class="flex-card-inner flex-card">
    <div class="flex-card-front">
      <img src="P6.jpeg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
    </div>
    <div class="flex-card-back">
      <a id="a1">PRICE: ₹62,500.00</a>
      <p>Gather guests on a sofa created exclusively for your room made of Salwood Foam. 
        The look of this sofa is a pure classic, with sleek lines, thin-track arms, and tapered base.</p>
    </div>
  </div>
</div>

<hr class="new1">


<div class="footer">
	<p id="p1">MODERN DESIGN AESTHETICS</p>
	<p id="p1">36 MONTHS WARRANTY</p>
	<p id="p1">UBER CHIC, UBER COMFORTABLE STYLES</p>
</div>	

<hr class="new1">

<div class="accept">
	<p id="p1">WE ACCEPT</p>
	<img src="accepted.png" alt="Avatar" style="width:400px;height:250px;border-radius: 10px;">
</div>

</body>
</html>