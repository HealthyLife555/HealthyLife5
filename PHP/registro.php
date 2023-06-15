<?php
$con = mysqli_connect("localhost", "root", "", "nutriologo") or die("Problemas con la conexión");

$nombre = $_REQUEST["nombre"];
$correo = $_REQUEST["correo"];
$contraseña = $_REQUEST["contraseña"];

// Verificar si ya existe un registro con el mismo nombre de usuario o correo electrónico
$sql = "SELECT * FROM usuarios WHERE NOMBRE='$nombre' OR CORREO='$correo'";
$resultado = mysqli_query($con, $sql) or die("Problemas en el select" . mysqli_error($con));

if (mysqli_num_rows($resultado) > 0) {
    // Ya existe un registro con el mismo nombre de usuario o correo electrónico
    echo '<div class="alert">Ya existe un usuario registrado con ese nombre de usuario o correo electrónico.</div>';
} else {
    // Insertar los datos en la base de datos
    $sql_insert = "INSERT INTO usuarios (NOMBRE, CORREO, CONTRASEÑA) VALUES ('$nombre', '$correo', '$contraseña')";
    mysqli_query($con, $sql_insert) or die("Problemas en el insert" . mysqli_error($con));

    echo '<div class="success">Registro exitoso.</div>';
}

mysqli_close($con);
?>