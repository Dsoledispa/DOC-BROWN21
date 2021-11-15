Título del Proyecto

Acá va un párrafo que describa lo que es el proyecto
Comenzando 🚀

Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

Mira Deployment (Despliegue) para conocer como desplegar el proyecto.
Pre-requisitos 📋

Que cosas necesitas para instalar el software y como instalarlas

Da un ejemplo

Instalación 🔧

Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutandose

Dí cómo será ese paso

Da un ejemplo

Y repite

hasta finalizar

Finaliza con un ejemplo de cómo obtener datos del sistema o como usarlos para una pequeña demo
Ejecutando las pruebas ⚙️

Explica como ejecutar las pruebas automatizadas para este sistema
Analice las pruebas end-to-end 🔩

Explica que verifican estas pruebas y por qué

Da un ejemplo

Y las pruebas de estilo de codificación ⌨️

Explica que verifican estas pruebas y por qué

Da un ejemplo

Despliegue 📦

Agrega notas adicionales sobre como hacer deploy
Construido con 🛠️

Menciona las herramientas que utilizaste para crear tu proyecto

    Dropwizard - El framework web usado
    Maven - Manejador de dependencias
    ROME - Usado para generar RSS

Contribuyendo 🖇️

Por favor lee el CONTRIBUTING.md para detalles de nuestro código de conducta, y el proceso para enviarnos pull requests.
Wiki 📖

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra Wiki
Versionado 📌

Usamos SemVer para el versionado. Para todas las versiones disponibles, mira los tags en este repositorio.
Autores ✒️

Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios

    Andrés Villanueva - Trabajo Inicial - dannylarrea
    Fulanito Detal - Documentación - fulanitodetal

También puedes mirar la lista de todos los contribuyentes quíenes han participado en este proyecto.
Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo LICENSE.md para detalles
Expresiones de Gratitud 🎁

    Comenta a otros sobre este proyecto 📢
    Invita una cerveza 🍺 o un café ☕ a alguien del equipo.
    Da las gracias públicamente 🤓.
    etc.


## Integrantes del equipo
```
Xavier Gómez
Diego Soledispa
```

# DOC-BROWN21
## Conexión a base de datos
### Necesitas crear el archivo connection.php y añadir las sentencias de la siguiente manera como demostraré a continuación que es con el metodo de mysql.
```
<?php
// ESTILO POR PROCEDIMIENTOS

$host = "conexion";
$user = "usuario";
$pass = "contraseña";
$db = "nombre base de datos";

// Crear la conexión
$conn = mysqli_connect($host, $user, $pass, $db);

// Checkear la conexión
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
} else {
	mysqli_set_charset($conn, "utf8");
}
```
### Metodo de PDO
```
define("SERVIDOR","conexion");
define("USUARIO","usuario");
define("PASSWORD","contraseña");
define("BD","nombre base de datos");
$servidor = "mysql:host=".SERVIDOR.";dbname=".BD;
try{
    $pdo= new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    //echo "<script>alert('Conexion establecida')</script>";
}catch(PDOException $e){
    //Exception coge todos los errores pero PDOException para errores de PDO
    echo $e->getMessage();
}
```

## Logins
```
user: xaviergomez@docbrown.com, diegosoledispa@docbrown.com 
pass: 1234
```
