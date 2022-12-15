<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Painting Services</title>
<?php
include "header.php";                  
?>
</head>
<body>
<center><h1><b>Our Painting Services</b></h1></center>   

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="homeappliances">
  
    <div class="w3-third">
    <a href="../view/indoor.php">
      <img src="../images/indoor.jpg" alt="indoor" style="width:100%" width="400" height="250">
      <h3>Indoor</h3>      
      </a> <p>Color, Illuation</p> </div>    

    <div class="w3-third">
    <a href="../view/outdoor.php">
    <img src="../images/outdoor.jpg" alt="outdoor" style="width:100%" width="400" height="250">
    <h3>Outdoor</h3> </a>
      <p>Outdoor Painting Servicing</p>
    </div>

    <div class="w3-third">
    <a href="../view/furniture.php">
      <img src="../images/furniture painting.jpg" alt="furniture" style="width:100%" width="400" height="250">
      <h3>Furniture </h3> </a>
      <p>Furniture Painting</p>      
    </div>    
  </div>
  <center><p>What else?</p></center>
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
  
    <div class="w3-third">
    <a href="../view/Damp.php">
    <img src="../images/damp1.jpg" alt="damp" style="width:100%" width="400" height="250">
    <h3>Damp Reparing</h3> </a> 
    <p>Repire, Servicing</p> </div>


    </div>    
    <form action="../view/Services.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-center">Go Back</button>
</form>

  </div>

	
<?php
include "footer.php";                
?>
</body>
</html>