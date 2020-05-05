<?php

/*use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;*/

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::resource('/pizza', 'pizzaController');
*/
Route::resource('/factura', 'facturaController')->except([
    'create', 'edit'
]);

Route::resource('/pedido', 'PedidoController')->except([
    'create', 'edit'
]);

Route::resource('/factura', 'facturaController')->except([
    'create', 'edit'
]);

Route::resource('/orden', 'PedidoPizzaController')->except([
    'create', 'edit'
]);

Route::resource('/pizza', 'PizzaController')->except([
    'create', 'edit'
]);

Route::get('/ingrediente/select', 'tipoingredienteController@select');


/*
Route::resource('/pizza', 'pizzaController/@index');
/*Route::get('/pizza', 'pizzacontroller@idnex');*/


