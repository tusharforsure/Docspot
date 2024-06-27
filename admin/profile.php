<?php
require_once('../connection.php');
session_start();

try {
    $conn = Teledoc::connect();

    // Fetch user details
    $query = "SELECT * FROM info WHERE user_type = 0 AND id = :user_id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':user_id', $_SESSION['user_id']);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Fetch appointment details
    $qr = "SELECT d.Name AS doctor_name, da.appointment_time, da.date, da.cost, u.name AS user_name
    FROM doctor_availablity da 
    JOIN doctor d ON d.IndexNumber = da.doc_id
    JOIN info u ON u.id = da.user_id;";
    $qry = $conn->prepare($qr);
    $qry->execute();
    $table = $qry->fetchAll(PDO::FETCH_ASSOC);

    // Calculate total earning
    $totalEarning = 0;
    foreach ($table as $appointment) {
        $totalEarning += $appointment['cost'] * 0.1;
    }

} catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}

require('header.php');
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>&ensp;&ensp;Admin | Profile</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="username" class="font-weight-bold">Username:</label>
                        <input type="text" readonly class="form-control" id="username" value="<?php echo $user['name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="total_doctors" class="font-weight-bold">Total Registered Doctors:</label>
                        <input type="text" readonly class="form-control" id="total_doctors" value="<?php echo $docnumber; ?>">
                    </div>
                
                </div>
                <div class="card-footer text-center">
                    <a href="admin_logout.php" class="btn btn-danger w-100">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
body {
    background-image: url('bg2.jpg');
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.container {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    border: none;
    border-radius: 20px;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    background: rgba(255, 255, 255, 0.9);
    width: 120%;
    max-width: 800px;
    max-height: 500px;
}

.card-header {
    background-image: url('Header2.jpg');
    background-size: 480px;
    color: white;
    padding: 0.8rem 0;
}

.card-body {
    padding: 1.5rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-control {
    height: 30px;
    font-size: 1rem;
    padding: 1rem;
}

.card-footer {
    background-image: url('Header2.jpg');
    background-size: 480px;
    padding: 1.8rem 0;
    
}

.btn-danger {
    background-color: #dc3545;
    position: relative;
    right: -10px;
    bottom: 2px;
    font-size: 1rem;
    padding: 0.50rem 1.5rem;
    border-radius: 40px;
    transition: background-color 0.3s, border-color 0.3s;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}
</style>
<?php require("footer.php"); ?>
