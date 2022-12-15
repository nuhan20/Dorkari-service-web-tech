<?php
include '../control/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$sl = $_POST["sl"];
$served =$_POST["served"];

// sql to update a record
$sql = "UPDATE orderlist SET served= '$served' WHERE orderno=$sl";
  
   

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: ../data/chkservice.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}
?>