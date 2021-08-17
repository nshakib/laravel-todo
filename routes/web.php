<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-08-17 23:29:48
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-08-18 00:12:02
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

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



Route::get('/', [TasksController::class, 'index'])->name('index');
//Route::resource('task', [TasksController::class]);
Route::resource('task', TasksController::class);

