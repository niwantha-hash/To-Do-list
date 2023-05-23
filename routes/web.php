<?php
use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/students',[studentController::class,'index'])->name('students.index');
Route::get('/students/create',[studentController::class,'create'])->name('students.create');
Route::post('/students',[studentController::class,'store'])->name('students.store');
Route::get('/students/{student}/edit',[studentController::class,'edit'])->name('students.edit');
Route::put('/students/{student}',[studentController::class,'update'])->name('students.update');
Route::delete('/students/{student}',[studentController::class,'destory'])->name('students.destory');
Auth::routes();
Route::get('/home',[App\Http\Controllers\studentController::class,'index'])->name('students.index');
