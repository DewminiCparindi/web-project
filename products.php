<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "green_nflora";



$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if(isset($_GET['category'])) {
    $category = $_GET['category'];
} else {
    echo "<h2 style='text-align:center;color:#1b3d1b;'>No category selected!</h2>";
    exit();
}

$sql = "SELECT * FROM products WHERE category='$category'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo ucfirst($category); ?> - Green N Flora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
        background-color: #d4cecea5; 
        }
        
        .category-card img {
            height: 200px;
            width:170px;
            object-fit: cover;
        }
        .category-card:hover {
            transform: scale(1.05);
            transition: 0.3s;
        }
        .description {
        font-family: 'Georgia', serif; 
        font-size: 14px; 
        font-style: italic; 
        }
        .category-card {
        background-color: #e2f0dffb;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="index.html">
        <img src="logo.jpeg" alt="Logo" width="50" height="50" class="rounded-circle me-2">
        Green NFlora
    </a>

    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link mx-3" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link mx-3" href="contact.html">Contact Us</a></li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
    <h2 class="text-success text-center">
        <?php echo ucfirst($category); ?> Flowers
    </h2>

    <div class="row mt-4">

<?php
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
?>

        <div class="col-md-4 mb-4">
            <div class="card shadow text-center category-card">
                <div class="card-body">

                    <img src="<?php echo $row['image']; ?>" 
                         alt="<?php echo $row['name']; ?>" 
                         class="img-fluid mb-3">

                    <h5><?php echo $row['name']; ?></h5>
                    <p class="description"><?php echo $row['description']; ?></p>
                    <p>LKR <?php echo $row['price']; ?></p>

                    <form action="orders.php" method="POST">
                        <input type="hidden" 
                               name="product_id" 
                               value="<?php echo $row['id']; ?>">

                        <input type="hidden" name="price" value="<?php echo $row['price']; ?>">

                        <div class="mb-2">
                            <input type="text" 
                                   name="customer_name" 
                                   class="form-control" 
                                   placeholder="Enter Your Name" 
                                   required>
                        </div>

                        <div class="mb-2">
                            <input type="text" name="customer_address" class="form-control" placeholder="Enter Your Address" required>
                        </div>

                        <div class="mb-2">
                            <input type="email" 
                                   name="customer_email" 
                                   class="form-control" 
                                   placeholder="Enter Your Email" 
                                   required>
                        </div>

                        <div class="mb-2">
                            <input type="number" 
                                   name="quantity" 
                                   class="form-control" 
                                   placeholder="Enter Quantity" 
                                   required>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Submit Order
                        </button>
                    </form>

                </div>
            </div>
        </div>

<?php
    }
} else {
    echo "<h4 class='text-center text-danger'>No products found in this category.</h4>";
}
?>

    </div>
</div>

<footer class="bg-success text-white text-center p-4 mt-5">
    <p>&copy; 2026 Green N Flora | Luxury Floral Boutique</p>
     <p>Follow us on 
        <a href="#" class="text-white">Facebook</a> | 
        <a href="#" class="text-white">Instagram</a>
    </p>
</footer>

</body>
</html>