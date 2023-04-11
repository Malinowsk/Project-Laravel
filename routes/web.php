<?php

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

Route::get('/', function () {
    return view('welcome');
});
