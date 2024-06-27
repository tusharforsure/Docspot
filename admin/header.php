<?php
    $count="SELECT COUNT(*) as doctor_count FROM doctor;";
    $countqry = $conn->prepare($count);
    $countqry->execute();
    $count_arr = $countqry->fetchAll(PDO::FETCH_ASSOC);
    // print_r($count_arr);
    $docnumber=$count_arr[0]['doctor_count'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Dashboard</title>
    <style>
        /* Custom styles */
        body {
            background-image: url('bg2.jpg'); /* Add background image */
            background-size: cover;
            background-position: center;
        }
        .card {
            margin-top: 100px;
            border-radius: 10px;
            box-shadow: 0 8px 8px rgba(0,0,0,0.1);
        }

        .card-header {
            background-color: #03315D;/* Changed to light blue */
            color: white;
            border-radius: 10px 10px 0 0;
        }

        .card-footer {
            background-color: #03315D;
            border-top: none;
            color: white;
            border-radius: 0 0 10px 10px;
        }

        .btn {
            border-radius: 20px;
            padding: 8px 50px;
            font-weight: bold;
        }
        
    
    </style>
</head>
<body>