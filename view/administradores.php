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
        <title>Administradores</title>
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
                <form action="../proceses/agregaradministrador.php" method="post">
                    <div>
                        <label for="nombre">Añadir administrador</label><br>
                        <input type="text" placeholder="Introduce el nombre" name="nombre" class="casilla">
                        <input type="text" placeholder="Introduce el apellido" name="apellido" class="casilla">
                        <input type="text" placeholder="Introduce el correo" name="email2" class="casilla">
                    </div>
                    <div class="column-1">
                        <input type="submit" value="Insertar" name="filtrar" class="filtrar">
                    </div>
                </form>
            </div>
        </div><br>
        <!--nav-->
       <?php
            $sentencia=$pdo->prepare("SELECT nombre, apellido, email FROM tbl_usuario WHERE tipo='administrador'");
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
       ?>
    </body>
    </html>
<?php
}
?>