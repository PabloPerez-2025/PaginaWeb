<?php
    
    if(!empty($_POST["btningresar"])){
        if(!empty($_POST["usuario"]) and !empty($_POST["clave"])){
            $usuario=$_POST["usuario"];
            $clave=$_POST["clave"];
            $sql=$conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'");
            if($datos=$sql->fetch_object()){
                header("Location: INICIO.php");
            }else{
                echo"";
            }
        }else{
            echo '';
        }
    }
?>