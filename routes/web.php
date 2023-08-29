<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
})->name('about');

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard', ['\App\Http\Controllers\DashboardController', 'index'])->name('dashboard')->middleware('auth');



Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/services', function () {
    return view('services');
});



// ...
// Remove these duplicated route definitions

Route::get('/', [AuthController::class, 'welcome'])->name('welcome');
Route::post('/signup', [AuthController::class, 'signup'])->name('process.signup');
Route::post('/login', [AuthController::class, 'login'])->name('process.login');


Route::get('/login', [AuthController::class, 'login'])->name('login');







// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard')->middleware('auth');
// admin
Route::get('/admin', 'AdminController@index');
Route::post('/admin/add-doctor', 'AdminController@addDoctor');
Route::post('/admin/delete-doctor', 'AdminController@deleteDoctor');
// ... other routes
