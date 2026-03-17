<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: adminLogin.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "green_nflora");
if (!$conn) die("Connection failed: " . mysqli_connect_error());

$id = $_GET['id'];

if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];

    $sql = "UPDATE products SET name='$name', price='$price', category='$category' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        header("Location: adminProducts.php");
        exit();
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM products WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$product = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
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
        .edit-container {
            background-color: #ffffff;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            width: 350px;
            text-align: center;
        }
        h2 {
            color: #1b3d1b;
            margin-bottom: 30px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #1b3d1b;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s ease;
        }
        button:hover {
            background-color: #356b35;
        }
        .message {
            margin-bottom: 15px;
            color: red;
        }
        a {
            display: block;
            margin-top: 15px;
            text-decoration: none;
            color: #1b3d1b;
            font-weight: bold;
        }
        a:hover {
            color: #356b35;
        }
    </style>
</head>
<body>
    <div class="edit-container">
        
        <div style="text-align:center; margin-bottom:20px;">
            <img src="../logo.jpeg" alt="Green NFlora Logo" style="width:150px; height:auto;">
        </div>

        <h2>Edit Product</h2>

        <?php if(isset($error)) echo "<div class='message'>$error</div>"; ?>

        <form method="POST">
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required>
            <input type="number" name="price" value="<?php echo $product['price']; ?>" step="0.01" required>
            <input type="text" name="category" value="<?php echo $product['category']; ?>" required>
            <button type="submit" name="update">Update Product</button>
        </form>

        <a href="adminProducts.php">Back to Products</a>

    </div>
</body>
</html>