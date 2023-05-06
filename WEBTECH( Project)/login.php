<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $filter_email=filter_var($_POST['email'],FILTER_SANITIZE_STRING);
    $email=mysqli_real_escape_string($conn,$filter_email);
    $filter_pass=filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
    $pass=mysqli_real_escape_string($conn,$filter_pass);

    $select_users=mysqli_query($conn,"SELECT * FROM `user` WHERE email='$email' AND password='$pass' ") or die('querry failed');

    if(mysqli_num_rows($select_users) > 0){
       
        $row=mysqli_fetch_assoc(($select_users));

        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
     }else{
        $message[]='incorrect email or password';
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<?php
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


    <section class="form-container">
        <form action="" method="post">
            <h3>Login Now</h3>
            <input type="email" name="email" class="box" placeholder="enter your email" required>
            <input type="password" name="pass" class="box" placeholder="enter your password" required>

            <input type="submit" name="submit" class="btn" value="Login now">
            <p>Dont Have an account?<a href="register.php">Register Now</a></p>
        </form>
    </section>
</body>
</html>