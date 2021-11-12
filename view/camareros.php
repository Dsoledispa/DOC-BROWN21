<?php
require_once "../services/connection.php";
session_start();
if ($_SESSION['email']=="") {
    header("location:login.html");
}else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <title>Camareros</title>
    </head>
    <body>
        <!--Header-->
        <ul class="padding-lat">
            <li><a><?php echo $_SESSION["nombre"];?></a></li>
            <li class="right">
                <a href="../proceses/logout.proc.php">Logout</a>
            </li>
        </ul>
        <!--Header-->
                <!--nav-->
                <div class="row padding-top padding-lat">
            <div class="fondo">
                <button type="submit"><a type='button' href='menu.php'>Volver al menu</a></button>
                <form action="camareros.php" method="post">
                    <div class="column-2">
                        <label for="nombre">Nombre</label><br>
                        <input type="text" placeholder="Introduce el nombre" name="nombre" class="casilla">
                    </div>
                    <div class="column-2">
                        <label for="apellido">Apellido</label><br>
                        <input type="text" placeholder="Introduce el apellido" name="apellido" class="casilla">
                    </div>
                    <div class="column-1">
                        <input type="submit" value="FILTRAR" name="filtrar" class="filtrar">
                    </div>
                </form>
            </div>
        </div><br>
        <!--nav-->
       <?php
       //Con filtro
       if (isset($_POST['filtrar'])) {
           $nombre=$_POST['nombre'];
           $apellido=$_POST['apellido'];
           $filtro=$pdo->prepare("SELECT nombre, apellido, email FROM tbl_usuario WHERE tipo='camarero' and nombre like '%{$nombre}%' and apellido like '%{$apellido}%'");
           $filtro->execute();
           $filtrar=$filtro->fetchAll(PDO::FETCH_ASSOC);
           if (empty($filtrar)) {
            echo "<div class='row padding-top-less padding-lat'>";
            echo "<div>";
            echo "<h1>No se han encontrado elementos....</h1>";
            echo "</div>";
            echo "</div>";
           }else {
            echo  "<div class='row padding-top-less padding-lat'>";
            echo  "<div>";
            echo  "<table>";
            echo  "<tr>";
            echo  "<th class='blue'>Nombre</th>";
            echo  "<th class='blue'>Apellido</th>";
            echo  "<th class='blue'>Email</th>";
            echo  "</tr>";
            foreach ($filtrar as $row) {
                //Ponemos primero la localización
                    echo  "<tr>";
                        echo "<td class='gris'>{$row['nombre']}</td>";
                        echo "<td class='gris'>{$row['apellido']}</td>";
                        echo "<td class='gris'>{$row['email']}</td>";           
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
            echo "</div>";
           }
        //Sin filtro
       }else {
                $sentencia=$pdo->prepare("SELECT nombre, apellido, email FROM tbl_usuario WHERE tipo='camarero'");
                $sentencia->execute();
                 echo  "<div class='row padding-top-less padding-lat'>";
                 echo  "<div>";
                 echo  "<table>";
                 echo  "<tr>";
                 echo  "<th class='blue'>Nombre</th>";
                 echo  "<th class='blue'>Apellido</th>";
                 echo  "<th class='blue'>Email</th>";
                 echo  "</tr>";
                 foreach ($sentencia as $row) {
                         echo  "<tr>";
                             echo "<td class='gris'>{$row['nombre']}</td>";
                             echo "<td class='gris'>{$row['apellido']}</td>";
                             echo "<td class='gris'>{$row['email']}</td>";           
                     echo "</tr>";
                 }
                 echo "</table>";
                 echo "</div>";
                 echo "</div>";
                }
       ?>
    </body>
    </html>
<?php
}
?>