<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarPelanggaranController;
use App\Http\Controllers\KasusController;
use App\Http\Controllers\KelasController;
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
})->middleware('auth');

Route::get('/about', function(){
    return ('XI PPLG 1');
});

// Route::get('/home', function(){  
//     return view('home');
// });

// Route::view('/homes', 'home' ,['name'=>''])->middleware('auth');
Route::get('/about', [AboutController::class, 'about'])->middleware('auth');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authincating'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/saveregister', [AuthController::class, 'saveregister'])->name('saveregister');                

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth']);

Route::get('/siswa', [SiswaController::class, 'index'])->middleware('auth');
Route::get('/guru', [GuruController::class, 'index'])->middleware('auth');
Route::get('/pelanggaran', [DaftarPelanggaranController ::class, 'index'])->middleware('auth');
Route::get('/kelas', [KelasController ::class, 'index'])->middleware('auth');
Route::get('/kasus', [KasusController ::class, 'index'])->middleware('auth');

// siswa

Route::get('/siswa/tambahsiswa', [SiswaController::class, 'tambahsiswa'])->middleware('auth');
Route::post('/insertsiswa', [SiswaController::class, 'insertsiswa'])->middleware('auth');
Route::get('/editsiswa/{id}', [SiswaController::class, 'editsiswa'])->middleware('auth');
Route::get('/hapussiswa/{id}', [SiswaController::class, 'hapussiswa'])->middleware('auth');
Route::put('/updatesiswa/{id}', [SiswaController::class, 'updatesiswa'])->middleware('auth');
Route::get('/detail/{id}', [SiswaController::class, 'detailsiswa'])->middleware('auth');

//guru

Route::get('/guru/tambahguru', [GuruController::class, 'tambahguru'])->middleware('auth');
Route::post('/insertguru', [GuruController::class, 'insertguru'])->middleware('auth');
Route::get('/editguru/{id}', [GuruController::class, 'editguru'])->middleware('auth');
Route::put('/updateguru/{id}', [GuruController::class, 'updateguru'])->middleware('auth');
Route::get('/hapusguru/{id}', [GuruController::class, 'hapusguru'])->middleware('auth');

//kelas

Route::get('/kelas/tambahkelas', [KelasController::class, 'tambahkelas'])->middleware('auth');
Route::post('/insertkelas', [KelasController::class, 'insertkelas'])->middleware('auth');
Route::get('/editkelas/{id}', [KelasController::class, 'editkelas'])->middleware('auth');
Route::put('/updatekelas/{id}', [KelasController::class, 'updatekelas'])->middleware('auth');
Route::get('/hapuskelas/{id}', [KelasController::class, 'hapuskelas'])->middleware('auth');

//pelanggaran
Route::get('/tambahpelanggaran', [DaftarPelanggaranController::class, 'tambahpelanggaran'])->middleware('auth');
Route::post('/insertpelanggaran', [DaftarPelanggaranController::class, 'insertpelanggaran'])->middleware('auth');
Route::get('/tampilkanpelanggaran/{id}', [DaftarPelanggaranController::class, 'tampilkanpelanggaran/{id}'])->middleware('auth');

//kasus

Route::get('/kasus/tambahkasus', [KasusController::class, 'tambahkasus'])->middleware('auth');
Route::post('/insertkasus', [KasusController::class, 'insertkasus'])->middleware('auth');
Route::get('/editkasus/{id}', [KasusController::class, 'editkasus'])->middleware('auth');
Route::put('/updatekasus/{id}', [KasusController::class, 'updatekasus'])->middleware('auth');
Route::get('/hapuskasus/{id}', [KasusController::class, 'hapuskasus'])->middleware('auth');

// Route::redirect('/pindah', '/about');
