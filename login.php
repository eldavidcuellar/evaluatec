<?php 
include 'header_guess.php';
include 'config.php';
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `parametros` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select_users);
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'Correo o contraseña incorrecta!';
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EvaluaTec</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/styles.css">
   
</head>
<body>

<div class="form-container" enctype="multipart/form-data" >
   <form action="" method="post">
      <h3>EvaluaTec</h3>
      <?php
      if(isset($message)){
         foreach($message as $msg){
            echo '<div class="message">'.$msg.'</div>';
         }
      }
      ?>
      <input type="email" name="email" placeholder="Ingresa tu correo" class="box" required>
      <input type="password" name="password" placeholder="Ingresa tu contraseña" class="box" required>
      <input type="submit" name="submit" value="Iniciar Sesion" class="btn">
   </form>
</div>
   
</body>
</html>
