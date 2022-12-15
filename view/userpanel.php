
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
<?php
include "header3.php";                 
?>


</head>
<body>
    

<CENTER>
<div class="acc_info">
        <h3>Account Information</h3>
        <?php
include '../control/conn.php';
 // select or read data start
$sql = "SELECT uid, name, email, phno, gender, dob FROM reg
ORDER BY uid DESC
LIMIT 1";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
  //  echo "<table><tr> <th>Unique ID</th> <th>Name</th> <th>Email</th> <th>Phone Number</th> <th>Gender</th><th>Date of Birth</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

    echo "Name: ".$row["name"]."<br>";
    echo "Email: ".$row["email"]."<br>";
    echo "Gender: ".$row["gender"]."<br>";
    echo "Phone Number: ".$row["phno"]."<br>";
    echo "Date of Birth: ".$row["dob"]."<br>";
       
    }


} else {
    echo "0 results";
}

?>
    </div> </CENTER>
    <br>
<div> <center>
    <form action="../view/comingsoon.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-center">Get a Service</button>
</form>

</center></div>
<script>
function RegU() {
  location.replace("../data/ReggedUsers.php")
}


</script>
<?php
include "../view/footer.php";                 
?>
</body>
</html>