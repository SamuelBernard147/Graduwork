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

// Route::get('/home',function(){
//     return 'Hello Laravel';
// });

Route::get('/', function () {
    return view('home');
    //return view('welcome');
    //get data dari table blog
    // $blog = App\Blog::all();
    // return view('home',['blog' => $blog]);

});

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/sekolah', 'SekolahController@index')->name('sekolah');

Route::get('/lulusan', 'LulusanController@index')->name('lulusan');

Route::get('/perusahaan', 'PerusahaanController@index')->name('perusahaan');

Route::get('/lowongan', 'LowonganController@index')->name('lowongan');

Route::get('/jobfair', 'JobFairController@index')->name('jobfair');

// Auth::routes();
// Route::get('about',function(){
//     return view('about');
// });

// Route::get('/nyobablade/{id}', function($id){
//     return view('blade');
//     $data = 'Saya nomer'.$id;
//     return view('layouts.blade',['data'=> $data]);
// });

// Route::get('/profile',function(){
//     return view ('profile');
// });

// $image = $request -> store -> img ->store('public/img')
// $image = image -> basename($image)

// Route::get('/home', 'BlogController@index')->name('home');

// Route::resource('/admin','BlogController');

// Route::get('/show/{id}','BlogController@show')->name('details');

// Route::get('/delete/{id}','BlogController@delete')->name('delete');

// Route::get('/edit/{id}','BlogController@edit')->name('edit');

// Route::post('/update{id}','BlogController@update')->name('update');