
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
<?php
include "header2.php";                 
?>


</head>
<body>
    
<center>
  <br>
<div>
<button onclick="RegU()" class="w3-button w3-red w3-padding-large w3-large w3-center">View Registered Users</button>
<button onclick="ModU()" class="w3-button w3-red w3-padding-large w3-large w3-center">Modify Registered Users</button>
<button onclick="DelU()" class="w3-button w3-red w3-padding-large w3-large w3-center">Delete Registered Users</button>
<br><br>
<button onclick="addS()" class="w3-button w3-red w3-padding-large w3-large w3-center">Recruit Staff</button>
</div> 
           
</center>   

<script>
function RegU() {
  location.replace("../data/ReggedUsers.php")
}

function ModU() {
  location.replace("../data/modifyusers.php")
}
function DelU() {
  location.replace("../data/DeleteUsers.php")
}

function addS() {
  location.replace("../data/addS.php")
}
</script>
<?php
include "../view/footer.php";                 
?>
</body>
</html>