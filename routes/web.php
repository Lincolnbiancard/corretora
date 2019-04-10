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

