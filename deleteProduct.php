<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: adminLogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
</head>
<body>

<script>
    var confirmDelete = confirm("Are you sure you want to delete this product?");

    if(confirmDelete){
        window.location.href = "deleteProduct.php?id=<?php echo $_GET['id']; ?>&confirm=yes";
    } else {
        window.location.href = "adminProducts.php";
    }
</script>

</body>
</html>

<?php
if(isset($_GET['confirm']) && $_GET['confirm'] == "yes"){

    $conn = mysqli_connect("localhost", "root", "", "green_nflora");
    $id = $_GET['id'];

    $sql = "DELETE FROM products WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        header("Location: adminProducts.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>