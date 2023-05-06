<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <link rel = "stylesheet" href = "css/about.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>
</head>
<body>  
<?php @include 'header2.php'; ?> 
<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>
<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>We provide the most fresh and vibrant flowers to your dropstep. With delivery charges lesser than 50 rupees.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>We provide on-time service, discounts and membership goodies to the customers. Along with that, we charge no money on decoration puposes.</p>
            <a href="contact.php" >contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>This company is founded by Samarth Naik and Mansi Mishra , we want to make this brand the top-most and the most used flower shop app as we sell the most fresh and top breed flowers to yall.</p>
            <a href="#reviews" >clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>"Gorgeous flowers, fast delivery - highly recommend this website!"</p>
            <div class="stars">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
            <h3>Samarth Naik</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>"Great service and beautiful bouquets - exceeded my expectations!"</p>
            <div class="stars">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
            <h3>Mansi Mishra</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>"Easy ordering process, high-quality flowers - will use again.".</p>
            <div class="stars">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
            <h3>Shantaksh Kamat</h3>
        </div>
    </div>
        <div class="shbtn">
        <button class="btnn" onclick="show_hide()">show more reviews</button>
        </div>
     <div class="box-container" id="group" >
        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>"Lovely selection of flowers and excellent customer service.".</p>
            <div class="stars">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
            <h3>Sunidhi Naik</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p>"Fresh flowers and on-time delivery every time - highly recommend!".</p>
            <div class="stars">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
            <h3>Rohit Sharma</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>"Affordable prices, top-notch quality - can't recommend this website enough!.</p>
            <div class="stars">
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
                <i class="bi bi-star"></i>
            </div>
            <h3>Sakshi Dessai</h3>
        </div>
    </div>
    

</section>
<script>
    window.onload=document.getElementById("group").style.display="none";
    var a;
    function show_hide(){
         
        if(a==1){
            document.getElementById("group").style.display="flex";
            return a=0;
        }else{
            document.getElementById("group").style.display="none";
            return a=1;
        }
    }
    
</script>
    <?php @include 'footer.php'; ?>
</body>
</html>