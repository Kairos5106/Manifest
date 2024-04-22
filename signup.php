<?php include 'check_password.php'; 

$passwordsMatch = true; // Variable to track if passwords match, initialized to true

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["passwordConfirm"];

  // Validate passwords
  if (!validatePasswords($password, $confirmPassword)) {
    // Passwords do not match, set passwordsMatch variable to false
    $passwordsMatch = false;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet"> <!-- bootstrap icons -->

    <!-- Page title & icon -->
    <title>Manifest: Sign Up</title>
    <link rel="icon" href="./images/logo-24p.png" type="image/png"> <!-- logo needs to at least 32x32px or 16x16px-->
</head>
<body>

    <!-- Navigation bar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html"><img class="mx-2 mb-1" src="images/logo.png" width="30px" height="30px">Manifest</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;"></ul>
            <a class="btn btn-primary" href="./login.html" role="button"><i class="bi bi-door-open-fill"></i> Log in</a>
          </div>
      </div>
    </nav>

    <!-- Signup form -->
    <div class="container bg-light text-md-left p-4 my-5 rounded-3">
      <h1 class="display-5 fw-bold text-center">Create an account</h1>
      <form action="signup.php" method="post">
        <div class="container mt-4">
          <label for="username"><b>Username</b></label>
          <input type="text" id="username" placeholder="Your username" name="username">
          
          <label for="email"><b>Email</b></label>
          <input type="email" id="email" placeholder="Your Email" name="email" required>
          
          <label for="password"><b>Password</b></label>
          <input type="password" id="password" placeholder="Your Password" name="password" required>
          
          <label for="passwordConfirm"><b>Confirm Password</b></label>
          <input type="password" id="passwordConfirm" placeholder="Enter your password again" name="passwordConfirm" required>
          
          <label for="agreeTerms">
            <input type="checkbox" id="agreeTerms" name="agreeTerms"> 
            I agree to the <strong>Terms and Conditions</strong> of Manifest
          </label>
          
          <button type="submit" class="mt-4 btn-primary">Sign up</button>
        </div>
      </form>      
    </div>

   <!-- Copyright -->
   <div class="text-center">
    <p class="text-white"> Copyright @ 2024 All rights reserved by:
      <a href="#" style="text-decoration: none;">
        <strong class="text-warning">Manifest Incorporated</strong>
      </a>
    </p>
  </div>
</body>
</html>