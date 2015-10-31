<?php

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// // Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', '\Girouette\Http\Controllers\HomeController@index');

Route::get('image/{path}', function (League\Glide\Server $server, Illuminate\Http\Request $request, $path) {

    // dd($request);
    // dd(public_path());

    $server->outputImage($request);

})->where('path', '.+');

Route::group(array('prefix' => 'admin', 'middleware' => 'auth'), function () {

    Route::post('model/upload_image', '\Girouette\Http\Controllers\Admin\ImagesController@store');
    Route::post('model/get_images', '\Girouette\Http\Controllers\Admin\ImagesController@index');


    Route::get('/', function(){
        return redirect()->to('admin/progetti');
    });

    #   albums ROUTES

    Route::get('progetti', [
        'as'    => 'admin_albums',
        'uses'  => '\Girouette\Http\Controllers\Admin\AlbumsController@index'
        ]);

    Route::get('progetti/crea', [
        'as'    => 'admin_create_albums',
        'uses'  => '\Girouette\Http\Controllers\Admin\AlbumsController@create'
        ]);

    Route::post('progetti', [
        'as'    => 'admin_store_albums',
        'uses'  => '\Girouette\Http\Controllers\Admin\AlbumsController@store'
        ]);

    Route::get('progetti/{id}/modifica', [
        'as'    => 'admin_edit_albums',
        'uses'  => '\Girouette\Http\Controllers\Admin\AlbumsController@edit'
        ]);

    Route::post('progetti/{id}', [
        'as'    => 'admin_store_albums',
        'uses'  => '\Girouette\Http\Controllers\Admin\AlbumsController@update'
        ]);

    Route::post('progetti/{id}/rimuovi', [
        'as'    => 'admin_delete_albums',
        'uses'  => '\Girouette\Http\Controllers\Admin\AlbumsController@destroy'
        ]);

    Route::delete('progetti/{id}/delete_image', [
        'as'    => 'admin_delete_albums',
        'uses'  => '\Girouette\Http\Controllers\Admin\AlbumsController@destroyImage'
        ]);

});