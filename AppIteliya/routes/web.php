<?php

use App\Models\Administrateur;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministrateurController;
use App\Models\Employes;
use App\Http\Controllers\EmployesController;
use App\Http\Controllers\PagesController;
use App\Models\Permissions;
use App\Http\controllers\PermissionsController;
use App\Http\Controllers\PointagesController;

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
    return view('welcomeiteliya');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listeEmployes', [App\Http\Controllers\HomeController::class, 'liste'])->name('listeEmployes');
Route::get('/welcomeiteliya', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcomeiteliya');




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
Route::resource('/pointages', PointagesController::class);



Route::get('/permission-register', [App\Http\Controllers\PermissionsController::class, 'viewpermission'])->name('permission');
Route::post('/register-permission', [App\Http\Controllers\PermissionsController::class, 'registerpermission'])->name('permission.create');
Route::get('/listepermission', [App\Http\Controllers\PermissionsController::class, 'listePermission'])->name('administrateurs.lespermissions');
Route::get('/permissions', [App\Http\Controllers\EmployesController::class,'viewpermission'])->name('employes.permissionCreate');



Route::get('/absence-register', [App\Http\Controllers\AbsencesController::class, 'viewabsence'])->name('absence');
Route::post('/register-absence/{id}', [App\Http\Controllers\AbsencesController::class, 'registerabsence'])->name('absence.create');

Route::get('/justifierabsence', [App\Http\Controllers\AbsencesController::class, 'listeAbsence'])->name('administrateurs.justifierAbsence');
Route::get('/absences', [App\Http\Controllers\EmployesController::class,'viewabsence'])->name('absences.absenceCreate');
Route::get('image/{filename}', 'HomeController@displayImage')->name('image.displayImage');




Route::get('/pointages', [App\Http\Controllers\PointagesController::class, 'index'])->name('pointages.pointagesCreate'); 
Route::get('/pointagesenvoi', [App\Http\Controllers\PointagesController::class, 'store'])->name('pointages.pointagesarrivee');
Route::get('/pointerdepart/{id}', [App\Http\Controllers\PointagesController::class, 'edit'])->name('pointages.editer');
Route::patch('/pointerdepartupdate/{id}', [App\Http\Controllers\PointagesController::class, 'update'])->name('pointages.departupdate');
Route::get('/listestouspointages', [App\Http\Controllers\PointagesController::class, 'touslespointages'])->name('pointages.detoulemonde');




