<?php

use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\datainsert;
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

$posts =[
    1=>[
        "title" => "power rangers"
    ],
    2=>[
        "title" => "abiyum nanum",
        "type" => "serial"
    ]
    ];

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return view('home.testworld');
})->name('test.home');

Route::get('/num/{num}', function($num){
    return $num;
})->where(['num'=>'[0-9]+']);  //condition to allow number only


Route::get('/posts',function() use($posts){
    // return response()-> json($posts);
    return dd($posts);

}) ->name('test.post');

Route::get('/testform',function(){
    return view('register');
});

Route::post('/insertdata', [datainsert::class,'inserdata']);

// Route::resource('/crudpost',[crudcontroller::class, '']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
    return view('home.testworld');
})->name('test.home');

Route::get('/num/{num}', function($num){
    return $num;
})->where(['num'=>'[0-9]+']);  //condition to allow number only


Route::get('/posts',function() use($posts){
    // return response()-> json($posts);
    return dd($posts);

}) ->name('test.post');

Route::get('/testform',[datainsert::class,'homepage']);
Route::post('datainsert', [datainsert::class,'inserdata']);

// Route::resource('/crudpost',[crudcontroller::class, '']);