<?php

use App\Http\Controllers\ProjectsController;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middlware' => 'auth'], function () {
    Route::get('/projects', [ProjectsController::class, 'index'])->middleware('auth');
    Route::get('/projects/create', [ProjectsController::class, 'create'])->middleware('auth');
    Route::get('/projects/{project}', [ProjectsController::class, 'show'])->middleware('auth');
    Route::post('/projects', [ProjectsController::class, 'store'])->middleware('auth');
});


require __DIR__ . '/auth.php';
