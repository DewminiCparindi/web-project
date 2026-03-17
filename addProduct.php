<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: adminLogin.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "green_nflora");

if(isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    
   $image_name_for_db = "";
if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
    $image_name = $_FILES['image']['name'];  
    $target_dir = "images/";
    if(!is_dir($target_dir)) mkdir($target_dir, 0755, true);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image_name);

    $image_name_for_db = "images/" . $image_name;  
}

    $sql = "INSERT INTO products (name, price, category, description, image) 
            VALUES ('$name', '$price', '$category', '$description', '$image_name_for_db')";

    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Product added successfully!'); window.location.href='adminProducts.php';</script>";
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f7f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            width: 450px;
        }
        h2 {
            text-align: center;
            color: #1b3d1b;
            margin-bottom: 30px;
        }
        input[type="text"], input[type="number"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #fff;
        }
        textarea {
            resize: vertical;
            min-height: 80px;
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
            transition: all 0.3s ease;
        }
        button:hover {
            background-color: #356b35;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #1b3d1b;
        }
        .back-link:hover {
            color: #356b35;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div style="text-align:center; margin-bottom:20px;">
    <img src="../logo.jpeg" alt="Green NFlora Logo" style="width:150px; height:auto;">
</div>
        <h2>Add Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Product Name" required>
            <input type="number" name="price" placeholder="Price" step="0.01" required>
            <select name="category" required>
                <option value="" disabled selected>Select Category</option>
                <option value="anniversary">Anniversary</option>
                <option value="birthday">Birthday</option>
                <option value="graduation">Graduation</option>
                <option value="decorations">Decorations</option>
            </select>
            <textarea name="description" placeholder="Description" required></textarea>
            <input type="file" name="image" accept="image/*" required>
            <button type="submit" name="add">Add Product</button>
        </form>
        <a class="back-link" href="adminProducts.php">Back to Products</a>
    </div>
</body>
</html>
