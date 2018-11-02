<?php

Use App\Client;
Use App\Product;
Use App\ClientProduct;

use Illuminate\Http\Request;

Route::get('clients', 'ClientController@index');
Route::get('clients/{Client}', 'ClientController@show');
Route::post('clients', 'ClientController@store');
Route::put('clients/{Client}', 'ClientController@update');
Route::delete('clients/{Client}', 'ClientController@delete');

Route::get('products', 'ProductController@index');
Route::get('products/{product}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::put('products/{product}', 'ProductController@update');
Route::delete('products/{product}', 'ProductController@delete');

Route::get('sales', 'ClientProductController@index');
Route::get('sales/{cart}', 'ClientProductController@show');
Route::post('sales', 'SaleController@store');
Route::put('sales/{cart}', 'ClientProductController@update');
Route::delete('sales/{cart}', 'ClientProductController@delete');
