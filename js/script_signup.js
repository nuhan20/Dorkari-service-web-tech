const container = document.querySelector(".container");
const signUpBtn = document.querySelector(".green-bg button");
const signinBtn = document.querySelector(".orange-bg button");

signUpBtn.addEventListener("click", () => {
  container.classList.toggle("change");
});

function check() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
    document.getElementById("alog").innerHTML="Sign In";
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
    document.getElementById("alog").innerHTML="Invalid";
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

