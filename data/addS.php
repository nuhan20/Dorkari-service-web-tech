<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Panel</title>
<?php
include "../control/header2.php";                 
?>
<style>
  
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: left;
  padding: 8px;
}


tr:nth-child(even) {background-color: #f2f2f2;}
</style>


<?php
$uid = $uname = $uemail =  $uadress = $udob = $ugender =  $uphnno = "";
?>
<CENTER>
<div> <br>
  <form action="../control/recrut.php" method="post"> 
 
  
    <label for="uname">Name: </label>
    <input type="text" id="uname" name="uname" id="uname" placeholder="Name.."
     value="<?php echo $uname;?>"/>
    
    <label for="uemail">Email: </label>
    <input type="text" id="uemail" name="uemail" id="uemail" placeholder="Email.." 
    value="<?php echo $uemail;?>"/>
    
    <br> <br>
    <label for="uphnno">Phone Number: </label>
    <input type="number" id="uphnno" name="uphnno" id="uphnno" placeholder="Contact Number..."
    value="<?php echo $uphnno;?>"/>
    <label for="ugender">Select Gender: </label> 
		<select id="ugender" name="ugender" >
  		<option value= <?php echo $ugender="Male";?>>Male</option>
 		<option value= <?php echo $ugender="Female";?>>Female</option>
  		<option value= <?php echo $ugender="Other";?>>Other</option>
		</select> <br> <br>
    Birthday: <input type="date" id="udob" name="udob" 
    placeholder="Date Of Birth" value = "<?php echo $udob; ?>"
    value="<?php echo $udob;?>"/>

<div> <br>
   <button type="submit" value="Submit"
    class="w3-button w3-black w3-padding-large w3-large ">
    Add</button> </div>
</form>
  
  
</div>

<center>
  <br>
<div>

<button onclick="Back()" 
class="w3-button w3-red w3-padding-large w3-large w3-center">
Back</button>

</div> 
           
</center> 






<script>
function Back() {
  location.replace("../control/AdminPanel.php")
}
</script>



<?php
include "../view/footer.php";                 
?>
</body>
</html>