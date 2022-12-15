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
  <form action="../control/update.php" method="post"> 
  <input type="number" name="uid" id="uid" placeholder="Unique ID.."
  value="<?php echo $uid;?>"/>
  
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
    <br> <br>
   Adress: <input type="text" id="uadress" name="uadress" placeholder="Address.."
   value="<?php echo $uadress;?>"/>
<div> <br>
   <button type="submit" value="Submit"
    class="w3-button w3-black w3-padding-large w3-large ">
    Update</button> </div>
</form>
  
  
</div>


<div class="acc_info">
        <h3>Users Information for Modification</h3>
 <?php
include '../control/conn.php';
 // select or read data start
$sql = "SELECT uid, name, email, phno, gender, dob, address FROM reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Unique ID</th> <th>Name</th> <th>Email</th> <th>Phone Number</th> <th>Gender</th><th>Date of Birth</th><th>Address</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["uid"]. "</td> 
         <td>" . $row["name"]. "</td>
         <td>" . $row["email"]. "</td>
         <td>" . $row["phno"]. "</td>
         <td>" . $row["gender"]. "</td>
         <td>" . $row["dob"]. "</td> 
         <td>" . $row["address"]. "</td>    


        </tr>";
       
    }
    echo "</table>";

  
  
} else {
    echo "0 results";
}
?> </div> </center>
<center>
  <br>
<div>
<form action="../data/modifyusers.php" method="get">
  <button type="submit" 
  class="w3-button w3-red w3-padding-large w3-large w3-center">Refresh</button>
</form>
<br> 
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