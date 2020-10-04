# Proyecto MVC

Un proyecto derivado del tutorial introductorio de Laracast y con algunos agregados para ser utilizado como material en la asignatura PAW - UNLu.

## Instalación

 - Clonar el repositorio
 - Ejecutar `composer install`
 - Crear un archivo `config.php` (Hay un ejemplo para copiar en `config.php.example`)
 - Crear un schema de base de datos con algun cliente MySQL
 - Ejecutar los migrations del directorio `sql/` en orden
 - Configurar la base de datos creada y los usuarios correspondientes

## Deploy / ejecución

### Local

Luego de [instalar](#instalación), ejecutar:

```bash
php -S localhost:8888 -t public
```

Luego ingresar a http://localhost:8888
