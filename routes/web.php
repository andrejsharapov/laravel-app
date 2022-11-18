<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('pages/welcome');
});

// using controller
Route::get('/modules', 'ModulesController@getContent');
Route::get('/projects', 'PagesController@getContent');

