<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pest Control Services</title>
<?php
include "header.php";                  
?>
</head>
<body>
<center><h1><b>Our Pest Control Services</b></h1></center>   

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="homeappliances">
  
    <div class="w3-third">
    <a href="../view/Furniture Cleaning.php">
      <img src="../images/fc5.jpeg" alt="furniture cleaning" style="width:100%" width="400" height="250">
      <h3>Furniture Cleaning</h3>      
      </a> <p>Furniture Cleaning Services</p> </div>    

    <div class="w3-third">
    <a href="../view/Home Cleaning.php">
    <img src="../images/hc1.jpg" alt="home cleaning" style="width:100%" width="400" height="250">
    <h3>Home cleaning</h3> </a>
      <p>Home Cleaning Servicing</p>
    </div>

    <div class="w3-third">
    <a href="../view/Tank & pipe.php">
      <img src="../images/tp1.jpg" alt="furniture" style="width:100%" width="400" height="250">
      <h3>Tank & pipe </h3> </a>
      <p>Tank & Pipe repairing Services</p>      
    </div>    
  </div>
 
  <form action="../view/Services.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-certer">Go Back</button>
</form>
  </div> 



	
<?php
include "footer.php";                
?>
</body>
</html>