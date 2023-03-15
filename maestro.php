
   
<?php include 'header.php';








?>


<!DOCTYPE html>
<html>
<head>
  <title>Configuracion del Maestro</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <script type="text/javascript" src="mobile.js"></script>


</head>
<body>
  <h1>Configuracion del Maestro</h1>
  
<form action="guardar_datos.php" method="post" enctype="multipart/form-data">
  <h3>Color de fondo</h3>

  <input type="color" name="backgroundColorPicker" value = "<?php echo $backgroundColor ?>">
  <h3>Color de Barra</h3>
  <input type="color" name="navbar-color" value="<?php echo $navbarColor; ?>">
  <h3>Cambiar Logo</h3>
  <input type="file" name="logo_upload" accept=".svg, .jpg, .png">
  <input type="submit" value="Guardar">
</form>





</body>
</html>


