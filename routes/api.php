<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});  */

/*LOGIN/LOGOUT*/

Route::post('/login','AuthController@login');
Route::get('/logout','AuthController@logout')->middleware('auth:api');

/*LOGIN/LOGOUT*/

// Sécurisation de la route
// Route::middleware(['auth:api','role:Admin|Producteur'])->prefix('produits')->group(function () {
 
//     Route::get('/', 'ProduitController@index'); 
//    Route::post('/', 'ProduitController@createOrUpdate'); 
// }); 

// Sécurisation de la route
// Route::middleware(['auth:api','role:Admin|Producteur'])->prefix('producteur')->group(function () {
 
//     Route::get('/produits', 'ProduitController@index'); 
//    Route::post('/', 'ProduitController@createOrUpdate'); 
// }); 

Route::middleware(['auth:api','role:Producteur'])->prefix('producteur')->group(function () {
 
    Route::get('/produits', 'ProduitController@getOfProducer'); 
   Route::post('/', 'ProduitController@createOrUpdate'); 
}); 


// Route::middleware(['auth:api','role:Producteur'])->prefix('producteur')->group(function () {
 
//         Route::get('/produits', 'ProduitController@getOfProducer'); 
//        Route::post('/', 'ProduitController@createOrUpdate'); 
//     }); 

Route::get('fruits', 'FruitsController@index');

Route::get('/', 'ProduitController@index');



//Route::get('Fruits', 'FruitsController@index');

//Route::get('users', 'UsersController@index');
