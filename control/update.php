<?php
include '../control/conn.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$uid = $_POST["uid"];
$uadress =$_POST["uadress"];
$uname = $_POST["uname"];
$uemail = $_POST["uemail"];
$udob = $_POST["udob"];
$ugender = $_POST["ugender"];
$uphnno = $_POST["uphnno"];
// sql to update a record
$sql = "UPDATE reg SET name= '$uname', email = '$uemail',
 phno = '$uphnno', gender = '$ugender', dob = '$udob',
 address='$uadress' WHERE uid=$uid";
  
   

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header("Location: ../data/modifyusers.php");

} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
  

}
?>