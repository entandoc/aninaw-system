<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
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
Route::get('/complaint/track', [ComplaintController::class, 'track']);
Route::get('/complaint/news', [ComplaintController::class, 'index']);
Route::get('/complaint/news/{id}', [ComplaintController::class, 'show']);
Route::get('/complaint/create', [ComplaintController::class, 'create']);
Route::get('/complaint/about', [ComplaintController::class, 'showAbout']);
Route::get('/complaint/about/aninaw', [ComplaintController::class, 'aboutAninaw']);
Route::get('/complaint/about/laspinas', [ComplaintController::class, 'aboutLpc']);
Route::post('/form', [ComplaintController::class, 'store']);
Route::get('/form/terms', [ComplaintController::class, 'terms']);
Route::get('/directory', [ComplaintController::class, 'telephoneDirectory']);
Route::get('/successful', [ComplaintController::class, 'successMessage']);
Route::get('/faqs', [ComplaintController::class, 'faqs']);
Route::get('/operationalhours', [ComplaintController::class, 'operationalHours']);
Route::get('/privacyterms', [ComplaintController::class, 'privTerms']);

/* Admin Module */
Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/requests', [AdminController::class, 'complaintReqs']);
Route::get('/admin/requests/view', [AdminController::class, 'viewRequests']);
Route::get('/admin/approved', [AdminController::class, 'approvedComplaints']);
Route::get('/admin/approved/view', [AdminController::class, 'viewApproved']);
Route::get('/admin/news', [AdminController::class, 'newsAccess']);
Route::get('/admin/news/post', [AdminController::class, 'postNews']);
Route::get('/admin/news/article', [AdminController::class, 'viewArticle']);
Route::get('/admin/users', [AdminController::class, 'adminUsers']);
Route::get('/admin/users/edit', [AdminController::class, 'editUser']);
Route::get('/admin/users/add', [AdminController::class, 'addUser']);


/* Department Module */
Route::get('/department/dashboard', [DepartmentController::class, 'dashboard']);
Route::get('/department/view', [DepartmentController::class, 'complaintView']);