<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;



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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('alumnos/index',function (){return view('admin.alumnos.index');})->name('alumnos_index');
Route::get('alumnos/index', [AlumnosController::class, 'index'])->name('alumnos_index');
Route::get('alumnos/crear', [AlumnosController::class, 'create'])->name('alumnos_crear');
Route::get('alumnos/guardar', [AlumnosController::class, 'store'])->name('alumnos_guardar');
Route::get('alumnos/eliminar/{id}', [AlumnosController::class, 'destroy'])->name('alumnos_eliminar');
Route::get('alumnos/modificar/{id}', [AlumnosController::class, 'edit'])->name('alumnos_modificar');
Route::get('alumnos/modificar/guardar/{id}', [AlumnosController::class, 'update'])->name('alumnos_modificar_guardar');

require __DIR__.'/auth.php';
