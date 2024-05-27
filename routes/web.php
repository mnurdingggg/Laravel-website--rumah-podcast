<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rumahpodcastcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[LayoutController::class,'index'])->middleware('auth');
Route::get('/home',[LayoutController::class,'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function(){
    Route::get('login','index')->name('login');
    Route::post('/login/proses','proses');
    Route::get('/logout','logout');
  });

  Route::get('/rumahpodcast',[rumahpodcastcontroller::class,'index']);
Route::get('/rumahpodcast',[rumahpodcastcontroller::class,'index']);
Route::get('/dasboard',[rumahpodcastcontroller::class,'dasboard']);
Route::get('/create',[rumahpodcastcontroller::class,'create']);
Route::post('/store',[rumahpodcastcontroller::class,'store']);
Route::get('/lihat/{id}',[rumahpodcastcontroller::class,'lihat']);
Route::get('/download/{Foto}',[rumahpodcastcontroller::class,'download']);
Route::delete('/rumahpodcast/{id}', [rumahpodcastcontroller::class,'destroy']);
Route::get('/rumahpodcast/{id}/edit',[rumahpodcastcontroller::class,'edit']);






Route::group(['middleware'=>['cekUserLogin:1']],function(){
    Route::get('/userdata',[rumahpodcastcontroller::class,'lihatuser']);
    Route::put('/rumahpodcast/{id}',[rumahpodcastcontroller::class,'update']);
Route::get('/edituser/{id}',[rumahpodcastcontroller::class,'edituser']);
Route::put('/updateuser/{id}',[rumahpodcastcontroller::class,'updateuser']);
Route::delete('/deleteuser/{id}',[rumahpodcastcontroller::class,'destroyuser']);
});

Route::group(['middleware'=>['cekUserLogin:2']],function(){
  
  
});
Route::group(['middleware'=>['cekUserLogin:4']],function(){
  
});

Route::group(['middleware'=>['cekUserLogin:3']],function(){
  
Route::get('/user',[rumahpodcastcontroller::class,'indexuser']);    
});
Route::get('/user',[rumahpodcastcontroller::class,'indexuser']);       



Route::post('/user/store',[rumahpodcastcontroller::class,'storeuser']);



Route::get('/profil',[rumahpodcastcontroller::class,'profil']);
