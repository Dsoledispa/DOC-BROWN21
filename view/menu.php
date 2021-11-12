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
        <title>Menu</title>
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
        <div class="row padding-top padding-lat">
            <button type="submit"><a type='button' href='camareros.php'>Ver camareros</a></button>
            <button type="submit"><a type='button' href='administradores.php'>Ver administradores</a></button>
            <button type="submit"><a type='button' href='zona.admin.php'>Ver proyecto original</a></button>
        </div>
    </body>
    </html>
<?php
}
?>