<?php
setcookie("mycokie","hello")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
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
<?php
include "../control/RegistrationAction.php";              
?>
    <style>


@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
}

body {
	background: #f6f5f7;
	
	justify-content: center;
	
	flex-direction: column;	
	height: 200vh;
	
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}



button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 20px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 800px;
	max-width: 100%;
	min-height: 620px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}
.error {color: #DDDDDD;}
    </style>

</head>

<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
	<form name="signup" action ="../control/PostRegistrationAction.php" onsubmit="return validateForm()" method="post"  enctype="multipart/form-data">
	<h1>Create Account</h1>		
	<div class="social-container">
				<a href="https://www.facebook.com/ak4ash" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.google.com" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://github.com/akashasmaul" class="social"><i class="fab fa-github"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name *" name ="username" id ="username"value="<?php echo $name;?>"/>
			<input type="email" placeholder="Email *"  name ="useremail" id="useremail" value="<?php echo $useremail;?>"/>
			<input type="password" placeholder="Password *" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
			value="<?php echo $psw;?>"/>
			<?php include "../control/PasswordAction.php";?>
			<input type="number" placeholder="Phone Number" name = "phno" id= "phno" value="<?php echo $phno;?>"/>
			<input type="date" id="dob" name="dob" placeholder="Date Of Birth" value = "<?php echo $dob; ?>"/>
	<div align="left"> 
		<label for="gender">Select Gender: </label> 
		<select id="gender" name="gender" >
  		<option value= <?php echo $gender="Male";?>>Male</option>
 		<option value= <?php echo $gender="Female";?>>Female</option>
  		<option value= <?php echo $gender="Other";?>>Other</option>
		</select> 
		<span class="error">* </span>
	</div>
			
			<span class="error">* required field</span> <br>
			<button type="submit" id="submit" value="Submit">Sign Up</button>
		</form>
		
	</div>
	<div class="form-container sign-in-container">
		<form action="../view/userpanel.php"
		 method="post" id="frmLogin" onSubmit="return validate();">
			<h1>Sign in</h1>
			<div class="social-container">
			<a href="https://www.facebook.com/ak4ash" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.google.com" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://github.com/akashasmaul" class="social"><i class="fab fa-github"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="user_name" id="user_name" />
			<input type="password" placeholder="Password" name="password" id="password" />
			<a href="#">Forgot your password?</a> <br>
			
			<button type="submit" name="login" value="Login" >Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, There!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<script src="../js/regval.js"></script>
</body>
</html>