
           <?php

           session_start();
           if(isset($_POST['submit'])){
             //store the session data
           $_SESSION['auser'] = $_POST['auser'];
           $_SESSION['pin'] = $_POST['pin'];          
           }

           echo "Log out successful";

           session_unset();
           session_destroy();

          header("refresh:2;url=../view/index.php");

         ?>