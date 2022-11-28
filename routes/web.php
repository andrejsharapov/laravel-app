<?php

use Illuminate\Support\Facades\Route;

// home page
Route::get('/', function () {
  return view('pages/welcome');
});

// other pages with a controller
Route::get('/modules', 'ModulesController@getContent');
Route::get('/page', 'PagesController@getContent');

// routes for practical works
//Route::get('practices/spa-application', function () {
//  return view('practices/spa-application/login');
//});
//Route::get('practices/spa-application', 'practices/spa-application/login');
