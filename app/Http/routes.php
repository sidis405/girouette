<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', '\Girouette\Http\Controllers\HomeController@index');