<?php

use Illuminate\Support\Facades\Route;


// Route::get('/home', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::resource('usuarios', 'UserController');

Route::resource('sucursales', 'BranchOfficeController');

Route::resource('bancos','BankController');
Route::resource('tarjetas','CardController');

Route::resource('condiciones','ConditionController');

Route::resource('locaciones', 'LocationController');

Route::resource('comercios','CommerceController');

Route::resource('sorteos', 'RaffleController');

Route::resource('parametros','ParametersController');

Route::resource('grupos','PrizeGroupController');
Route::resource('premios','PrizeController');

Route::resource('pagos','PaymentMethodController');

Route::resource('facturas','InvoiceController');

Route::resource('tickets','TicketController');


Route::get('facturasListado','FacturasListadoController@index');
Route::get('facturasListado/{invoice_id}','FacturasListadoController@show')->name('factura.show');

Route::get('/sorteos/resultado/{id}','ResultController@index');
Route::get('/winner/{raffle_id}/{prize_id}', 'ResultController@winner')->name('winner');

//Cliente
Route::get('facturasRegistradas','FacturasRegistradasController@index');
Route::get('/voucher/{id}','PDFController@voucher');

//Descarga Excel
Route::get('user-list-excel', 'UserController@exportExcel')->name('users.excel');
Route::get('commerce-list-excel', 'CommerceController@exportExcel')->name('commerces.excel');


//prueba login
// Route::get('/login2', function(){
//     return view('auth.login2');
// });

// Route::get('/login3', function(){
//     return view('auth.login3');
// });

