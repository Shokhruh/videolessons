<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'main'])->name('dashboardPage');
    Route::get('/login', [\App\Http\Controllers\AdminController::class, 'login'])->name('loginPage');
    Route::post('/authenticate', [\App\Http\Controllers\AdminController::class, 'authenticate'])->name('authenticate');
    Route::post('/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
    Route::get('/profile/{user}', [\App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::resource('courses', \App\Http\Controllers\CourseController::class);
    Route::resource('fields', \App\Http\Controllers\FieldController::class);
    Route::resource('videos', \App\Http\Controllers\VideoController::class);
    Route::resource('docs', \App\Http\Controllers\DocController::class);


    Route::get('/lockscreen', function () {
        return view('backend.dashboard.lock');
    })->name('lockscreen');

    Route::post('/unlock', [\App\Http\Controllers\AdminController::class, 'unlock'])->name('unlock');
});

Route::get('/', [\App\Http\Controllers\PageController::class, 'main'])->name('mainPage');
Route::get('/courses', [\App\Http\Controllers\PageController::class, 'courses'])->name('coursesPage');
Route::get('/courses/{course}', [\App\Http\Controllers\PageController::class, 'course'])->name('coursePage');
Route::get('/courses/{course}/videos/{video}', [\App\Http\Controllers\PageController::class, 'video'])->name('videoPage');
Route::get('/instructors', [\App\Http\Controllers\PageController::class, 'instructors'])->name('instructorsPage');
Route::get('/instructors/{user}', [\App\Http\Controllers\PageController::class, 'instructor'])->name('instructorPage');
Route::get('/fields/{field}', [\App\Http\Controllers\PageController::class, 'field'])->name('fieldPage');
Route::get('/storage/{doc}', function ($file) {
    return Storage::download($file);
})->name('downloadFile');
