<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|----------------------------------------------------------------- -------------------------
| Rutas Web
|----------------------------------------------------------------- -------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estos
| las rutas son cargadas por el RouteServiceProvider y todas ellas
| asignarse al grupo de middleware "web". ¡Haz algo genial!
|
*/

# para tal ruta indico un controlador, 
# por defecto el metodo del controller 
# que va tratar el request es __invoke 
Route::get('/', [ HomeController::class , 'index' ]);


