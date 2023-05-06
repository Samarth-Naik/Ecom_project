<!DOCTYPE html>
<html lang="en">
<head>
   <title>shopping cart</title>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="css/cart.css">

</head>
<body>
<?php @include 'header2.php'; ?>
<section class="heading">
    <h3>shopping cart</h3>
    <p> <a href="home.php">home</a> / cart </p>
</section>

<section class="shopping-cart">

    <h1 class="title">products added</h1>

    <div class="box-container">
    <div  class="box">
        <a href="cart.php" class="fas fa-times" ></a>
        <a href="view_page.php" class="fas fa-eye"></a>
        <img src="flowers/beach florist.jpg" alt="" class="image">
        <div class="name">Beach Florist</div>
        <div class="price">Rs200/-</div>
        <form action="" method="post">
            <input type="hidden" value="" name="cart_id">
            <input type="number" min="1" value="" name="cart_quantity" class="qty">
            <input type="submit" value="update" class="btn btn-success" name="update_quantity">
        </form>
        <div class="sub-total"> sub-total : <span>Rs.../-</span> </div>
    </div>

    <div  class="box">
        <a href="cart.php" class="fas fa-times" ></a>
        <a href="view_page.php" class="fas fa-eye"></a>
        <img src="flowers/yellow tulipa.jpg" alt="" class="image">
        <div class="name">Yellow Tulipa</div>
        <div class="price">Rs150/-</div>
        <form action="" method="post">
            <input type="hidden" value="" name="cart_id">
            <input type="number" min="1" value="" name="cart_quantity" class="qty">
            <input type="submit" value="update" class="btn btn-success" name="update_quantity">
        </form>
        <div class="sub-total"> sub-total : <span>Rs.../-</span> </div>
    </div>

    <div  class="box">
        <a href="cart.php" class="fas fa-times" ></a>
        <a href="view_page.php" class="fas fa-eye"></a>
        <img src="flowers/cottage rose.jpg" alt="" class="image">
        <div class="name">Cottage Rose</div>
        <div class="price">Rs160/-</div>
        <form action="" method="post">
            <input type="hidden" value="" name="cart_id">
            <input type="number" min="1" value="" name="cart_quantity" class="qty">
            <input type="submit" value="update" class="btn btn-success" name="update_quantity">
        </form>
        <div class="sub-total"> sub-total : <span>Rs.../-</span> </div>
    </div>
    </div>

    <div class="more-btn">
        <a href="cart.php?delete_all" class="delete-btn " >delete all</a>
    </div>

    <div class="cart-total">
        <p>grand total : <span>Rs.../-</span></p>
        <a href="shop.php" id="mybutton" class="btnshop">continue shopping</a>
        <a href="checkout.php" id="mybutton" class="btncheck">proceed to checkout</a>
    </div>

</section>

    <script>
        $(document).ready(function(){
        $("#mybutton").hover(function(){
        $(this).css("background-color", "yellow");
         }, function(){
            $(this).css("background-color", "orange");
         });
        });
    </script>
    <?php @include 'footer.php'; ?>
</body>
</html>