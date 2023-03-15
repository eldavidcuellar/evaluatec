

<?php
include 'cambiar_datos.php';
include 'config.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Navbar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>


<body>
    <header style="background-color: <?php echo $navbarColor; ?>;">
    

    <a class="logo" href="/"> <?php 

$select = mysqli_query($conn, "SELECT * FROM `parametros` ") or die('query failed');
if(mysqli_num_rows($select) > 0){
    $fetch = mysqli_fetch_assoc($select);
}
if($fetch['logo_upload'] == ''){
    echo '<img src="images/logo.svg" height="132" width="300">';
}else{
    echo '<img src="images/'.$fetch['logo_upload'].'" height="132" width="300">';
}?>

   
  
</a>

    </header>
<div>
</div>
    <script type="text/javascript" src="mobile.js"></script>
    
    </script>

    <style>
		body {
			background-color: <?php echo $backgroundColor ?>;
		}

    
	</style>
</body>





