<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plataforma";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los valores de los diferentes inputs
$backgroundColor = isset($_POST['backgroundColorPicker']) ? $_POST['backgroundColorPicker'] : null;
$navbarColor = isset($_POST['navbar-color']) ? $_POST['navbar-color'] : null;

$logo = $_FILES['logo_upload']['name'];
$logo_size = $_FILES['logo_upload']['size'];
$logo_type = $_FILES['logo_upload']['type'];
$logo_tmp_name = $_FILES['logo_upload']['tmp_name'];
$logo_folder = 'images/'.$logo;

// Si no se ha subido una imagen, mantener los colores como estaban antes
if (empty($logo)) {
  $sql = "UPDATE parametros SET";
  if ($backgroundColor !== null) {
    $sql .= " backgroundColorPicker = '$backgroundColor'";
  }
  if ($navbarColor !== null) {
    if ($backgroundColor !== null) {
      $sql .= ",";
    }
    $sql .= " navbar_color = '$navbarColor'";
  }
} else {
  // Si se ha subido una imagen, actualizar los colores y el logo
  $sql = "UPDATE parametros SET";
  if ($backgroundColor !== null) {
    $sql .= " backgroundColorPicker = '$backgroundColor',";
  }
  if ($navbarColor !== null) {
    $sql .= " navbar_color = '$navbarColor',";
  }
  $sql .= " logo_upload = '$logo'";
  move_uploaded_file($logo_tmp_name, $logo_folder);
}

$sql .= " WHERE id = 1";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
  echo "Los datos se han actualizado correctamente en la tabla parametros.";
  header("Location: home.php");
} else {
  echo "Error al actualizar los datos en la tabla parametros: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
