# Proyecto MVC

Un proyecto derivado del tutorial introductorio de Laracast y con algunos
agregados para ser utilizado como material en la asignatura PAW - UNLu.

## Instalación

 - Clonar el repositorio
 - Ejecutar `composer install`
 - Crear un archivo `config.php` (Hay un ejemplo para copiar en `config.php.example`)
 - Crear un schema de base de datos con algun cliente MySQL
 - Ejecutar los migrations del directorio `sql/` en orden
 - Configurar la base de datos creada y los usuarios correspondientes

### Aclaración

Por cada objeto creado por usted mismo (Model o Controller), debera indicar a
composer que regenere el autoload:

```
composer dumpautoload
```

Si lo que se desea es agregar una nueva libreria de 3ero

```
composer requiere name/lib:version
```

## Deploy / ejecución

### Local

Ejecutar:

```
git clone https://github.com/pawunlu/paw-framework.git paw-mvc/
cd paw-mvc/
# Aca irian los pasos de instalación
php -S localhost:8888 -t public
```

Luego ingresar a http://localhost:8888

