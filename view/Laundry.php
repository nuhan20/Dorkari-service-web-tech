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
    <a href="../view/washing.php">
      <img src="../images/w1.jpg" alt="wash" style="width:100%" width="400" height="250">
      <h3>Washing Services</h3>      
      </a> <p>Dry Washing Service</p> </div>    

    <div class="w3-third">
    <a href="../view/iron.php">
    <img src="../images/iron.jpg" alt="iron" style="width:100%" width="400" height="250">
    <h3>Ironing</h3> </a>
      <p>Iron Servicing</p>
    </div>

   
  </div>

  <form action="../view/Services.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-center">Go Back</button>
</form>
	
<?php
include "footer.php";                
?>
</body>
</html>
