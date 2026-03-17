<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "green_nflora";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$product_id = $_POST['product_id'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$customer_name = $_POST['customer_name'];
$customer_email = $_POST['customer_email'];
$customer_address = $_POST['customer_address'];


$total_price = $price * $quantity;


$order_date = date("Y-m-d H:i:s");

$sql = "INSERT INTO orders 
    (product_id, customer_name, customer_email, quantity, order_date, address, total_price)
    VALUES
    ('$product_id', '$customer_name', '$customer_email', '$quantity', '$order_date', '$customer_address', '$total_price')";

if (isset($_POST['place_order'])) {
    $name = $_POST['name'];
    $product = $_POST['product'];
    $qty = $_POST['qty'];

    $sql = "INSERT INTO orders(name, product, qty)
            VALUES('$name', '$product', '$qty')";

    mysqli_query($conn, $sql);
}

if(mysqli_query($conn, $sql)) {
    echo '
    <html>
    <head>
        <title>Order Successful - Green N Flora</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #d4cecea5;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font-family: Arial, sans-serif;
            }
            .success-card {
                background-color: #e2f0dffb;
                padding: 40px;
                border-radius: 15px;
                box-shadow: 0 8px 25px rgba(0,0,0,0.2);
                text-align: center;
                max-width: 500px;
                animation: fadeIn 1s ease-in-out;
            }
            .success-card h1 {
                color: #28a745;
                font-size: 32px;
                margin-bottom: 20px;
            }
            .success-card p {
                font-size: 18px;
                margin: 10px 0;
            }
            .btn-home {
                margin-top: 20px;
                padding: 10px 25px;
                font-size: 16px;
            }
            @keyframes fadeIn {
                from {opacity: 0; transform: translateY(-20px);}
                to {opacity: 1; transform: translateY(0);}
            }
        </style>
    </head>
    <body>
        <div class="success-card">
            <h1>🎉 Order Submitted Successfully!</h1>
            <p>Your order total is: <strong>LKR '.number_format($total_price, 2).'</strong></p>
            <p>Thank you for shopping with Green N Flora!</p>
            <a href="index.html" class="btn btn-success btn-home">Back to Home</a>
        </div>
    </body>
    </html>
    ';
} else {
    echo "Error: " . mysqli_error($conn);
}


