<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
use App\Mail\ContactMeSubmitted;
use Illuminate\Support\Facades\Mail;

// Route::get('/', function () {
//     return inertia('Index/Index');
// });

Route::get('/', [IndexController::class, 'index'])
  ->name('index');

Route::get('/about', [IndexController::class, 'about']);
Route::get('/myprojects', [IndexController::class, 'myprojects']);
Route::get('/skills', [IndexController::class, 'skills']);
Route::get('/contactme', [IndexController::class, 'contactme']);
Route::post('/contactmesubmitted', [IndexController::class, 'contactmesubmitted']);
Route::get('/readmore', [IndexController::class, 'readmore']);



Route::get('/contactmesubmitted', function () {
  return inertia("Index/Contactmesubmitted");
});

// Route::get('/viewproject', [IndexController::class, 'viewproject']);

Route::get(
  '/tesla',
  function () {
    return inertia('Index/FrontEnd/Tesla');
  }
);
Route::get(
  '/mazda',
  function () {
    return inertia('Index/FrontEnd/Mazda');
  }
);

Route::resource('project', ProjectController::class)
  ->middleware('auth');

Route::get('/dashboard', [ProjectController::class, 'dashboard'])
  ->name('dashboard');

Route::get('login', [AuthController::class, 'create'])
  ->name('login');
Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

Route::get('mail', [MailController::class, 'index']);
