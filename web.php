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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gd/{cate}/{color}/{size}', function()
{
    $category = request('cate');
    $color = request('color');

    $img = Image::make('images/01.png')->resize(400, 400);

    return $img->response('jpg');
});




Route::get('/image', function()
{
   

    $img = Image::make('images/01.png')->resize(400, 400);

    return $img->response('jpg');
});


