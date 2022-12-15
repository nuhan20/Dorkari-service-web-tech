<!DOCTYPE html>
<html>
<head>
  <?php                 
include "header.php";                
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #ff5722;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">About Us</h2>

<div class="card">
  <img src="../images/akash.png" alt= "Akash" style="width:100%">
  <h1>Asmaul Hossain Akash</h1>
  <p class="title">20-44209-3</p>
  <p>AIUB</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>

<div class="card">
  <img src="../images/nuhan.png" alt="Digonto" style="width:100%">
  <h1>Nuhan Ahmed Digonto</h1>
  <p class="title">20-43068-1</p>
  <p>AIUB</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>


<div class="card">
  <img src="../images/anu.png" alt="anu" style="width:100%">
  <h1>Anonnya Sarkar</h1>
  <p class="title">20-42600-1</p>
  <p>AIUB</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>

<div class="card">
  <img src="../images/sumi.png" alt="Sumi" style="width:100%">
  <h1>Mst. Zannatul Ferdous Sumi</h1>
  <p class="title">20-43007-1</p>
  <p>AIUB</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>
<form action="../view/index.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-center">Go Back</button>
</form>
<?php
include "footer.php";                
?>
</body>
</html>