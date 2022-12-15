<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
<?php
include "../control/header3.php"; 

$orderno = "";  
$served = "";              
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

<CENTER>
<div class="acc_info">
        <h3>Order Information</h3>
        <?php
include '../control/conn.php';
 // select or read data start
$sql = "SELECT orderno, name, email, phno, service, address, ptime, recomendation, served FROM orderlist";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Sl</th> <th>Name</th> <th>Email</th> <th>Phone Number</th> <th>Service</th><th>Address</th><th>Preffered Time</th><th>Problem Details</th><th>Served</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["orderno"]. "</td> 
         <td>" . $row["name"]. "</td>
         <td>" . $row["email"]. "</td>
         <td>" . $row["phno"]. "</td>
         <td>" . $row["service"]. "</td>
         <td>" . $row["address"]. "</td>  
         <td>" . $row["ptime"]. "</td>    
         <td>" . $row["recomendation"]. "</td> 
         <td>" . $row["served"]. "</td>
 


        </tr>";
       
    }
    echo "</table>";

  
  
} else {
    echo "0 results";
}
?>

<?php
$sl = $served =  "";
?>
<CENTER>
<div> <br>
  <form action="../control/serve.php" method="post"> 
  <input type="number" name="sl" id="sl" placeholder="Serial Number.."
  value="<?php echo $sl;?>"/>
  
    <label for="served">Comment: </label>
    <input type="text" id="served" name="served" id="served" placeholder="Served or Not.."
     value="<?php echo $served;?>"/>
    

   <button type="submit" value="Submit"
    class="w3-button w3-black w3-padding-large w3-large ">
    Update</button> 
</form>
</div>
</CENTER>



<div>

<form action="../data/chkservice.php" method="get">
  <button type="submit" 
  class="w3-button w3-red w3-padding-large w3-large w3-center">Refresh</button>
</form>
<br>
<form action="../control/StaffPanel.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-center">Back</button>
</form> </div>
<?php
include "../view/footer.php";                 
?>
</body>
</html>