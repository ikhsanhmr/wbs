<?php

use App\Models\Data;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ArchieveController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\Route as RoutingRoute;
use App\Http\Controllers\DataArchieveController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () 
{
    return view('home.index',[
        // DataController::class, 'index'
    ]);
})->name('home');
Route::post('/post', [DataController::class, 'store'])->name('post');

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/dataexport', [ExportController::class, 'dataexport'])->middleware('auth')->name('dataexport');

Route::get('/archieve', [ArchieveController::class, 'index'])->middleware('auth')->name('archieve');

Route::get('/archieve/{data:id}', [ArchieveController::class, 'show'])->middleware('auth')->name('archieveid');

Route::get('/dashboard/{data:id}', [DashboardController::class, 'show'])->middleware('auth')->name('dashid');

Route::get('/status', [DashboardController::class, 'changestatus'])->middleware('auth');

Route::get('/user', [UserController::class, 'index'])->middleware('auth')->name('user');
Route::get('/user/hapus/{user:id}', [UserController::class, 'destroy'])->middleware('auth')->name('hapususer');
Route::get('/user/edituser/{user:id}', [UserController::class, 'edituser'])->middleware('auth')->name('edituser');
Route::post('/user/update', [UserController::class, 'update'])->middleware('auth');
Route::get('/user/add', [UserController::class, 'add'])->middleware('auth');
Route::post('/user/store', [UserController::class, 'store'])->middleware('auth')->name('adduser');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



