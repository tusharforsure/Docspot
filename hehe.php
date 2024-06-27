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
        body {
            background-image: url('4077.jpg'); /* Add background image */
            background-size: 2300px;
            background-position: center;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            display: flex;
            align-items: center;
            padding: 10px 20px;
            background: linear-gradient(to right, #3b5998, #1e90ff, #b0e0e6);
            border-radius: 10px;
        }

        .navbar .logo {
            font-size: 24px;
            color: white;
            font-weight: bold;
            margin-right: auto;
            text-decoration: none;
        }

        .navbar a {
            color: black;
            text-decoration: none;
            padding: 10px 15px;
            transition: color 0.3s;
        }

        .navbar a:hover {
            color: #1e90ff;
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
    <div class="navbar">
        <a href="#" class="logo">DocSpot</a>
        <a href="#">Home</a>
        <a href="#">Search</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="#">Login</a>
        <a href="#">Register</a>
    </div>

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
    
</body>

</html>
