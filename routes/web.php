<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controller\Democontroller;
use App\Http\Controllers\RegistrationController;

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

//  Route::get('/{name?}',function ($name = null) {
//       $demo ="<h2>This is First Laravel Page </h2>";
//       $data = compact ('name','demo');
//       return view('home')->with($data);
//  });
  //Route::get('/',[Democontroller::class,'index']);
 Route::get('/register', [RegistrationController::class, 'index']);
 Route::post('/r',[RegistrationController::class, 'register'])->name('register');