<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Car Services</title>
<?php
include "header.php";                  
?>
</head>
<body>
<center><h1><b>Our Car Services</b></h1></center>   

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="homeappliances">
  
    <div class="w3-third">
    <a href="../view/Car wash.php">
      <img src="../images/car w.jpg" alt="Car wash" style="width:100%" width="400" height="250">
      <h3>Car Wash</h3>      
      </a> <p>Car wash and cleaning</p> </div>    

    <div class="w3-third">
    <a href="../view/Car painting.php">
    <img src="../images/car p.jpg" alt="car painting" style="width:100%" width="400" height="250">
    <h3>Car Painting</h3> </a>
      <p>Car Painting Servicing</p>
    </div>

    <div class="w3-third">
    <a href="../view/Car repairing.php">
      <img src="../images/car s.jpg" alt="furniture" style="width:100%" width="400" height="250">
      <h3>Car Reparing </h3> </a>
      <p>Car Repairing</p>      
    </div>    
  </div>
 
  <form action="../view/Services.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-center">Go Back</button>
</form>

    </div>    
  

  </div>

	
<?php
include "footer.php";                
?>
</body>
</html>