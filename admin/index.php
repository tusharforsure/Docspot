<?php
session_start();
require('../connection.php');

if(isset($_POST['login'])){
    $_SESSION['validate'] = false;
    $username = $_POST['username'];
    $password = $_POST['password'];

    $p = teledoc::connect()->prepare('SELECT * FROM info WHERE name=:u AND user_type=0');
    $p->bindValue(':u', $username);
    $p->execute();
    $user = $p->fetch(PDO::FETCH_ASSOC);
    
    if ($user) {
        $storedPassword = $user['pass'];
        
        if ($password === $storedPassword) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id']=$user['id'];
            $_SESSION['validate'] = true;
            header('location:profile.php');
            exit;
        } else {  
            $error_message = "Password mismatch!";
        }
    } else {
        $error_message = "User not found!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | TeleDoc</title>
    
    <style>
        body {
            background-image: url('bg2.jpg');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            width: 500px;
            margin: auto;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }
            .card-header {
            background-image: url('Header2.jpg');
            background-size: 480px;
            color: white;
            padding: 0.8rem 0;
        }
        .card-footer {
    background-image: url('Header2.jpg');
    background-size: 480px;
    padding: 1.8rem 0;
    
}
            .card-body {
                padding: 3rem;
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: white;
            }
            .form-label {
                font-weight: bold;
                margin-bottom: 0.5rem;
            }
            .form-control {
                margin-bottom: 1.5rem;
                height: 50px;
                font-size: 1rem;
                padding: 0.75rem;
            }
            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
                width: 100%;
                height: 50px;
                font-size: 1.25rem;
                transition: background-color 0.3s, border-color 0.3s;
            }
            .btn-primary:hover {
                background-color: #0056b3;
                border-color: #0056b3;
            }
            .error-message {
                color: red;
                margin-top: 1rem;
                text-align: center;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">&nbsp &nbsp Admin Login | DocSpot</h3>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input required type="text" class="form-control" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input required type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary" value="login_button" name="login">Login</button>
                    </form>
                    <?php
                    if (isset($error_message)) {
                        echo '<div class="error-message">' . $error_message . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
    </html>
