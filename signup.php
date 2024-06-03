<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(empty($_POST["fname"])){
       $errfname = "Name is required";
   }
   else{
       $fname = enterdata($_POST["fname"]);

       if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
           $errfname = "Only letters and white space allowed";
         }
   }

   if(empty($_POST["lname"])){
    $errlname = "LastName is required";
}
else{
    $lname = enterdata($_POST["lname"]);

    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
        $errlname = "Only letters and white space allowed";
      }
} 

if(empty($_POST["mail"])){
    $errlmail = "mail is required";
}
else{
    $mail = enterdata($_POST["mail"]);

} 
if(empty($_POST["phone"])){
    $errphone = "please enter phone number";
}
else{    
    $phone = enterdata($_POST["phone"]);
}

   if(empty($_POST["userpassword"])){
       $errpassword = "password is required";
   }
   else{
       $userpassword = enterdata($_POST["userpassword"]);
   }

   if(empty($_POST["userpasswordconfirm"])){
    $erruserpasswordconfirm = "password is required";
}
else{
    $userpasswordconfirm = enterdata($_POST["userpasswordconfirm"]);
}

   if(empty($_POST["dob"])){
    $errdob = "please enter date";
   }
   else{
    $dob = enterdata($_POST["dob"]);
   }

    if(empty($_POST["role"])){
        $errrole = "please select any one";
        $role=null;
    }
    else{
     $role = enterdata($_POST["role"]);
    }

    if($role=="admin"){
        if(empty($_POST["adminpassword"])){
            $erradminpassword = "please enter admin password";
        }
        else{
            $adminpassword = enterdata($_POST["adminpassword"]);
        }
    }
}
function enterdata($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#06aa5e">
    <meta name="msapplication-navbutton-color" content="#06aa5e">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>Sign up | Benavolence Hospital</title>

   
    <style>
        
    * {
        margin: 0;
        padding: 0;
        scroll-behavior: smooth;
        font-family: 'Poppins', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    body {
        overflow: hidden;
        background-color:aqua;
    }

    .card-container {
        display: grid;
        grid-template-columns: calc(100% - 60%) auto;
        height: 100vh;
        width: 100%;
        overflow: hidden;
        background-color: #1d2b3a;
    }

   
    .form-container {
        width: 50vw;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 45px;
        padding: 50px;
        color: rgba(255, 255, 255, .5);
    }
    

    .form-header {
        grid-column: 1 / -1;
        letter-spacing: .06em;
        margin-bottom: 30px;
        font-size: 40px;
        color: white;
    }

    input {
        display: block;
        border-radius: 4px;
        border: 0;
        border-bottom: 1px solid rgb(0,0,0,.4);
        padding: 6px 6px 6px 10px;
        margin-top: 5px;
        background-color: rgba(255, 255, 255, 0);
        transition: all .5s ease-in;
        color: rgba(255, 255, 255, .8);
    }
    

    input::placeholder{
        content: none;
    }
   
.radio-group {
  display: flex;
  gap: 20px; 
}

.radio-option {
  display: flex;
  align-items: center;
}


    span {
        letter-spacing: .05em;
        text-transform: uppercase;
        font-size: 15px;
        transition: all .4s;
    }

    [type="submit"]{
        border: 0;
        background-color:aqua;
        color: white;
        padding: 10px 50px;
        letter-spacing: .05em;
        border-radius: 5px;
        margin-top: 20px;
        font-size: 17px;
        outline: none;
    }

    form {
        width: auto;
        display: grid;
        place-items: center;
    }

    .btm-text {
        margin-top: 15px;
        font-size: 14px;
    }

    .btm-text-highlighted {
        color:aqua;
    }

    .input-container {
        position: relative;
    }

    span:not(.btm-text-highlighted) {
        position: absolute;
        left: 0;
        top: 0;
        padding: 10px;
        pointer-events: none;
    }

    
    input:focus ~ span,
    input:valid ~ span{
        font-size: 10px;
        transform: translateX(4px) translateY(-7px);
        font-size: 0.80em;
        padding: 0 6px;
        color:aquamarine;
        background-color:aqua;
        color: white;
        border-radius: 2px;
    }

    input:focus,
    input:focus-visible {
        border: 1px solid  aquamarine;
        box-shadow: 0 0 5px rgb(0,0,0,.3);
        outline: none;
    }

    input:valid {
        border: 1px solid aquamarine; 
    }

 
    .error {
        color: rgb(255, 51, 51);
        font-family: sans-serif;
        font-weight: 500;
        text-transform: none;
        overflow: hidden;
        margin-top: 4px;
    }

    .image-container{
        display: grid;
        place-items: center;
        background-color:aqua;
        color: white;
    }

    .image-container > img {
        width: calc(90%);
    }

    .company, 
    .image-container > .quote {
            width: 100%;
            height: 100%;
            text-align: center;
            font-size: 19px;
    }

    .company {
        font-size: 34px;
        text-align: left;
        height: 70px;
        align-self: flex-start;
        padding: 2% 0 0 5%;
    }

    .outro-overlay > .company{
        position: absolute;
        top: 0;
    }

    .mobile-btm-nav {
        display: none;
    }

  
    .mobile-btm-nav {
        text-decoration: none;
        display: none;
    }

    .mobile-btm-nav > img {
        transform: scale(.3) rotateZ(180deg);
    }

   
    .outro-overlay {
        display: flex;
        background-color:aqua;
        height: 100vh;
        width: 100%;
        z-index: 0;
        overflow: hidden;
        align-items: center;
        justify-content: space-evenly;
        color: white;
        position: relative;
    }

    .outro-overlay > #signedUp-illustration {
        height: 90%;
        z-index: 2;
    }

    .outro-overlay > .shape {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        animation: 1.3s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideRight;
        width: 150%;
    }

    .outro-overlay > .outro-greeting {
        z-index: 3;
        font-weight: 700;
        letter-spacing: .02em;
        word-spacing: .1em;
    }

    .disabled {
        display: none ;
    }

    .slideUp-animation {
        animation: 1.3s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideUp;animation-delay: 0s;
    } 

    .slideRight-animation {
        animation: 1.3s 1 forwards cubic-bezier(.36,-0.01,.5,1.38) slideRight;animation-delay: 0s;
    }

    @keyframes slideUp {  
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: inherit;  }    
    }                    

    @keyframes slideRight {              
        0% { opacity: 0; transform: translateX(30px); }                
        100% { opacity: 1; transform: translateX(0);   }
    }

  
    .author-link{
        position: fixed;
        bottom: 0;
        padding-bottom: 10px;
        z-index: 5;
    }

    .author-link,
    a {
        text-decoration: none;
        color: var(--light-grey);
        transition: .3s ease-out;
    }

    .author-link > a:hover {
        color:#1d2b3a;
    }

    @media only screen and (max-width: 540px) {
     
        body {
            width: 100%;
            overflow: visible;
        }

        .image-container > [class] {
            transform: scale(1);
        }

        .quote {
            margin-top: -50px;
        }

        .card-container {
            grid-template-rows: 100vh minmax(100vh, auto);
            grid-template-columns: none;
            overflow: hidden;
            height: auto;
        }

        .image-container {
            width: 100%;
            position: relative;
        }

        .image-container > img {
            width: calc(110%);
        }

        .error {
            font-size: 13px;
        }

        .form-container {
            display: grid;
            place-items: center ;
            grid-template-columns: none;
            grid-template-rows: none;
            gap: 20px;
            width: 100%;
            gap: 45px;
            padding: 0;
            color: rgba(255, 255, 255, .5);
        }

        .mobile-btm-nav {
            display: block;
            position: absolute;
            bottom: 0;
            display: block;
            animation: float 1s cubic-bezier(0.59, 0.575, 0.565, 1) infinite;
        }

        form {
            padding: 50px;
            display: flex;
            align-items: center;
        }

        .outro-overlay {
            flex-direction: column;
            justify-content: center;
            gap: 30px;
        }

        .outro-overlay > #signedUp-illustration {
            height: auto;
            z-index: 2; 
        }

        .outro-overlay > .shape {
            display: none;
        }

        .outro-overlay > .outro-greeting {
            font-size: 20px;
            order: 1;
        }
    }
    </style>
