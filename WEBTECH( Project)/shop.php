<?php
@include 'config.php';
 session_start();

 $user_id=$_SESSION['user_id'];
 if(!isset($user_id)){
    header('location:login.php');
 };
 if(isset($_POST['add_to_wishlist'])){

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   
   $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_wishlist_numbers) > 0){
       $message[] = 'already added to wishlist';
   }elseif(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart';
   }else{
       mysqli_query($conn, "INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_image')") or die('query failed');
       $message[] = 'product added to wishlist';
   }

}

if(isset($_POST['add_to_cart'])){

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
       $message[] = 'already added to cart';
   }else{

       $check_wishlist_numbers = mysqli_query($conn, "SELECT * FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

       if(mysqli_num_rows($check_wishlist_numbers) > 0){
           mysqli_query($conn, "DELETE FROM `wishlist` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');
       }

       mysqli_query($conn, "INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES('$user_id', '$product_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
       $message[] = 'product added to cart';
   }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>shop</title>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="">
   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/shop.css">
</head>
<body>
<?php @include 'header2.php'; ?>
<section class="heading">
    <h3>our shop</h3>
    <p> <a href="home.php">home</a> / shop </p>
</section>


<section class="products">

<h1 class="title">latest products</h1>

<div class="box-container">


<?php
      $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_products = mysqli_fetch_assoc($select_products)){
   ?>
   <form action="" method="POST" class="box">
      <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="bi bi-eye"></a>
      <div class="price">RS:<?php echo $fetch_products['price']; ?>/-</div>
      <img src="./flowers/<?php echo $fetch_products['image']; ?>" alt="" class="image">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <input type="number" name="product_quantity" value="1" min="0" class="qty">
      <input type="hidden" name="product_id" value="<?php echo $fetch_products['id']; ?>">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="add to wishlist" name="add_to_wishlist" style="background-color:orange;
                                                                                 font-size:2rem;
                                                                                 text-transform:capitalize;"class="btn-primary">
      <input type="submit" value="add to cart" name="add_to_cart" style="background-color:rgb(237, 218, 13);
                                                                                 font-size:2rem;
                                                                                 text-transform:capitalize;" class="btn-warning">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>
</section>
<?php @include 'footer.php'; ?>

</body>
</html>