# Reserva-Mesa-Restaurante-DOC-BROWN

Página web que sirve para reservar mesas de un restaurante y tener un registro de estos

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** (Despliegue) para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Que cosas necesitas para instalar el software y como instalarlas_

```
Da un ejemplo
```

### Instalación 🔧

_Una serie de ejemplos paso a paso que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutandose_

_Dí cómo será ese paso_

```
Da un ejemplo
```

_Y repite_

```
hasta finalizar
```

_Finaliza con un ejemplo de cómo obtener datos del sistema o como usarlos para una pequeña demo_

## Despliegue 📦

_Agrega notas adicionales sobre como hacer deploy_

## Construido con 🛠️

_Menciona las herramientas que utilizaste para crear tu proyecto_

* [Xampp](https://www.apachefriends.org/) - El paquete de software usado
* [Visual Studio Code](https://code.visualstudio.com/) - Editor de codigo

## Contribuyendo 🖇️

Por favor lee el [CONTRIBUTING.md](https://gist.github.com/villanuevand/xxxxxx) para detalles de nuestro código de conducta, y el proceso para enviarnos pull requests.

## Wiki 📖

Puedes encontrar mucho más de cómo utilizar este proyecto en nuestra [Wiki](https://github.com/tu/proyecto/wiki)

## Versionado 📌

Usamos [SemVer](http://semver.org/) para el versionado. Para todas las versiones disponibles, mira los [tags en este repositorio](https://github.com/tu/proyecto/tags).

## Autores ✒️

_Menciona a todos aquellos que ayudaron a levantar el proyecto desde sus inicios_

* **Xavier Gómez**  - [Xavier Gómez](https://https://github.com/xaviermireia1)
* **Diego Soledispa** - [Diego Soledispa](https://github.com/Dsoledispa)

También puedes mirar la lista de todos los [contribuyentes](https://github.com/your/project/contributors) quíenes han participado en este proyecto. 

## Licencia 📄

Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo [LICENSE.md](LICENSE.md) para detalles

## Expresiones de Gratitud 🎁

* Comenta a otros sobre este proyecto 📢
* Invita una cerveza 🍺 o un café ☕ a alguien del equipo. 
* Da las gracias públicamente 🤓.
* etc.

# DOC-BROWN21
## Conexión a base de datos
### Necesitas crear el archivo connection.php y añadir las sentencias de la siguiente manera como demostraré a continuación que es con el metodo de mysql.
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
