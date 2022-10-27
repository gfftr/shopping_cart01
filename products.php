<?php

include 'connect.php';

if (isset($_POST['add_to_cart'])) {

   $product_id = $_POST['product_id'];
   $product_id = filter_var($product_id);

   $verify_product = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
   $verify_product->execute([$product_id]);
}

$count_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
$count_cart->execute([$user_id]);
$total_cart_items = $count_cart->rowCount();

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>products</title>

 <!-- font awesome cdn link  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

 <!-- custom css file link  -->
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">


</head>

<body>



</body>

</html>