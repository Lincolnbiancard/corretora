<?php


/*
|--------------------------------------------------------------------------
| ROUTE INDEX
|--------------------------------------------------------------------------
|
| Rota Inicial do sistema
|
*/

Route::get('/init', 'HistoryController@init');

Route::get('/', function(){
    return redirect('init');
});

/*
|--------------------------------------------------------------------------
| ROUTES BROKERS
|--------------------------------------------------------------------------
|
| Rota para manipulação dos corretores
|
*/

Route::get('/layout', 'BrokerController@layout');

Route::get('/formbroker', 'BrokerController@formCreate');

Route::resource('/broker', 'BrokerController');



/*
|--------------------------------------------------------------------------
| ROUTES CUSTOMERS
|--------------------------------------------------------------------------
|
| Rota para manipulação dos Clientes
|
*/
 
Route::get('/csv', 'CustomerController@csv');

Route::post('/upload', 'CustomerController@upload');

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

Route::resource('/share', 'ShareController');

Route::get('/formshare', 'ShareController@formShare');


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

Route::post('/search/{param}', 'SearchController@search');

Route::get('/listbought', 'HistoryController@listBought');


