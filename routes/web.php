<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Models\Complaint;

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

Route::get('/', [ComplaintController::class, 'home']);
Route::get('/complaint', [ComplaintController::class, 'showApproved']);
Route::get('/complaint/news', [ComplaintController::class, 'index']);
Route::get('/complaint/news/{id}', [ComplaintController::class, 'show']);
Route::get('/complaint/create', [ComplaintController::class, 'create']);
Route::get('/complaint/about', [ComplaintController::class, 'showAbout']);
Route::post('/form', [ComplaintController::class, 'store']);