function validateForm() {

  // Name Validation
  
  let x = document.forms["signup"]["username"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
    
  }
  
  // email validation
  var emailval=document.forms["signup"]["useremail"].value;
  var pattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(emailval ==""){
    alert("Email must be filled out");
    return false;
  }
  else{
  if(emailval.match(pattern)){
     
  
    if(nameExists2())
    {
      return true;
    }
  
  }
  else{
  
    alert("Invalid email format");
  
    return false;
  
  }
  }
  //password valid
  let passchk=document.forms["signup"]["psw"].value;
  if (passchk == ""){
    alert("Password must be filled out");
    return false; 
  }
  
  
  }
  function passchk()
  {
    let passchk=document.forms["signup"]["psw"].value;
    if (passchk == ""){
        alert("Password must be filled out");
        return false; 
    }
  }

  
  function validate() {
    var $valid = true;
    // document.getElementById("user_info").innerHTML = "";
   // document.getElementById("password_info").innerHTML = "";
    
    var userName = document.getElementById("user_name").value;
    var password = document.getElementById("password").value;
    if(userName == "") 
    {
      alert("Email is required for log in");
       // document.getElementById("user_info").innerHTML = "required";
      $valid = false;
    }
    if(password == "") 
    {
      alert("Password is required for log in");
    //  document.getElementById("password_info").innerHTML = "required";
        $valid = false;
    }
    return $valid;
}

	
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});