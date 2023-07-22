<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Companycontroller;
use App\Http\Controllers\employeesController;

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

Route::get('/', [Companycontroller::class, 'index'])->name('companys.index');
Route::get('/companys/create', [Companycontroller::class, 'create'])->name('companys.create');
Route::post('/companys/store', [Companycontroller::class, 'store'])->name('companys.store');
Route::get('/companys/{companys_id}/edit', [Companycontroller::class, 'edit'])->name('companys.edit');
Route::put('/companys/{companys_id}/update', [Companycontroller::class, 'update'])->name('companys.update');
Route::delete('/companys/{companys_id}/delete', [Companycontroller::class, 'delete'])->name('companys.delete');

Route::get('/employees', [employeesController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [employeesController::class, 'create'])->name('employees.create');
Route::post('/employees/store', [employeesController::class, 'store'])->name('employees.store');
Route::get('/employees/{id}/edit', [employeesController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{id}/update', [employeesController::class, 'update'])->name('employees.update');
Route::delete('/employees/{id}/delete', [employeesController::class, 'delete'])->name('employees.destroy');
