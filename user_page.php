<?php

@include 'config1.php';

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
   <title>Admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>Admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a href="register_form22.php" class="btn">Salary</a>
      <a href="logout1.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>