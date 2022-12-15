


<?php

include "../control/RegistrationAction.php";

session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'conn.php';
    $sql=mysqli_query($conn,"SELECT * FROM reg where email='$email' and password='$psw'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["uid"] = $row['uid'];
        $_SESSION["name"] = $row['name'];
        $_SESSION["email"] = $row['email'];
        $_SESSION["gender"]=$row['gender'];
        $_SESSION["phno"]=$row['phno'];
        $_SESSION["dob"]=$row['dob']; 
        header("Location: ../control/PostLoginAction.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>