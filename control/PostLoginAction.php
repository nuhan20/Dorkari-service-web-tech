<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

include "../control/RegistrationAction.php";
?>
</head>
<body>
<form action="PostLoginAction.php" method="post" enctype="multipart/form-data">
		<h2>Welcome</h2>
        <br>

            <?php
				session_start();
				include 'conn.php';
				$uid= $_SESSION["uid"];
				$sql=mysqli_query($conn,"SELECT * FROM reg where uid='$uid' ");
				$row  = mysqli_fetch_array($sql);
            ?>
            
        
		<p class="hint-text"><br><b>Welcome </b>
        <?php echo $_SESSION["name"] ?></p>
        <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>
    </form>
</body>
</html>