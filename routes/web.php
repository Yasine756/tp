<?php

use App\Http\Controllers\CoursController;
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
    return view('welcome');
});
Route::resource('/cours',CoursController::class);
Route::get('/salam',function(){
    return response()->file('document.pdf');//download
    // return response()->download('storage/profile/ava.jpg','',[],'inline');//afficher
});