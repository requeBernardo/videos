<?php

Route::view('/', 'home')->name('home'); 
Route::view('/quienes-somos', 'about')->name('about');
Route::resource('portafolio', 'ProjectController')->names('projects')->parameters(['portafolio' => 'project']);

Route::view('/contacto', 'contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');
Auth::routes(['register'=> false]);

Route::get('/home', 'HomeController@index')->name('home');
