<?php
session_start();
require_once '../services/connection.php';
if ($_SESSION['email']=="") {
    header("location:../view/login.html");
}else {
    $nombre=$_POST['nombre'];
    $apellido=$_POST["apellido"];
    $email2=$_POST["email2"];
    $agregar=$pdo->prepare("INSERT INTO `tbl_usuario` (`nombre`, `apellido`, `email`, `contraseña`, `tipo`) VALUES
    ('{$nombre}', '{$apellido}', '{$email2}', '81dc9bdb52d04dc20036dbd8313ed055', 'administrador')");
    try {
        $agregar->execute();
        if (empty($agregar)) {
            echo "No se ha ejecutado bien la sentencia";
        }else {
            header('location:../view/administradores.php');
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}