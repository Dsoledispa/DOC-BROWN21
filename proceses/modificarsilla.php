<?php
session_start();
require_once '../services/connection.php';
if ($_SESSION['email']=="") {
    header("location:../view/login.html");
}else {
    $id_mesa=$_GET['idmesa'];
    $silla=4;
    $sillas=$pdo->prepare("UPDATE `tbl_mesa`SET silla={$silla} WHERE id_mesa={$id_mesa}");
    try {
        $sillas->execute();
        if (empty($sillas)) {
            echo "No se ha ejecutado bien la sentencia";
        }else {
            header('location:../view/zona.admin.php');
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}