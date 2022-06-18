<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserAuth;
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
Route::get('/complaint/create/terms', [ComplaintController::class, 'terms']);
Route::get('/complaint/about', [ComplaintController::class, 'showAbout']);
Route::get('/complaint/about/aninaw', [ComplaintController::class, 'aboutAninaw']);
Route::get('/complaint/about/laspinas', [ComplaintController::class, 'aboutLpc']);
Route::post('/form', [ComplaintController::class, 'store']);
Route::get('/directory', [ComplaintController::class, 'telephoneDirectory']);
Route::get('/successful', [ComplaintController::class, 'successMessage']);
Route::get('/faqs', [ComplaintController::class, 'faqs']);
Route::get('/operatinghours', [ComplaintController::class, 'operationalHours']);
Route::get('/privacyterms', [ComplaintController::class, 'privTerms']);
Route::get('/search', [ComplaintController::class, 'search']);
//Route::view('/complaint/track', 'user.track');

/* Admin Module */
Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/requests', [AdminController::class, 'complaintReqs']);
Route::get('/admin/requests/view/{id}', [AdminController::class, 'viewRequests']);
Route::get('/admin/approved', [AdminController::class, 'approvedComplaints']);
Route::get('/admin/approved/view/{id}', [AdminController::class, 'viewApproved']);
Route::get('/admin/news', [AdminController::class, 'newsAccess']);
Route::get('/admin/news/post', [AdminController::class, 'postNews']);
Route::post('/admin/news/publish', [AdminController::class, 'postArticle']);
Route::get('/admin/news/article/{id}', [AdminController::class, 'viewArticle']);
Route::get('/admin/news/delete{id}', [AdminController::class, 'deleteArticle']);
Route::get('/admin/users', [AdminController::class, 'adminUsers']);
Route::get('/admin/users/edit/{id}', [AdminController::class, 'editUser']);
Route::get('/admin/users/add', [AdminController::class, 'addUser']);
Route::get('/approve/{id}', [AdminController::class, 'approve']);
Route::get('/reject/{id}', [AdminController::class, 'reject']);
Route::post('/admin/user/save', [AdminController::class, 'saveUser']);
Route::get('/admin/authentication', [UserAuth::class, 'adminLogin']);
Route::get('/admin/logout', [UserAuth::class, 'adminLogout']);
Route::get('/admin/update', [UserAuth::class, 'changePassword']);


/* Department Module */
Route::get('/department/dashboard', [DepartmentController::class, 'dashboard']);
Route::get('/department/view/{id}', [DepartmentController::class, 'complaintView']);
Route::get('/department/login', [DepartmentController::class, 'login']);
Route::get('/department/authentication', [UserAuth::class, 'modLogin']);
Route::get('/department/logout', [UserAuth::class, 'modLogout']);
Route::post('/department/log', [DepartmentController::class, 'logMessage']);
