<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SchoolController;





 

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('schools', SchoolController::class);


 Route::middleware('auth')->group(function () {
  Route::get('/student-create', [StudentController::class, 'create'])->name('student.create');
  Route::post('/student-create', [StudentController::class, 'store'])->name('student.create');

 });

 

 Route::middleware('auth')->group(function () {
  Route::get('/setting-create', [SettingController::class, 'create'])->name('setting.create');
  Route::post('/setting-create', [SettingController::class, 'store'])->name('setting.create');
 });

 //post


 Route::get('posts', [PostController::class, 'index'])
    ->name('posts')
    ->middleware('auth');
Route::get('posts/create', [PostController::class, 'create'])
    ->name('posts.create')
    ->middleware('auth');
Route::post('posts', [PostController::class, 'store'])
    ->name('posts.store')
    ->middleware('auth');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->middleware('auth');
Route::put('posts/{post}', [PostController::class, 'update'])
    ->name('posts.update')
    ->middleware('auth');
Route::delete('posts/{post}', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->middleware('auth');



require __DIR__.'/auth.php';
Route::resource('companies', CompanyController::class);


Route::fallback(function(){
  return view('');
});

