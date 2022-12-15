<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
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
        <h3>Users Information for Deletation</h3>
        <?php
include '../control/conn.php';
 // select or read data start
$sql = "SELECT uid, name, email, phno, gender, dob FROM reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Unique ID</th> <th>Name</th> <th>Email</th> <th>Phone Number</th> <th>Gender</th><th>Date of Birth</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["uid"]. "</td> 
         <td>" . $row["name"]. "</td>
         <td>" . $row["email"]. "</td>
         <td>" . $row["phno"]. "</td>
         <td>" . $row["gender"]. "</td>
         <td>" . $row["dob"]. "</td>     


        </tr>";
       
    }
    echo "</table>";

  
  
} else {
    echo "0 results";
}



?>
<br>
<form name = "delete" method="post" action="">
  Enter Unique ID: <input type="number" name="uid">
  <input type="submit" name="submitDelete" value="Delete">
</form><br><br>

<?php
include '../control/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $uid = $_POST["uid"];
// sql to delete a record
$sql = "DELETE FROM reg WHERE uid= $uid";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  //header("Location: data.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}

?>

<center>
  <br>
<div>


<form action="../data/DeleteUsers.php" method="get">
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