<?php

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

// Route::get('/', function () {
//     return view('welcome');
 
// });
// Route::get('/aboutPage', function () {
//     //  return view('welcome');
//     return '<h1>tedtyr</h1>';
//   });

  Route::get('/aboutPage', function () {
  return view('pages.aboutPages');
    
  });
  
  Route::get('/user/{id}/{name}', function ($Id,$name) {
    return '<h1>this is user '.$Id.'with name which is '.$name.'</h1>';
      
    });
//with controller
    Route::get('/', 'PagesController@index');
    Route::get('/about', 'PagesController@about');
    Route::get('/services', 'PagesController@services');
Route::resource('post','PostsController');