</head>
<body>
    <main class="card-container slideUp-animation">
        <div class="image-container">
            <h1 class="company">BENOVOLENCE HOSPITAL<sup style="color: red;">+</sup></h1>
            <img src="https://cdni.iconscout.com/illustration/free/thumb/hospital-reception-3985624-3307847.png" class="illustration" alt="">
            <p class="quote">We Value life over money!!</p>
            <a href="#btm" class="mobile-btm-nav">
                <img src="./assets/images/dbl-arrow.png" alt="">
            </a>
        </div>
        
           
        
        
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-container slideRight-animation">
                <h1 class="form-header">Get started</h1>
                <div class="input-container">
                    <label for="f-name"></label>
                    <input type="text" name="fname" id="f-name" required>
                    <span>First name</span>
                    <div class="error"></div>
                </div>
                <div class="input-container">
                    <label for="l-name"></label>
                    <input type="text" name="lname" id="l-name" required>
                    <span>
                        Last name
                    </span>
                    <div class="error"></div>
                </div>
    
                <div class="input-container">
                    <label for="mail">
                    </label>
                    <input type="email" name="mail" id="mail" required>
                    <span>
                        E-mail
                    </span>
                    <div class="error"></div>
                </div>
    
                <div class="input-container">
                    <label for="phone">
                    </label>
                    <input type="tel" name="phone" id="phone" required>
                    <span>Phone</span>
                    <div class="error"></div>
                </div>
    
                <div class="input-container">
                    <label for="user-password"></label>
                    <input type="password" name="userpassword" id="user-password" class="user-password" required>
                    <span>Password</span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="user-password-confirm"></label>
                    <input type="password" name="userpasswordconfirm" id="user-password-confirm" class="password-confirmation" required>
                    <span>
                        Confirm Password
                    </span>
                    <div class="error"></div>
                </div>
                <div class="input-container">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" id="dob" required>
                    <div class="error"></div>
                  </div>
                  
                 
                  
                  
                  <div class="input-container" id="adminPasswordContainer" style="display: none;">
                    <label for="adminPassword">Admin Password</label>
                    <input type="password" id="adminPassword" name="adminPassword">
                  </div>
                  
                  
                  
                  
                <div id="btm">
                    <button type="submit" class="btn">Create Account</button>
                    <p class="btm-text">
                        Already have an account..? <span class="btm-text-highlighted"> <a href="login.php" >Login</a></span>
                    </p>
                </div>
            </div>
        </form>
 
    </main>
   

    <script>
    const submitBtn = document.querySelector('.submit-btn'),
    phone = document.querySelector('#phone'),
    password = document.querySelector('#user-password'),
    passwordConfirm = document.querySelector('#user-password-confirm'),
    email = document.querySelector('#mail'),
    errorDisplayers = document.getElementsByClassName('error'),
    inputFields = document.querySelectorAll('input'),
    cardContainer = document.querySelector('.card-container'),
    outroOverlay = document.querySelector('.outro-overlay')

