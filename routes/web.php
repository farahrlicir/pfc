<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CalendarController;
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

Route::get('/students/search', [StudentController::class, 'search'])->name('students.search');

 



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
Route::resource('parents', ParentController::class)->middleware('auth');
Route::resource('teachers', TeacherController::class)->middleware('auth');
Route::resource('subjects', SubjectController::class)->middleware('auth');


Route::get('/getevent', [CalendarController::class, 'getevent'])->name('fullcalendar')->middleware('auth');
Route::post('/createevent',[CalendarController::class,'createEvent'])->name('createevent')->middleware('auth');
Route::post('/deleteevent',[CalendarController::class,'deleteEvent'])->name('deleteevent')->middleware('auth');

Route::resource('products', ProductController::class);

Route::get('/welcome', [WelcomeController::class, 'index']);
Route::post('/welcome', [WelcomeController::class, 'store'])->name('contact.us.store');

Route::resource('grades',   GradeController::class)->middleware('auth');


require __DIR__.'/auth.php';
            