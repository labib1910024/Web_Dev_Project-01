<?php

@include 'config22.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']);
   $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);

  

         $insert = "INSERT INTO info(ID, Name, Month, Salary) VALUES('$name','$email','$pass','$cpass')";
         mysqli_query($conn, $insert);
         header('location:register_form22.php');

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Information form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Information</h3>
      
   
      <input type="text" name="name" required placeholder="Enter id">
      <input type="text" name="email" required placeholder="Enter name">
      <input type="text" name="password" required placeholder="Enter month">
      <input type="text" name="cpassword" required placeholder="Enter salary">
      
      <input type="submit" name="submit" value="Submit" class="form-btn">
      
   </form>

</div>

</body>
</html>