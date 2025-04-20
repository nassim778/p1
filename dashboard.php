<?php
//session_start();
include('db_connection.php');
include('session.php');

// Redirect if not logged in
if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    header("Location: login.php");
    exit();
}

// Get user data from session
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prnom'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Account</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .dashboard { padding: 20px; max-width: 800px; margin: 0 auto; }
        .welcome { background: #f5f5f5; padding: 20px; border-radius: 5px; }
        .menu { margin-top: 20px; }
        .menu a { display: inline-block; margin-right: 10px; padding: 8px 15px; 
                 background: #8d6e63; color: white; text-decoration: none; border-radius: 3px; }
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="welcome">
            <h1>Name: <?php echo htmlspecialchars($nom); ?>!</h1>
            <p>Prénom: <?php echo htmlspecialchars($prenom); ?></p>
        </div>
        
        <div class="menu">
            <a href="profile.php">Edit Profile</a>
            <a href="orders.php">My Orders</a>
            <a href="logout.php">Logout</a>
        </div>
        
        <div class="content">
            <h2>Your Account</h2>
            <p>This is your simple dashboard. More features can be added here.</p>
        </div>
    </div>
</body>
</html>
