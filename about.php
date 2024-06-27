<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - TeleDoc</title>

    <link rel="stylesheet" href="css/about.css">
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
            background-size: 2300px;
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
        .navbar-nav .nav-link {
            text-decoration: none; /* Remove underline */
            color: #333 !important; /* Navbar -> Home, about.. */
        }
        .navbar-brand {
            color: #ffffff !important;
            font-size: 30px; 
            text-decoration: none;/* Change navbar brand text color */
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
                <h1>About DocSpot</h1>
                <p>"DocSpot streamlines the process of finding and scheduling appointments with healthcare professionals online. 
                    Our platform offers a seamless experience, 
                    allowing you to efficiently search for doctors 
                    tailored to your requirements and book appointments hassle-free.</p>

                   <p> With DocSpot, accessing quality healthcare is simplified. 
                    Say goodbye to the complexities of traditional appointment booking and 
                    hello to a user-friendly interface designed to meet your healthcare needs effortlessly.
                    hassle.</p>
            </div>
        </div>
    </div>













    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
