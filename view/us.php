<!doctype html>
<html lang="en">
<head>
<title>About US</title>
<?php                 
include "header.php";                
?>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}


tr:nth-child(even) {background-color: #f2f2f2;}
</style>




</head>
<body>
    <center><h2>Contributers</h2> </center>
    <center>
<table style="width:50%">
  <tr>
    <th>Name</th>
    <th>ID</th>
  </tr>
  <tr>
    <td><a href="https://github.com/akashasmaul">Asmaul Hossain Akash</a></td>
    <td>20-44209-3</td>
  </tr>
  <tr>
    <td>Nuhan Ahmed Digonto</td>
    <td>20-43068-1</td>
  </tr>
  <tr>
    <td>Anonnya Sarkar</td>
    <td>20-42600-1</td>
  </tr>
  <td>Mst. Zannatul Ferdous Sumi</td>
    <td>20-43007-1</td>
  </tr>
</table>
</center>

<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="homeappliances">
  
    <div class="w3-half">
    <a href="https://github.com/akashasmaul">
      <img src="../images/akash.png">
      <h3>20-44209-3</h3>            
      </a><p>Invictus 🎧💻 Maneo</p></div>    

    <div class="w3-half">
    <a href="https://github.com/nuhan20">
    <img src="../images/nuhan.png">
    <h3>20-43068-1</h3> </a>
      <p>C++ Java C# Python</p>
    </div>

    <div class="w3-half">
    <a href="https://www.facebook.com/barsha.sarkar.144">
    <img src="../images/anu.png">
    <h3>20-42600-1</h3> </a>
      <p></p>
    </div>

    <div class="w3-half">
    <a href="https://facebook.com/zannatul.ferdoussumi.16">
    <img src="../images/sumi.png">
    <h3>20-43007-1</h3> </a>
      <p></p>
    </div>

    <form action="../view/index.php" method="get">
  <button type="submit" class="w3-button w3-red w3-padding-large w3-large w3-center">Go Back</button>
</form> 
<?php
include "footer.php";                
?>
</body>
</html>
