<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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

//top画面表示
Route::get('/', [QuizController::class, 'top'])->name('top');
//quiz画面表示
Route::get('/quiz', [QuizController::class, 'show'])->name('show');

Route::get('/quiz/create', [QuizController::class, 'create'])->name('create');
Route::post('/quiz', [QuizController::class, 'store'])->name('store');

Route::delete('/quiz/{id}', [QuizController::class, 'delete'])->name('delete');