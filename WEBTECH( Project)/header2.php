<?php
@include 'config.php';
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="css/header2.css">
    <link rel="stylesheet" href="js/script.js">
    <title>HomePage</title>
</head>
<body>
<header class="header">

    <div class="flex">

        <a href="home.php" class="logo">The Floral Maze.</a>

        <nav class="navbar">
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="#">pages +</a>
                    <ul>
                        <li><a href="about.php">about</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </ul>
                </li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="orders.php">orders</a></li>
                <li><a href="#">account +</a>
                    <ul>
                        <li><a href="login.php">login</a></li>
                        <li><a href="register.php">register</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <a href="search_page.php" class="fas fa-search"></a>
            <div id="user-btn" class="fas fa-user"></div>
            <?php
             $select_wishlist_count=mysqli_query($conn,"SELECT * FROM wishlist WHERE user_id='$user_id'") or die('querry failed');
             $wishlist_num_rows=mysqli_num_rows($select_wishlist_count);
            ?>
            <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?php echo $wishlist_num_rows; ?>)</span></a>
            <?php
                $select_cart_count = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
                $cart_num_rows = mysqli_num_rows($select_cart_count);
            ?>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?php echo $cart_num_rows; ?>)</span></a>
        </div>

        <div class="account-box" >
            <p>username : <span style="color:e84393;"><?php echo $_SESSION['user_name']; ?></span></p>
            <p>email : <span style="color:e84393;"><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php"class="delete-btn">logout</a>
        </div>

    </div>
</header>
</body>