let count = 2

function onValidation(current ,messageString, booleanTest){
  let message = current
  message.textContent = messageString
  booleanTest != 0 ? ++count : count
}

for(let i=0; i<inputFields.length; i++){
  let currentInputField = inputFields[i]
  let currentErrorDisplayer = errorDisplayers[i]

  currentInputField.addEventListener('keyup', (e)=>{
      let message = currentErrorDisplayer
      e.target.value != "" ? onValidation(currentErrorDisplayer, '', 0) : onValidation(currentErrorDisplayer, '*This field is Required', 0)
  })
}

phone.addEventListener('keyup', (e)=>{
  let message = errorDisplayers[3]
  e.target.value == e.target.value.replace(/\D/g,'') ? onValidation(message, '', 1) : onValidation(message, '*Please enter valid number', 0)
})

email.addEventListener('keyup', (e)=>{
  let message = errorDisplayers[2]
  mail.value.includes('@') & mail.value.includes('.com') ? onValidation(message, '', 1) : onValidation(message, '*Please provide a valid Email', 0)
})

password.addEventListener('keyup', (e)=>{
  let message = errorDisplayers[4]
  password.value.length >= 8 ? onValidation(message, '', 1) :  onValidation(message, 'Password requires minimum 8 charecters', 0)
})

