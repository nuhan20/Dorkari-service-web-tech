
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

<?php
include 'conn.php';
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
// insert start

$uname = $_POST['uname'];
$uemail = $_POST['uemail'];
$uadress = $_POST['uadress'];
$ptime = $_POST['ptime'];
$service = $_POST['service'];
$comments = $_POST['comments'];
$uphnno = $_POST['uphnno'];



$sql = "INSERT INTO orderlist (name, email, phno, service, address, ptime,recomendation)
VALUES ('$uname', '$uemail', '$uphnno','$service','$uadress','$ptime','$comments')";

if ($conn->query($sql) === TRUE) {
  
  print "<center><h2>Order Placed!</h2></center>";  
  // select or read data start 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
// insert end
$conn->close();
}
?>
</head>

</head>
<body>
<?php
header("refresh:7;url=../view/index.php");

?>
<center>
   <h2>You are being redirected to <a href="../view/index.php">Homepage</a></h2> 
    <br>

    </center>
<?php
include "../view/footer.php";                 
?>
</body>
</html>