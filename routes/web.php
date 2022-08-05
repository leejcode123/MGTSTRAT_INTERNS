<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\WebinarformController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\LockScreen;


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
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------- home dashboard ------------------------------//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// -----------------------------login----------------------------------------//
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'authenticate']);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// ----------------------------- lock screen --------------------------------//
Route::get('lock_screen', [App\Http\Controllers\LockScreen::class, 'lockScreen'])->middleware('auth')->name('lock_screen');
Route::post('unlock', [App\Http\Controllers\LockScreen::class, 'unlock'])->name('unlock');

// ------------------------------ register ---------------------------------//
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'storeUser'])->name('register');

// ----------------------------- forget password ----------------------------//
Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');

// ----------------------------- reset password -----------------------------//
Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

// ----------------------------- user profile ------------------------------//
Route::get('profile_user', [App\Http\Controllers\UserManagementController::class, 'profile'])->name('profile_user');
Route::post('profile_user/store', [App\Http\Controllers\UserManagementController::class, 'profileStore'])->name('profile_user/store');

// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [App\Http\Controllers\UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::get('user/add/new', [App\Http\Controllers\UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [App\Http\Controllers\UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [App\Http\Controllers\UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::post('update', [App\Http\Controllers\UserManagementController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [App\Http\Controllers\UserManagementController::class, 'delete'])->middleware('auth');
Route::get('activity/log', [App\Http\Controllers\UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [App\Http\Controllers\UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');


// ----------------------------- Client Management -----------------------//
Route::get('clientManagement', [App\Http\Controllers\ClientsController::class, 'index'])->middleware('auth')->name('clientManagement');
Route::get('client/add/new', [App\Http\Controllers\ClientsController::class, 'addNewClient'])->middleware('auth')->name('client/add/new');
Route::post('client/add/save', [App\Http\Controllers\ClientsController::class, 'addNewClientSave'])->name('client/add/save');




Route::get('change/password', [App\Http\Controllers\UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [App\Http\Controllers\UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

// ----------------------------- Customized engagement form ------------------------------//
Route::controller(CustomizedEngagementController::class)->group(function () {
Route::get('form/customizedEngagement/new', [App\Http\Controllers\CustomizedEngagementController::class, 'index'])->middleware('auth')->name('form/customizedEngagement/new');
Route::post('form/customizedEngagement/save', [App\Http\Controllers\CustomizedEngagementController::class, 'store'])->name('form/customizedEngagement/save');
Route::get('form/view/detail', [App\Http\Controllers\CustomizedEngagementController::class, 'viewRecord'])->middleware('auth')->name('form/view/detail');
Route::get('delete/{id}', [App\Http\Controllers\CustomizedEngagementController::class, 'viewDelete'])->middleware('auth');
});
// ----------------------------- F2F engagement form ------------------------------//
Route::get('form/f2f_engagement/new', [App\Http\Controllers\F2fEngagementController::class, 'index'])->middleware('auth')->name('form/f2f_engagement/new');
Route::post('form/f2f_engagement/save', [App\Http\Controllers\F2fEngagementController::class, 'store'])->name('form/f2f_engagement/save');
// ----------------------------- MGTSTRAT U WORKSHOPS ------------------------------//
Route::get('form/mgtstratu_workshops/new', [App\Http\Controllers\MgtstratUController::class, 'index'])->middleware('auth')->name('form/mgtstratu_workshops/new');
Route::post('form/mgtstratu_workshops/save', [App\Http\Controllers\MgtstratUController::class, 'store'])->name('form/mgtstratu_workshops/save');


// ----------------------------- CLIENTS ------------------------------//
Route::get('form/clients/new', [App\Http\Controllers\ClientsController::class, 'index'])->middleware('auth')->name('form/clients/new');



// Route::get('view/detail/{id}', [App\Http\Controllers\UserManagementController::class, 'viewDetail'])->middleware('auth');
// ----------------------------- WEBINAR form ------------------------------//
// Route::get('form/budget/new', [App\Http\Controllers\WebinarformController::class, 'index'])->middleware('auth')->name('form/budget/new');
// Route::post('form/save', [App\Http\Controllers\WebinarformController::class, 'saveRecord'])->name('form/save');
// Route::get('form/view/detail', [App\Http\Controllers\WebinarformController::class, 'viewRecord'])->middleware('auth')->name('form/view/detail');
// Route::get('form/view/detail/{id}', [App\Http\Controllers\WebinarformController::class, 'viewDetail'])->middleware('auth');
// Route::post('form/view/update', [App\Http\Controllers\WebinarformController::class, 'viewUpdate'])->name('form/view/update');
// Route::get('delete/{id}', [App\Http\Controllers\WebinarformController::class, 'viewDelete'])->middleware('auth');