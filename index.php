<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocSpot</title>
    
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
            font-size: 30px; 
            text-decoration: none;/* Change navbar brand text color */
        }

        .navbar-nav .nav-link {
            color: #333 !important; /* Navbar -> Home, about.. */
            padding: 0;
            margin: 0;
            display: flex;
            text-decoration: none;
            /* Change navbar links text color */
        }

        .nav-item {
            margin-right: 20px;
        }
        body {
            background-image: url('4077.jpg'); /* Add background image */
            background-size: 2300px;
            background-position: center;
        }
        /* Main Content */
        .main-content {
            background-image: url('bg2.jpg'); /* Add background image of the content */
            background-size: cover;
            background-position: center;
            padding: 30px;
            border-radius: 10px;
            margin-top: 20px; 
        }

        /* Text */
        h1, h2, h3, h4, h5, h6 {
            color: #333; /*welcome to docspot*/
        }

        p {
            color: #333; /* Change paragraph text color */
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
                <h1>Welcome to DocSpot</h1>
                <p>DocSpot revolutionizes healthcare access by offering a user-friendly platform 
                    where users can effortlessly find and book appointments with healthcare professionals online. 
                    From general practitioners to specialized experts, 
                    our extensive directory ensures you find the right match for your needs.</p>
                <p>With DocSpot, scheduling appointments becomes a breeze, 
                    freeing you from the hassles of traditional booking methods. 
                    Seamlessly navigate through our interface, select your preferred time slot, and confirm your appointment with ease. 
                    Experience the convenience of modern healthcare with DocSpot where quality care is just a click away.</p>
            </div>
        </div>
    </div>





















    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</body>

</html>
