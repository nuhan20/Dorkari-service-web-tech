<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Appliances</title>
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
    <a href="../view/tv.php">
      <img src="../images/TV.jpg" alt="tv" style="width:100%" width="400" height="250">
      <h3>TV</h3>      
      </a> <p>Repire, Installation</p> </div>    

    <div class="w3-third">
    <a href="../view/fridge.php">
    <img src="../images/Fridge.jpg" alt="fridge" style="width:100%" width="400" height="250">
    <h3>Fridge</h3> </a>
      <p>Servicing</p>
    </div>

    <div class="w3-third">
    <a href="../view/oven.php">
      <img src="../images/ovan.jpg" alt="oven" style="width:100%" width="400" height="250">
      <h3>Oven</h3> </a>
      <p>Repire, Servicing</p>      
    </div>    
  </div>
  <center><p>What else?</p></center>
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
  
    <div class="w3-half">
    <a href="../view/geyser.php">
    <img src="../images/geyser.jpg" alt="Geyser" style="width:100%" width="400" height="250">
    <h3>Heater</h3> </a> 
    <p>Repire, Servicing</p> </div>

    <div class="w3-half">
    <a href="../view/AC.php">
    <img src="../images/AC.jpg" alt="ac" style="width:100%" width="400" height="250">
    <h3>Air Conditioner</h3> </a>
    <p>Repire, Servicing, Installation</p>
    </div>    
    <form action="../view/Services.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-left">Go Back</button>
</form>

  </div>

	
<?php
include "footer.php";                
?>
</body>
</html>