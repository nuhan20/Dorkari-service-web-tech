<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registerd Users</title>
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

<CENTER>
<div class="acc_info">
        <h3>Users Information</h3>
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



?>
<div>
<form action="../control/AdminPanel.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-center">Back</button>
</form> </div>
<?php
include "../view/footer.php";                 
?>
</body>
</html>