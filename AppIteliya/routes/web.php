<?php

use App\Models\Administrateur;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrateurController;
use App\Models\Employes;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\PagesController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listeEmployes', [App\Http\Controllers\HomeController::class, 'liste'])->name('listeEmployes');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');




Route::get('/admin-register', [App\Http\Controllers\AdministrateurController::class, 'viewAdmin'])->name('admin.foradmin');
Route::post('/register-admin',[App\Http\Controllers\AdministrateurController::class, 'enregisAdmin'])->name('admin.create');
Route::get('/administrateurs', [App\Http\Controllers\AdministrateurController::class, 'dasboard'])->name('administrateurs.dashboard');
Route::get('/listeEmployes', [App\Http\Controllers\EmployesController::class, 'listeEmployes'])->name('administrateurs.listeEmployes');
// Route::get('/listeEmployes',[App\Http\Controllers\EmployesController::class, 'listeEmployes'])->name('administrateurs.listeEmployes');


Route::get('/employ-register', [App\Http\Controllers\EmployesController::class, 'viewEmploy'])->name('employ.foradmin');
Route::get('/employes', [App\Http\Controllers\AdministrateurController::class, 'dasboard'])->name('employes.dashboard');
Route::post('/register-employ',[App\Http\Controllers\EmployesController::class, 'registerEmploye'])->name('employ.create');
Route::get('/employesCreate',[App\Http\Controllers\EmployesController::class, 'ajouter'])->name('employes.employesCreate');
Route::resource('/administrateurs', AdministrateurController::class);
Route::resource('/employes', EmployesController::class);


Route::get('/heure-register', [App\Http\Controllers\PagesController::class, 'viewHeure'])->name('pointages.heuresCreate');
Route::post('/register-heure',[App\Http\Controllers\PagesController::class, 'enregistrerHeures'])->name('heure.create');
  