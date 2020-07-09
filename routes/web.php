<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/home', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::resource('usuarios', 'userController');

Route::resource('sucursales', 'branchOfficeController');

Route::resource('bancos','BankController');
Route::resource('tarjetas','cardController');

Route::resource('condiciones','conditionController');

Route::resource('locaciones', 'locationController');

Route::resource('comercios','commerceController');

Route::resource('sorteos', 'raffleController');

Route::resource('parametros','parametersController');

Route::resource('grupos','prizeGroupController');
Route::resource('premios','prizeController');

Route::resource('pagos','paymentMethodController');

Route::resource('facturas','invoiceController');


Route::resource('tickets','TicketController');


Route::get('facturasListado','facturasListadoController@index');
Route::get('facturasListado/{invoice_id}','facturasListadoController@show')->name('factura.show');

Route::get('/sorteos/resultado/{id}','ResultController@index');
Route::get('/winner/{raffle_id}/{prize_id}', 'ResultController@winner')->name('winner');

//Cliente
Route::get('facturasRegistradas','facturasRegistradasController@index');
Route::get('/voucher/{id}','PDFController@voucher');

//Descarga Excel
Route::get('user-list-excel', 'userController@exportExcel')->name('users.excel');
Route::get('commerce-list-excel', 'commerceController@exportExcel')->name('commerces.excel');


//prueba login
Route::get('/login2', function(){
    return view('auth.login2');
});

Route::get('/login3', function(){
    return view('auth.login3');
});

