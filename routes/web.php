<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\ValorantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\BecomeController;
use App\Http\Controllers\UserDetailController;
use App\Http\Middleware\MustAdmin;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// tampilan
Route::get('/about', [AboutController::class, 'about'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'must-admin']);
Route::get('/index', [IndexController::class, 'tampilan'])->middleware('auth');

// login & logout
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authincating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// register
Route::get('/register', [AuthController::class, 'register']);
Route::post('/saveregister', [AuthController::class, 'saveregister'])->name('saveregister');                

// Login With Google
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('googlelogin');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle'])->name('googlelogincallback');


// Halaman Game
Route::get('/valorant', [ValorantController::class, 'index'])->middleware('auth');

// Valorant Crud
Route::get('/dashboard/valo', [ValorantController::class, 'dashvalo'])->middleware('auth', 'must-admin')->name('dashvalo');
Route::get('/dashboard/tdvalo', [ValorantController::class, 'tdvalo'])->middleware('auth', 'must-admin')->name('tdvalo');
Route::post('/dashboard/insertvalo', [ValorantController::class, 'insertvalo'])->middleware('auth', 'must-admin')->name('insertvalo');
Route::get('/dashboard/editvalo/{id}', [ValorantController::class, 'editvalo'])->middleware('auth', 'must-admin')->name('editvalo');
Route::post('/dashboard/updatevalo/{id}', [ValorantController::class, 'updatevalo'])->middleware('auth', 'must-admin')->name('updatevalo');
Route::get('/dashboard/deletevalo/{id}', [ValorantController::class, 'deletevalo'])->middleware('auth', 'must-admin')->name('deletevalo');

// Data Pemain
Route::get('/data-pemain', [PemainController::class, 'dpemain'])->middleware('auth', 'must-admin');
Route::get('/edit-pemain', [PemainController::class, 'edpemain'])->middleware('auth', 'must-admin');
Route::get('/tambah-pemain', [PemainController::class, 'tdpemain'])->middleware('auth', 'must-admin');





Route::post('/setting/updateplayer/{id}', [UserController::class, 'updateplayer'])->middleware('auth')->name('updateplayer');
Route::get('/setting', [UserController::class, 'index'])->name('setting')->middleware('auth');
Route::post('/settings', [UserController::class, 'edit'])->middleware('auth');
Route::get('/userdetail/{id}', [UserDetailController::class, 'userdetail'])->middleware('auth');
Route::get('/become', [BecomeController::class, 'become']);












// Route::redirect('/pindah', '/about');
