<?php
session_start();
if(!isset($_SESSION['admin'])) {
    header("Location: adminLogin.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "green_nflora");
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f7f0;
            padding: 30px;
        }
        h2 {
            text-align: center;
            color: #1b3d1b;
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
            margin-top: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #1b3d1b;
            color: #fff;
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
    <h2>Manage Products</h2>
    <div class="top-actions">
        <a href="addProduct.php">Add New Product</a>
        <a href="index.php">Back to Dashboard</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td>
                <a href="editProduct.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="deleteProduct.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
