<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('pages/welcome');
});

// for static page
//Route::get('/test', function () {
//  $newVar = 'Hello world!';
//  return view('test', compact('newVar'));
//});

//Route::get('/projects', function () {
//    return view('pages/projects');
//});

// using controller
Route::get('/projects', 'ProjectsController@getContent');
