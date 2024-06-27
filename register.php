<?php
session_start();
?>

<!-- TODO #3 add autologin to profile upon registration @PrashantaSarker -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - DocSpot</title>

    <!-- Custom CSS -->
    <style>
        /* Navbar */
        .navbar {
            background-image: url('bg2.jpg'); /* Add background image */
            background-size: cover;
            background-position: center;
            padding: 2px;
            border-radius: 10px;
        }

        .navbar-brand {
            color: #ffffff !important;
            font-size: 100px; 
            text-decoration: none;/* Change navbar brand text color */
        }

        .navbar-nav .nav-link {
            color: #333 !important; /* Change navbar links text color */
        }

        /* Main Content */
        .container {
            margin-top: 20px;
        }

        h2 {
            color: #3f51b5; /* Change heading text color */
        }

        p {
            color: #333; /* Change paragraph text color */
        }
        .navbar-nav .nav-link {
            text-decoration: none; /* Remove underline */
        }
        body {
            background-image: url('4077.jpg'); /* Add background image */
            background-size: 2500px;
            background-position: center;
        }
        .main-content {
            background-image: url('bg2.jpg'); /* Add background image */
            background-size: cover;
            background-position: center;
            padding: 30px;
            border-radius: 10px;
            margin-top: 20px; /* Add margin to the top */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
  <?php
  require 'navbar.php';
    ?>
    <div class="container">
        <h2>Register</h2>
        <form action="process_register.php" method="post" id="registerForm">
            <div class="form-group">
                <label for="username">Username</label>
                <input required type="text" class="form-control check_username" id="username" name="username">
                <div id="UserValidity"><small class="error_username" ></small></div>
            </div>
            <div class="form-group">
                <br><label for="email">Email</label>
                <input required type="email" class="form-control check_email" id="email" name="email">  
                <div id="emailValidity"><small class="error_mail" ></small></div> <!-- Display email validity message here -->
            </div>
            <div class="form-group">
                <br><label for="password">Password</label>
                <div class="input-group">
                    <input required type="password" class="form-control" id="password" name="password">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="togglePasswordVisibility"><i class="bi bi-eye"></i></button>
                    </div>
                </div>
                
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input required type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                <div id="passwordMatch"></div>
            </div>
            <button type="submit" class="btn btn-primary" id="registerBtn" name="signup">Register</button>
        </form>
        <p>Already Registered! <a href="login.php">Log In Here!</a></p>
    </div>

    

    <script src="scripts/mail.js"></script>
    <script src="scripts/register.js"></script>





























    


   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>
