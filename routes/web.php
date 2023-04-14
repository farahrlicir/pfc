<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PsychologistController;






 

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
  return view('empty');
});


Route::get('/welcome', function () {
  return view('welcome');
});


//Route::get('/dashboard', function () {
  // return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/dashboard', [DashboardController::class, 'count'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('schools', SchoolController::class)->middleware('auth');



 



 Route::resource('psychologists', PsychologistController::class)->middleware('auth');



Route::get('/master',function(){
  return view('master');
});

Route::get('/new',function(){
  return view('new');
});

Route::resource('directors', DirectorController::class)->middleware('auth');
Route::resource('classrooms', ClassroomController::class)->middleware('auth');

Route::resource('libraries', LibraryController::class)->middleware('auth');
Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('parents', ParentController::class);

Route::resource('products', ProductController::class);

require __DIR__.'/auth.php';
            