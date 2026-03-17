<?php
session_start();
if(!isset($_SESSION['admin'])) {
    header("Location: adminLogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f7f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .dashboard {
            text-align: center;
            background-color: #ffffff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            width: 400px;
        }
        h2 {
            color: #1b3d1b;
            margin-bottom: 40px;
        }
        .dashboard a {
            display: block;
            margin: 15px 0;
            padding: 15px;
            background-color: #1b3d1b;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .dashboard a:hover {
            background-color: #356b35;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
       
        .logout-btn {
            background-color: #c0392b;
        }
        .logout-btn:hover {
            background-color: #e74c3c;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <div style="text-align:center; margin-bottom:20px;">
    <img src="../logo.jpeg" alt="Green NFlora Logo" style="width:150px; height:auto;">
</div>
        <h2>Admin Dashboard</h2>
        
        <a href="adminProducts.php">Manage Products</a>
        <a href="adminOrders.php">View Orders</a>
        <a href="registerAdmin.php">Register New Admin</a>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>
