<?php
require_once('./connection.php');
session_start();

if (!isset($_SESSION['user_id'])) {
    echo '<script>alert("You are not logged in. Please login first.");</script>';
    header('Location: login.php');
    exit();
}
else {
    
$user_id= $_SESSION['user_id'];
$doctor=$_POST['doctorId'];
$charge = $_POST['charge'];
$appointment_date=$_POST['appointmentDate'];
$appointment_time=$_POST['appointmentTime'];
$formatted_appointment_date = date('j F, Y', strtotime($appointment_date));
$formatted_appointment_time = date('h:i A', strtotime($appointment_time));


try {
    // Connect to the database
    $conn = Teledoc::connect();

    // Prepare the query to select the username associated with the user ID
    $usernameQuery = "select name from info where user_type = 2 and id=:user_id";

    // Prepare and execute the statement
    $usernameStmt = $conn->prepare($usernameQuery);
    $usernameStmt->bindParam(':user_id', $user_id);
    $usernameStmt->execute();

    // Fetch the username
    $row = $usernameStmt->fetch(PDO::FETCH_ASSOC);
    $username = $row['name'];

} 
catch(PDOException $e)
{
    // Handle any errors
    echo 'Error: ' . $e->getMessage();
}
try {
    // Connect to the database
    $conn = Teledoc::connect();

   $doctorQuery="select d.name from doctor d where IndexNumber=:doctor";
    $doctorStmt = $conn->prepare($doctorQuery);
    $doctorStmt->bindParam(':doctor', $doctor);
    $doctorStmt->execute();
    $row = $doctorStmt->fetch(PDO::FETCH_ASSOC);

    $doctor_name=$row['name'];


} 
catch(PDOException $e)
{
    // Handle any errors
    echo 'Error: ' . $e->getMessage();
}

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>DocSpot | Payment</title>
   
    <style>
        /* Custom styles */
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .payment-form {
            max-width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="payment-form">
        <h1 class="text-center">Make Payment</h1>
        <!-- Displaying the appointment details -->
        <!-- <h2>Appointment Details</h2> -->
        <form method="POST" action="payment_success.php">
        <ul class="list-unstyled">
            <li><strong>User Name : </strong> <?php echo $username; ?></li>
            <input type="text" name="user_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" name="doc_id" value="<?php echo $doctor; ?>" hidden>
            <input type="text" name="appointment_time" value="<?php echo $appointment_time; ?>" hidden>
            <input type="text" name="appointment_date" value="<?php echo $appointment_date; ?>" hidden>
            <input type="text" name="cost" value="<?php echo $charge; ?>" hidden>
            <li><strong>Doctor Name : </strong> <?php echo $doctor_name; ?></li>
            <li><strong>Appointment Date:</strong> <?php echo $formatted_appointment_date; ?></li>
            <li><strong>Appointment Time:</strong> <?php echo $formatted_appointment_time; ?></li>
            <li><strong>Charge:</strong> <?php echo $charge; ?> tk</li>
        </ul>
        <!-- Payment form -->
        
            <input type="hidden" name="amount" value="<?php echo $charge; ?>">
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Make Payment</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
