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

Route::post('/broker/store', 'BrokerController@store');

Route::get('/layout', 'BrokerController@layout');

Route::get('/formbroker', 'BrokerController@formCreate');

Route::get('/show/{id}', 'BrokerController@show');
Route::put('/update/{id}', 'BrokerController@update');

Route::delete('/destroy/{id}', 'BrokerController@destroy');



/*
|--------------------------------------------------------------------------
| ROUTES CUSTOMERS
|--------------------------------------------------------------------------
|
| Rota para manipulação dos Clientes
|
*/
 
Route::get('/formcustomer', 'CustomerController@formCustomerCreate');

Route::resource('/customer', 'CustomerController');

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


/*
|--------------------------------------------------------------------------
| ROUTES HISTORY
|--------------------------------------------------------------------------
|
| Rota paara COMPRA E VENDA DE AÇÕES 
|
*/

Route::resource('/listhistory', 'HistoryController'); 

Route::get('/formhistory', 'HistoryController@formHistory');

Route::post('/history/store', 'HistoryController@store'); 

Route::get('/history/show/{id}', 'HistoryController@show');
Route::put('/history/update/{id}', 'HistoryController@update');

Route::delete('/history/destroy/{id}', 'HistoryController@destroy');

Route::post('/listhistory/{param?}', 'HistoryController@search');


