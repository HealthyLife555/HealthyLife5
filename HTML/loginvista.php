<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../CSS/Estilos.css">
	<title>Healthy Life</title>

</head>  
<body background="../IMG/aesthetic1.png">
    <form action="" class="formulario" method="post">
    
    <h1 class="regis">Login</h1>
     <div class="contenedor">

    <?php
                     
      include("../PHP/bd.php");
      include("../PHP/login.php");

    ?>
     
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electronico" required name="email">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" required name="password">
         
         </div>
         <input type="submit" name="reg" class="button">
         <p class="parr">¿No tienes una cuenta? <a class="link" href="../HTML/registrarvista.php">Registrate </a></p>
     </div>
    </form>
</body>
</html>