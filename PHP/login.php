<?php

if(!empty($_POST["reg"])){

    if(empty($_POST["email"]) and empty($_POST["password"])){
        echo '<div class="alert">No se a completado el registro</div>';
    }
    else{
        $usuario = $_POST["email"];
        $password = $_POST["password"];
        $sql=$con->query("select * from usuarios where CORREO='$usuario' and CONTRASEÑA='$password'");
        if($datos=$sql->fetch_object()){
            header("location:../HTML/Dietas_rutinas.html");
        }else
        {
            echo '<div class="alert">Acceso denegado</div>';
        }
    }
}

?>