<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|---------------------------------------------------------------
| Comprobar si la aplicación está en mantenimiento
|---------------------------------------------------------------
|
| Si la aplicación está en modo de mantenimiento/demostración a 
| través del comando "abajo" cargaremos este archivo para que se  
| pueda mostrar cualquier contenido renderizado previamente en 
| lugar de iniciar el marco, lo que podría causar una excepción.
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|----------------------------------------------------------------- -------------------------
| Registre el cargador automático
|----------------------------------------------------------------- -------------------------
|
| Composer proporciona un práctico cargador de clases generado automáticamente para
| esta aplicación. ¡Solo tenemos que utilizarlo! Simplemente lo requeriremos
| en el script aquí para que no necesitemos cargar manualmente nuestras clases.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|----------------------------------------------------------------- -------------------------
| Ejecutar la aplicación
|----------------------------------------------------------------- -------------------------
|
| Una vez que tenemos la aplicación, podemos manejar la solicitud entrante usando
| el núcleo HTTP de la aplicación. Luego, le enviaremos la respuesta
| al navegador de este cliente, permitiéndole disfrutar de nuestra aplicación.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
