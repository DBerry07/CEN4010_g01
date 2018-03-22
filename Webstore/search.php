<!DOCTYPE html>

<?php 
include 'functions.php';

$databaseName = "products";

if (isset($_POST['productName'])){
        $conn = Connect();
        $productName = strtoupper($_POST['productName']);
        $sql = "SELECT * from $databaseName WHERE name LIKE '%$productName%'";
        $result = $conn->query($sql);
?> 

<html>
    <body>
        <?php
            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    echo "<br>Product ID: " . $row["productID"]. "<br>Product Name: " . $row["name"]. "<br>Price: $" . $row["price"]. "<br>";
                }
            }
            else{
                echo "Zero results.";
            }
        }
        $conn -> close();
        ?>
    </body>
</html>