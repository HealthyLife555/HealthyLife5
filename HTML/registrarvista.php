<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="../CSS/Estilos.css">
	<title>Healthy Life</title>
    <script>
        function validar(){
            var nombrein=document.getElementById("nombre");
            var nombre=nombrein.value;
            var correoin=document.getElementById("correo");
            var correo=correoin.value;
            var contrain=document.getElementById("contraseña");
            var contra=contrain.value;

            if (nombre.length<=3) {
                alert("El nombre de usuario debe tener entre 4 a 20 caracteres");
                return false;
            }
            else if (nombre.length>=20){
                alert("El nombre de usuario debe tener entre 4 a 20 caracteres");
                return false;
            }
            if (correo.length<=10) {
                alert("El correo electronico es muy corto, debe tener entre 10 a 50 caracteres");
                return false;
            }
            else if (correo.length>=50){
                alert("El correo electronico es muy largo, debe tener entre 10 a 50 caracteres");
            }
            if (contra.length<=4) {
                alert("La contraseña debe tener entre 5 a 15 caracteres");
                return false;
            }
            else if (contra.length>=15){
                alert("La contraseña debe tener entre 5 a 15 caracteres");
                return false;
            }
            return true;
        }
    </script>
</head>  
<body background="../IMG/aesthetic1.png">
 <form action="" id="registrar_usuario" class="formulario" onsubmit="return validar()">
    
    <h1 class="regis">Registrate</h1>
     <div class="contenedor">

     <?php
    
    include("../PHP/registro.php");
    
     ?>
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="nombre" id="nombre" placeholder="Nombre de Usuario" maxlength="20" oninput="this.value=this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g,'')" required>
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" name="correo" id="correo" placeholder="Correo Electronico" pattern="[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,}$" title="Ejemplo: /daniel@dominio.com/ NO se aceptaran carcateres especiales, solo @ y ." required/>
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña" id="contraseña" maxlength="25" pattern="[a-zA-Z0-9]+" title="La contraseña no puede contener caracteres especiales o espacios" required>
         </div>
         <input  type="submit" value="Registrate" class="button" href="Dietas_rutinas.php" name="registrarse">

         <br>
         <p class="parr">¿Ya tienes una cuenta?<a class="link" href="../HTML/loginvista.php"> Iniciar Sesion</a></p>        
     </div>
    </form>
</body>
</html>