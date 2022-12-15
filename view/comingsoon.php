
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
<?php
include "../view/header.php";                 
?>


</head>
<body>
 
<?php
$comments = $uname = $uemail =  $uadress = $ptime = $service =  $uphnno = "";
?>
<CENTER>
<div> <br>
  <form action="../control/checkout.php" method="post"> 
<label for="uname">Your Name: </label>
    <input type="text" id="uname" name="uname" id="uname" placeholder="Name.."
     value="<?php echo $uname;?>"/>
     <br> <br>
    <label for="uemail">Email: </label>
    <input type="text" id="uemail" name="uemail" id="uemail" placeholder="Email.." 
    value="<?php echo $uemail;?>"/>
    
    <br> <br>
    <label for="uphnno">Phone Number: </label>
    <input type="number" id="uphnno" name="uphnno" id="uphnno" placeholder="Contact Number..."
    value="<?php echo $uphnno;?>"/>
    <br> <br>
    <label for="service">Select service: </label> 
		<select id="service" name="service" >
  		<option value= <?php echo $service="TV Repair";?>>TV Repair</option>
      <option value= <?php echo $service="Fridge Repair";?>>Fridge Repair</option>
      <option value= <?php echo $service="Oven Repair";?>>Oven Repair</option>
      <option value= <?php echo $service="Heater Repair";?>>Heater Repair</option>
      <option value= <?php echo $service="AC Repair";?>>AC Repair</option>
      <option value= <?php echo $service="Indoor Painting";?>>Indoor Painting</option>
      <option value= <?php echo $service="Outdoor Painting";?>>Outdoor Painting</option>
      <option value= <?php echo $service="Furniture Painting";?>>Furniture Painting</option>
      <option value= <?php echo $service="Car Painting";?>>Car Painting</option>
      <option value= <?php echo $service="Car Repair";?>>Car Repair</option>
      <option value= <?php echo $service="Car Wash";?>>Car Wash</option>
      <option value= <?php echo $service="Furniture Cleaning";?>>Furniture Cleaning</option>
      <option value= <?php echo $service="Home Cleaning";?>>Home Cleaning</option>
      <option value= <?php echo $service="Sink Repair";?>>Sink Repair</option>
      <option value= <?php echo $service="Washing Service";?>>Washing Service</option>
      <option value= <?php echo $service="Ironing";?>>Ironing</option>
      <option value= <?php echo $service="Hire a Driver";?>>Hire a Driver</option>
      <option value= <?php echo $service="Other";?>>Other...</option>     
    </select> <br> <br>
    
   Adress: <input type="text" id="uadress" name="uadress" placeholder="Address.."
   value="<?php echo $uadress;?>"/>
<br> <br>
   <label for="ptime">Time Slot: </label>
    <input type="text" id="ptime" name="ptime" id="ptime" placeholder="Preferred Time.."
     value="<?php echo $ptime;?>"/>
     
     <br> <br>
     <label for="comments">Problem Details: </label>
     <textarea type="text" name="comments" id="comments" value="<?php echo $comments;?>"></textarea>
     <br> <br>
<div> <br>
   <button type="submit" value="Submit"
    class="w3-button w3-black w3-padding-large w3-large ">
    Checkout</button> </div>
</form>
  
  
</div>


<br> 
<button onclick="Back()" 
class="w3-button w3-red w3-padding-large w3-large w3-center">
Back</button>

</div> 
           
</center> 






<script>
function Back() {
  location.replace("../view/services.php")
}
</script>



<?php
include "../view/footer.php";                 
?>
</body>
</html>