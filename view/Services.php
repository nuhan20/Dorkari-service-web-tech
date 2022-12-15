<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
<?php
include "header.php";                
?>
</head>
<body>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="homeappliances">
  
    <div class="w3-third">
    <a href="../view/homeappliances.php">
      <img src="../images/home2.gif" alt="home" style="width:100%" width="400" height="250">
      <h3>Home Appliances</h3>      
      </a> <p>Repire: TV, Fridge, Oven, Heater, AC</p> </div>    

    <div class="w3-third">
    <a href="../view/painting.php">
    <img src="../images/painting.gif" alt="paint" style="width:100%" width="400" height="250">
    <h3>Painting Services</h3> </a>
      <p>Find out our all out painting services</p>
    </div>

    <div class="w3-third">
    <a href="../view/car.php">
      <img src="../images/car2.gif" alt="car" style="width:100%" width="400" height="250">
      <h3>Car Services</h3> </a>
      <p>Car Wash, Mechanical Work, PaintJob</p>      
    </div>    
  </div>
  <center><p>What else?</p></center>
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
  
    <div class="w3-third">
    <a href="../view/PestControl.php">
    <img src="../images/pest.gif" alt="pest" style="width:100%" width="400" height="250">
    <h3>Pest Control</h3> </a> 
    <p>We offer insects cleaning service</p> </div>

    <div class="w3-third">
    <a href="../view/Laundry.php">
    <img src="../images/laundry.gif" alt="laundry" style="width:100%" width="400" height="250">
    <h3>Laundry Service</h3> </a>
    <p>We offer high quality washing with WASHING POWDER NIRMA.</p>
    </div>
     
      
      
    <div class="w3-third">
    <a href="../view/404.php">
      <img src="../images/driver.gif" alt="driver" style="width:100%" width="400" height="250">
      <h3>Driver Service</h3> </a>
      <p>You can hire drivers Contract</p>
    </div>    
  </div>

  <form action="../view/index.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-center">Go Back</button>
</form>


<?php
include "footer.php";                
?>
</body>
</html>