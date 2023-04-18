<!DOCTYPE html>
<html>  
<head>   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

<style>
body {
    background-image: url("probackground.jpg");
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
    <a href="DSWProject.php" target="_blank">Home</a>
    <a href="product.php">Products</a>
    <a href="about.php" target="_blank">About</a>
    <a href="logout.php">Logout</a>
  </div>  

<p id="p1">FOR HOME</p>

<hr class="new1">

<p id="p2">"THE COLORS AND
    DESIGN OF A
    HOME SHOULD BE
    A REFLECTION OF
    THE PEOPLE WHO
    LIVE INSIDE."</p>

<div class="flex-container1">
    <div class="flex-card-inner flex-card">
      <div class="flex-card-front">
        <img src="pro4.jpg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
      </div>
      <div class="flex-card-back">
        <h2>PRICE: ₹5,999</h2>
        <p>For those who like things fun and quirky, this chair could be a good addition in the house. 
          The pure black chair features a cut-out jaali pattern. 
          The sleek and slim silhouette lets it mingle with all spaces. Keep it in the garden, 
          in the balcony or in the living room. Use it as a dining chair when extra guests arrive. 
          It remains multi-functional at all times.
        </p>
      </div>
    </div>  
  
    <div class="flex-card-inner flex-card">
      <div class="flex-card-front">
        <img src="pro5.jpg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
      </div>
      <div class="flex-card-back">
        <h2>PRICE: ₹8000</h2>
        <p>Ratten Cane sofa cane (2 seater + 3 one seaters and a table). 
          A handicraft mafe for art loving households. Gives an aesthetic and a traditional look to your house.
        </p>
      </div>
    </div>
  
    <div class="flex-card-inner flex-card">
      <div class="flex-card-front">
        <img src="pro6.jpg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
      </div>
      <div class="flex-card-back">
        <h2>PRICE: ₹6,499</h2>
        <p>The swing chair provides the best reading space and adjustable height option with a 3 ft. 
          long hanging chain, you can choose a comfortable posture. 
          The elegant and modern hanging swing chair can also be used when meditating, relaxing, watching TV, 
          playing with your kids, and so on!
        </p>
      </div>
    </div>
  </div>

<p id="p1">FOR WORKPLACE</p>

<hr class="new1">

<p id="p2">"CHOOSE A JOB YOU LOVE,
    AND YOU WILL NEVER HAVE
    TO WORK A DAY IN YOUR LIFE."</p>

<div class="flex-container1">₹
    <div class="flex-card-inner flex-card">
      <div class="flex-card-front">
        <img src="pro1.jpg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
      </div>
      <div class="flex-card-back">
        <h2>PRICE: ₹19,999</h2>
        <p>Modern Office Table Chair set that helps you work with comfort and concentration.</p>
      </div>
    </div>  
  
    <div class="flex-card-inner flex-card">
      <div class="flex-card-front">
        <img src="pro2.jpg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
      </div>
      <div class="flex-card-back">
        <h2>PRICE: ₹6,499</h2>
        <p>Swan Couch like chair with wooden legs with full back support and elevated arm rests. 
          Perfect for office, reception and lounge areas.
        </p>
      </div>
    </div>
  
    <div class="flex-card-inner flex-card">
      <div class="flex-card-front">
        <img src="pro3.jpg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
      </div>
      <div class="flex-card-back">
        <h2>PRICE: ₹9,499</h2>
        <p>The Table Top Is Made Of Engineered Wood And Oval Design Added A Worth Simple Style But Beautiful, 
          easy to install, more convenient. Safe For Kids, 
          More Secure And Practical Give Your Home A Luxurious Look With This Wood Tea Table.
        </p>
      </div>
    </div>
  </div>

<p id="p1">FOR HOSPITALITY</p>

<hr class="new1">

<p id="p2">"HOSPITALITY IS NOT TO CHANGE
    PEOPLE, BUT TO OFFER THEM SPACE
    WHERE CAHNGE CAN TAKE PACE."</p>

<div class="flex-container1">
    <div class="flex-card-inner flex-card">
      <div class="flex-card-front">
        <img src="pro7.jpg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
      </div>
      <div class="flex-card-back">
        <h2>PRICE: ₹17,099.00</h2>
        <p>These set dining chairs and table made of solid sheesham wood with mahogany finish can set the 
          right tone when you sit down to eat. Having the right dining chairs makes all the difference when it’s 
          time to gather your loved ones around the table to share a meal.
        </p>
      </div>
    </div>  
  
    <div class="flex-card-inner flex-card">
      <div class="flex-card-front">
        <img src="pro8.jpg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
      </div>
      <div class="flex-card-back">
        <h2>PRICE: ₹10,499</h2>
        <p>Dining Table Set (1+4) from the house of xyz Furniture, 
          it is made of plastic and comes in orange and blue colour. 
          It is easy to maintain and clean. It can be used for multi purpose. 
          Contemporary & modern, outdoor & cafeteria, 
          strength and durability and makes it ideal for long lasting use, indoor and out door usable. 
          Excellent quality, 4 seater space, attractive finishing, sufficient space for dinner, 
          portable and dis Assemble can be legs.
        </p>
      </div>
    </div>
  
    <div class="flex-card-inner flex-card">
      <div class="flex-card-front">
        <img src="pro9.jpg" alt="Avatar" style="width:100%;height:100%;border-radius: 10px;">
      </div>
      <div class="flex-card-back">
        <h2>PRICE: ₹1,999.00</h2>
        <p>These Beautiful Antique chairs made of teak wood are ideal for a restaurant and takes very less space. 
          The wood used is termite resistant.
        </p>
      </div>
    </div>
  </div>
  
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