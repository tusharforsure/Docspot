<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - DocSpot</title>
    <style>
        /* Navbar */
        .navbar {
            background-image: url('bg2.jpg'); /* Add background image */
            background-size: cover;
            background-position: center;
            padding: 2px;
            border-radius: 10px;
        }
        body {
            background-image: url('4077.jpg'); /* Add background image */
            background-size: 2500px;
            background-position: center;
        }
        /* Main Content */
        .main-content {
            background-image: url('bg2.jpg'); /* Add background image */
            background-size: cover;
            background-position: center;
            padding: 30px;
            border-radius: 10px;
            margin-top: 20px; /* Add margin to the top */
        }

        .navbar-brand {
            color: #ffffff !important;
            font-size: 30px; 
            text-decoration: none;/* Change navbar brand text color */
        }

        .navbar-nav .nav-link {
            color: #333 !important; /* Change navbar links text color */
        }

        .navbar-nav .nav-link:hover {
            color: #ffeb3b !important; /* Change navbar links text color on hover */
        }

        /* Text */
        h1, h2, h3, h4, h5, h6 {
            color: #3f51b5; /* Change heading text color */
        }

        p {
            color: #333; /* Change paragraph text color */
        }
        .navbar-nav .nav-link {
            text-decoration: none; /* Remove underline */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
<?php
  require 'navbar.php';
    ?>
    <!-- Main Content -->
    <div class="container mt-5 main-content">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Contact DocSpot</h1>
                <p>If you have any questions or need assistance, feel free to contact us using the information below:</p>
                <p>Email: info@Docspot@gmail.com</p>
            </div>
        </div>
    </div>










    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>

</html>
