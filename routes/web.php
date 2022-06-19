<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SessionModify;
use App\Http\Controllers\LoginController;


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
    return redirect('home');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/page', function () {
    return view('sandbox');
});
// Session modifiers
Route::get('/session/set/language', [SessionModify::class, 'setLanguage']);
Route::get('/session/set/theme', [SessionModify::class, 'setTheme']);
