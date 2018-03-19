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
    $img = Image::make('images/'.$category)->resize(400, 400);
    $img->text($category,40,30,function($font){
            $font->file('D:/abc/public/huruf.ttf');
          $font->size(24);
    });
     $img->text($color,40,350,function($font){
            $font->file('D:/abc/public/huruf.ttf');
          $font->size(24);

    });
     $img->text('Ukuran',40,80,function($font){
            $font->file('D:/abc/public/huruf.ttf');
          $font->size(24);
    });
     $img->text('$category',40,100,function($font){
            $font->file('D:/abc/public/huruf.ttf');
          $font->size(24);
    });


        $img->text('Rp 99.000',280,380,function($font){
            $font->file('D:/abc/public/huruf.ttf');
          $font->size(24);
    }); 


      $img->text('CottaClaire',0,380,function($font){
            $font->file('D:/abc/public/huruf.ttf');
          $font->size(43);
    });




    ;

    return $img->response('jpg');
});


Route::resource('search',"searchController");
Route::get('data',"searchController@getData");

Route::get('/gr', function()
{
    $category = request('cate');
    $color = request('color');
    $img = Image::make('images/01.png')->resize(400, 400);
   
    return $img->response('jpg');
});


Route::get('/gr2  ', function()
{
    $category = request('cate');
    $color = request('color');
    $img = Image::make('images/01.png')->resize(400, 400);
    $img->text('CottaClaire',40,350,function($font){
          $font->file(public_path('fonts/huruf.otf')); 
          $font->size(44);
          $font->color(456);
          $font->angle(45);
        //    $font->align('center');
//$font->valign('top');
    });
    return $img->response('jpg');
});


Route::get('/test', function()
{
   
   
echo "test";
});


Route::get('/font', function()
{
   
   
echo "font list";
});


Route::get('fileUpload', function () {

    return view('fileUpload');

});

Route::post('fileUpload', ['as'=>'fileUpload','uses'=>'HomeController@fileUpload']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('barcode',function(){


echo DNS1D::getBarcodeSVG("4445645656", "PHARMA2T");
echo DNS1D::getBarcodeHTML("4445645656", "PHARMA2T");
echo DNS1D::getBarcodePNGPath("4445645656", "PHARMA2T");
echo DNS1D::getBarcodeSVG("4445645656", "C39");





});

Route::get('intervention-resizeImage',['as'=>'intervention.getresizeimage','uses'=>'FileController@getResizeImage']);
Route::post('intervention-resizeImage',['as'=>'intervention.postresizeimage','uses'=>'FileController@postResizeImage']);

Route::resource('post', 'Admin\\PostsController');
Route::resource('product', 'productController');