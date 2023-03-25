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

Route::get('createPdf', function(){
  // $pdf = App::make('snappy.pdf.wrapper');
  // $pdf->loadHTML('<h1>Test</h1>');
  // return $pdf->inline();
  $pdf = PDF::loadHTML('<h1>First PDF</h1>');
  return $pdf->download('invoice.pdf');
 });


Route::get('/',function(){
   return view('front/index');
});

Route::get('/product/{id}','ProductController@detail');


Route::get('/about',function(){
   return view('front/about');
});
Route::get('/authentication',function(){
  return view('front.authentication');
});

Route::get('/export',function(){
  return view('front.export');
});
Route::get('/contact',function(){
  return view('front.contact');
});
Route::get('/pdf',function(){
  return view('front.pdf');
});



Route::get('/authentication', 'FrontController@index');

Route::post('/verifyproduct', 'ProductcodeController@verifyproduct');
Route::get('/detail/{id}','ProductController@dc');
Route::get('/ramp/{id}','ProductController@ramp');
Route::get('createvisiter/{count}', 'FrontController@createvisiter');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// \Auth::loginUsingId(3);
Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function(){
  Route::get('/',function(){
    return  redirect ('admin/dashboard');
  });
  Route::get('/dashboard',function(){
    return view('admin.index');
  });

  Route::get('index',function(){
    return view('admin.index');
  });

  Route::get('/product',function(){
    return view('admin.product');
  });

  Route::get('/view','ProductController@code');

  // Route::get('/codepage',function(){
  //   return view('admin.genrate');
  // });
  Route::get('/codepage', 'ProductcodeController@genereateCode');
  Route::get('/getPDF/{date}', 'ProductcodeController@getPDF');

  Route::post('/ajaxAddProduct', 'ProductController@insert');
  Route::any('/check', 'ProductcodeController@check');
  Route::get('/code', 'ProductController@code');
  Route::get('/delete/{id}', 'ProductController@delete');
  Route::get('/edit/{id}', 'ProductController@edit');
  Route::post('/updateproduct/{id}', 'ProductController@updateproduct');
  Route::any('/imageupdate', 'ProductController@imageupdate');
  Route::get('/categoery',function(){
    return view('admin.categoery');
  });
Route::Any('categoeryinsert','CategoeryController@store');
});
