<?php

/*
|--------------------------------------------------------------------------
| ROUTES BROKERS
|--------------------------------------------------------------------------
|
| Rota para manipulação dos corretores
|
*/

Route::get('/listbrokers', 'BrokerController@index');

Route::post('/store', 'BrokerController@store');

Route::get('/layout', 'BrokerController@layout');

Route::get('/formbroker', 'BrokerController@formCreate');

Route::get('/show/{id}', 'BrokerController@show');
Route::put('/update/{id}', 'BrokerController@update');

Route::delete('/destroy/{id}', 'BrokerController@destroy');



/*
|--------------------------------------------------------------------------
| ROUTES CUSTOMMERS
|--------------------------------------------------------------------------
|
| Rota para manipulação dos Clientes
|
*/

Route::resource('/', 'CustomerController'); 

Route::get('/listcustomer', 'CustomerController@listCustomer'); 

Route::get('/formcustomer', 'CustomerController@formCustomerCreate');

Route::post('/store', 'CustomerController@store'); 

Route::get('/customer/show/{id}', 'CustomerController@show');

Route::put('/customer/update/{id}', 'CustomerController@update');

Route::delete('/customer/destroy/{id}', 'CustomerController@destroy');

/*
|--------------------------------------------------------------------------
| ROUTES SHARES
|--------------------------------------------------------------------------
|
| Rota para manipulação das AÇÕES
|
*/

Route::resource('/listshares', 'ShareController'); 

Route::get('/formshare', 'ShareController@formShare');

Route::post('/share/store', 'ShareController@store'); 

Route::get('/share/show/{id}', 'ShareController@show');
Route::put('/share/update/{id}', 'ShareController@update');

Route::delete('/share/destroy/{id}', 'ShareController@destroy');
