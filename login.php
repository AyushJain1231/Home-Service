
<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: HomeServiceApp.php");
    exit;
}
require_once "config.php";
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'login1');

// // Try connecting to the Database
// $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// //Check the connection
// if($conn == false){
//     dir('Error: Cannot connect');
// }


$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: HomeServiceApp.php");
                            
                        }
                    }

                }

    }
}    


}


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php include "links.php"  ?>
    <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Login/Sign Up</title>
  </head>
  <body>
  	
  	<br>
  	<br>
    <br>
    <br>
    <div class="container " id="container">
<div class="form-container sign-up-container">

<form action="register.php" method="post">
  <h1>Create Account</h1>
  <div class="social-container">
    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
    <a href="#" class="social"><i class="fa fa-google"></i></a>
    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
  </div>
  <span>or use your email for registration</span>
  <input type="text" name="username" placeholder="Name">
  <input type="email" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">
  <input type="password" name="confirm_password" placeholder="Password">
  <button type="submit" >SignUp</button>
</form>
</div>
<div class="form-container sign-in-container">
  <form action="" method="post">
    <h1>Sign In</h1>
    <div class="social-container">
    <a href="#" class="social"><i class="fa fa-facebook"></i></a>
    <a href="#" class="social"><i class="fa fa-google"></i></a>
    <a href="#" class="social"><i class="fa fa-linkedin"></i></a>
  </div>
  <span>or use your account</span>
  <input type="text" name="username" placeholder="Name">
  <input type="password" name="password" placeholder="Password">
  <a href="#">Forgot Your Password</a>

  <button type="submit" >Sign In</button>
  </form>
</div>
<div class="overlay-container">
  <div class="overlay">
    <div class="overlay-panel overlay-left">
      <h1>"HOME SERVICES FOR YOURS"</h1>
      <p>To keep connected with us please login with your personal info</p>
      <button class="ghost" id="signIn">Sign In</button>
    </div>
    <div class="overlay-panel overlay-right">
      <h1><img src="IMG/lo1.png" style="height: 150px;"></h1>
      <h1>Welcome To HomeService App</h1>
      <p>Enter your details and start home services.</p>
      <button class="ghost" id="signUp">Sign Up</button>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">
  const signUpButton = document.getElementById('signUp');
  const signInButton = document.getElementById('signIn');
  const container = document.getElementById('container');

  signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
  });
  signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
  });
</script>
 
 <br>
 <br>
 <h3><b>----Only provider register here.----<b></h3>
 <br>
  <div>
<center>
<a href="providerform.php" ><button style="background-color: dimgray; border-color: whitesmoke;" > Provider Details </button></a>
</center>
</div>


  <!-- data-toggle="modal" data-target="#loginModal"
   -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
