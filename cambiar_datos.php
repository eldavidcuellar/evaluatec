<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "plataforma");


// Verificar si hay errores de conexión
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Consulta para obtener el valor de backgroundColorPicker
$sql = "SELECT backgroundColorPicker FROM parametros";
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result->num_rows > 0) {
  // Obtener el valor de backgroundColorPicker y asignarlo a una variable
  $row = $result->fetch_assoc();
  $backgroundColor = $row["backgroundColorPicker"];
} else {
  // Si no se encontraron resultados, asignar un valor por defecto
  $backgroundColor = "#ffffff";
}

// Consulta para obtener el valor de navbar_color
$sql_navbar = "SELECT navbar_color FROM parametros WHERE id = 1";
$result_navbar = $conn->query($sql_navbar);

// Verificar si la consulta fue exitosa
if ($result_navbar->num_rows > 0) {
  // Obtener el valor de navbar_color y asignarlo a una variable
  $row_navbar = $result_navbar->fetch_assoc();
  $navbarColor = $row_navbar["navbar_color"];
} else {
  // Si no se encontraron resultados, asignar un valor por defecto
  $navbarColor = "#ffffff";
}


// Consulta para obtener el valor de logo_upload
$sql = "SELECT logo_upload FROM parametros WHERE id=1";
$result_logo = $conn->query($sql);


if ($result_logo->num_rows > 0) {
  $row = $result_logo->fetch_assoc();
  $logo = $row["logo_upload"];
} else {
  $logo = "default_logo.jpg"; // Si no hay ningún valor en la base de datos, usar una imagen por defecto
}



// Consulta para obtener el valor de logo upload
























/* Consulta para obtener el valor de logo_upload
$sql_logo = "SELECT logo_upload FROM parametros WHERE id = 1";
$result_logo = $conn->query($sql_logo);

// Verificar si la consulta fue exitosa
if ($result_logo->num_rows > 0) {
  // Obtener el valor de logo_upload y asignarlo a una variable
  $row_logo = $result_logo->fetch_assoc();
  $logo = $row_logo["logo_upload"];
} else {
  // Si no se encontraron resultados, asignar un valor por defecto
  $logo = "images/logo.svg"; */



// Cerrar la conexión a la base de datos
$conn->close();
?>



