<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div style="text-align:center">
<a href="index.php" class="logo">
          <img src="./assets/images/160logo.png" alt="Wijhah logo">
        </a>
<div class="container">

   <div class="content">
      <h3>تم تسجيل الدخول بنجاح</h3>
      <h1><span><?php echo $_SESSION['user_name'] ?></span> مرحبا بك</h1>

    <a href="index.php" class="btn">صفحة الموقع</a>
    <a href="ratingpage.php" class="btn">صفحة التقييم</a>

      <?php
      
  if(isset($_SESSION["user_name"]))
  {
  ?>
<a href="logout.php" class="btn">تسجيل خروج</a>
  <?php
  }
  else
  {
?>
<a href="register_form.php" class="btn">SING UP</a>
<a href="login_form.php" class="btn">LOGIN</a>
<?php
  }
  ?>
   </div>

</div>

</body>
</html>