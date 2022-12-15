
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Sign In</title>
    <link rel="stylesheet" href="../css/signup_style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
 
  </head>
  <body>
    <div class="container">
      <div class="form-wrapper">
        <div class="banner">
          <h1>Hello, Admin!</h1>
          <p>Welcome back on track</p>
        </div>
        
        <div class="green-bg">
        
          <button type="button">Sign In</button>
          
        </div>
       
        <form class="signup-form" action="../control/AdminPanel.php"
		 method="post" id="adminlog" onSubmit="return validate();">
          <h1>Login here</h1>
          
          <p>Use valid credentials to proceed</p>

          <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="text" placeholder="Username" id="auser" name="auser" required />
          </div> <br>
          <div class="input-group">
            <i class="fas fa-lock"></i>
            <input name="pin" id="pin" type="password" placeholder="Pin" required  /> 
          </div>  
          
          <span id='message'></span> <br>

          <button type="submit" id="submit" value="submit">Sign In</button>
        </form>
        
      </div>
      
    </div>    

    <script src="../js/script_signup.js">

    </script>
  </body>
</html>
