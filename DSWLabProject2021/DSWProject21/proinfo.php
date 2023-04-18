<!DOCTYPE html>
<html>  
<head>   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

<style>
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
</style>
</head>

<body>

  <div class="topnav" id="myTopnav">
    <a href="C:\Users\adiro\OneDrive\Desktop\DSWProject21\DSWProject.html">Home</a>
    <a href="C:\Users\adiro\OneDrive\Desktop\DSWProject21\product.html">Products</a>
    <a href="C:\Users\adiro\OneDrive\Desktop\DSWProject21\profile.html" target="_blank">Profile</a>
    <a href="C:\Users\adiro\OneDrive\Desktop\DSWProject21\about.html" target="_blank">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>  
</body>
</html>