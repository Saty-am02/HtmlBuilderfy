<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLogin;

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


Route::get('/', function () {
    return view('index');
});


Route::get('/signup',[UserLogin::class,'register']);
Route::post('add',[UserLogin::class,'add'])->name('user.add');


Route::get('/login',[UserLogin::class,'login']);
Route::post('/login',[UserLogin::class,'LoginUser'])->name('login');
//Route::post('saveLogin',[UserLogin::class,'saveLogin'])->name('login');

Route::get('/about',[UserLogin::class,'about']);
Route::get('/index1',[UserLogin::class,'index1']);
Route::get('/indexafter',[UserLogin::class,'indexafter']);
Route::get('/htmlcodegen',[UserLogin::class,'htmlcodegen']);
Route::get('/htmltable',[UserLogin::class,'htmltable']);


Route::get('/satyam',[UserLogin::class,'satyam']);
Route::get('/dhaivat',[UserLogin::class,'dhaivat']);
Route::get('/sneha',[UserLogin::class,'sneha']);
Route::get('/divyanka',[UserLogin::class,'divyanka']);
Route::get('/subramanya',[UserLogin::class,'subramanya']);
Route::get('/prasanna',[UserLogin::class,'prasanna']);
