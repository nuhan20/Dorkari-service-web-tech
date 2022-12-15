
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Panel</title>
<?php
include "header3.php";                 
?>


</head>
<body>
    
<center>
  <br>
<div>
<button onclick="RegU()" class="w3-button w3-red w3-padding-large w3-large w3-center">View Orders</button>
<button onclick="ModU()" class="w3-button w3-red w3-padding-large w3-large w3-center">Check Services</button>

</div> 
           
</center>   

<script>
function RegU() {
  location.replace("../data/ViewOrder.php")
}

function ModU() {
  location.replace("../data/chkservice.php")
}
</script>
<?php
include "../view/footer.php";                 
?>
</body>
</html>