<?php

//Pagina principal
Route::view('/', 'index');

//Pagina por defecto, login y registro
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>