passwordConfirm.addEventListener('keyup', (e)=>{
  let message = errorDisplayers[5]
  password.value === e.target.value ? onValidation(message, '', 1) : onValidation(message, '*Password did not match', 0)
})

submitBtn.addEventListener('click', (e)=>{
  e.preventDefault()
  if(count > 5){
      cardContainer.style.display = 'none'
      outroOverlay.classList.remove('disabled')
  }
  else{
      for(let i=0; i<errorDisplayers.length; i++){
          errorDisplayers[i].textContent = '*This field is Required'
      }
  }
})
password.addEventListener('keyup', (e) => {
  let message = errorDisplayers[4];
  let passwordValue = password.value;

  const hasMinimumLength = passwordValue.length >= 8;
  const hasSymbol = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(passwordValue);
  const hasUppercase = /[A-Z]/.test(passwordValue);

  if (hasMinimumLength && hasSymbol && hasUppercase) {
    onValidation(message, '', 1);
  } else {
    let errorMessage = 'Password must meet the following criteria:\n';
    if (!hasMinimumLength) {
      errorMessage += '- Minimum 8 characters\n';
    }
    if (!hasSymbol) {
      errorMessage += '- At least one symbol\n';
    }
    if (!hasUppercase) {
      errorMessage += '- At least one uppercase letter\n';
    }

    onValidation(message, errorMessage, 0);
  }
});

const dateInput = document.getElementById('dob');

const currentDate = new Date();

dateInput.setAttribute('max', currentDate.toISOString().split('T')[0]);

const roleRadio = document.querySelectorAll('input[name="role"]');
const adminPasswordContainer = document.getElementById('adminPasswordContainer');

function toggleAdminPasswordField() {
  if (roleRadio[1].checked) { 
    adminPasswordContainer.style.display = 'block';
  } else {
    adminPasswordContainer.style.display = 'none';
  }
}

roleRadio.forEach((radio) => {
  radio.addEventListener('change', toggleAdminPasswordField);
});

toggleAdminPasswordField();
document.addEventListener('DOMContentLoaded', function() {
  const scrollDownButton = document.getElementById('scrollDownButton');

  scrollDownButton.addEventListener('click', function() {
   
    const viewportHeight = window.innerHeight;

    
    window.scrollBy(0, viewportHeight);

  
  });
});

let isAdminPasswordCorrect = false;
const adminPassword = 'nurshospital@123';

const adminPasswordInput = document.querySelector('#adminPassword');
const form = document.querySelector('form');

function checkAdminPassword() {
    const enteredPassword = adminPasswordInput.value;
    if (enteredPassword === adminPassword) {
        onValidation(adminPasswordInput.nextElementSibling, '', 1);
        isAdminPasswordCorrect = true;
    } else {
        onValidation(adminPasswordInput.nextElementSibling, 'Wrong admin password', 0);
        isAdminPasswordCorrect = false;
    }
}

adminPasswordInput.addEventListener('keyup', checkAdminPassword);

form.addEventListener('submit', function (e) {
    if (document.querySelector('input[name="role"]:checked').value === 'admin' && !isAdminPasswordCorrect) {
        e.preventDefault();
        alert('Admin password is incorrect. Submission blocked.');
    }
});
    </script>
<?php

$SERVERNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="rajeev";

$conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);
     if(!$conn){
        die("sorry the connection failed :".mysqli_connect_error());
      }
      else{ 
      $sql="INSERT INTO `registration` (`sno`, `firstname`, `lastname`, `email`, `phone`, `userpassword`, `userpasswordconfirm`, `dateofbirth`) VALUES (null, '$fname', '$lname', '$mail', '$phone', '$userpassword', '$userpasswordconfirm', '$dob');";
      
      $result=mysqli_query($conn,$sql);
    }
     


?>
