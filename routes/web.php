<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\PerusahaanController;

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

Route::get('/',[ProfileController::class, 'profile'])->name('profile')->middleware('auth');

// bagian login
Route::get('/login',[MasukController::class, 'login'])->name('login');
Route::post('/masukuser',[MasukController::class, 'masukuser'])->name('masukuser');

Route::get('/regis',[MasukController::class, 'regis'])->name('regis');
Route::post('/regisuser',[MasukController::class, 'regisuser'])->name('regisuser');

Route::get('/logout',[MasukController::class, 'logout'])->name('logout');
// akhir login


// awal companies
Route::get('/companies',[CompaniesController::class, 'companies'])->name('companies')->middleware('auth');
Route::get('/tambahcompanies',[CompaniesController::class, 'tambahcompanies'])->name('tambahcompanies');
Route::post('/insertcompanies',[CompaniesController::class, 'insertcompanies'])->name('insertcompanies');
Route::get('/tampilkancompanies/{id}',[CompaniesController::class, 'tampilkancompanies'])->name('tampilkancompanies');
Route::post('/editcompanies/{id}',[CompaniesController::class, 'editcompanies'])->name('editcompanies');
Route::get('/delete/{id}',[CompaniesController::class, 'delete'])->name('delete');



Route::get('/company',[PerusahaanController::class, 'company'])->name('company')->middleware('auth');
Route::get('/tambahcompany',[PerusahaanController::class, 'tambahcompany'])->name('tambahcompany');
Route::post('/insertcompany',[PerusahaanController::class, 'insertcompany'])->name('insertcompany');
Route::get('/tampilkancompany/{id}',[PerusahaanController::class, 'tampilkancompany'])->name('tampilkancompany');
Route::post('/editcompany/{id}',[PerusahaanController::class, 'editcompany'])->name('editcompany');
Route::get('/hapus/{id}',[PerusahaanController::class, 'hapus'])->name('hapus');



Route::group(['middleware'=>['auth','ceklevel:admin']], function(){
    Route::get('/companies',[CompaniesController::class, 'companies'])->name('companies');
    Route::get('/company',[PerusahaanController::class, 'company'])->name('company');


});






