<?php
session_start();
if(!isset($_SESSION['admin'])) {
    header("Location: adminLogin.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "green_nflora");
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Orders</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f7f0;
            padding: 30px;
        }
        h2 {
            text-align: center;
            color: #1b3d1b;
            margin-bottom: 30px;
        }
        .top-actions {
            text-align: center;
            margin-bottom: 20px;
        }
        .top-actions a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1b3d1b;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .top-actions a:hover {
            background-color: #356b35;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #1b3d1b;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9fdf9;
        }
        tr:hover {
            background-color: #e0f0e0;
        }
        td a {
            text-decoration: none;
            color: #1b3d1b;
            font-weight: bold;
        }
        td a:hover {
            color: #356b35;
        }
    </style>
</head>
<body>
    <h2>View Orders</h2>
    <div class="top-actions">
        <a href="index.php">Back to Dashboard</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Customer</th>
            <th>Email</th>
            <th>Product ID</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Order Date</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['customer_name']; ?></td>
            <td><?php echo $row['customer_email']; ?></td>
            <td><?php echo $row['product_id']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['total_price']; ?></td>
            <td><?php echo $row['order_date']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
