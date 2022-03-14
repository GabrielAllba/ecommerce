<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\Backend\AdminProfileController;
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
Route::prefix('admin')->group(function(){

    // Admin Login
    Route::get('/login', [AdminController::class, 'Login'])->name('admin.login');
    Route::post('/login/store', [AdminController::class, 'StoreLogin'])->name('admin.store.login');

    //Admin Register
    // Route::get('/register', [AdminController::class, 'Register'])->name('admin.register');

    //Admin Dashboard
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])
    ->name('admin.dashboard')->middleware('admin');

    //Admin Logout
    Route::get('/logout', [AdminController::class, 'Logout'])
    ->name('admin.logout')->middleware('admin');

    //Admin Profile
    Route::get('/profile', [AdminProfileController::class, 'AdminProfile'])
    ->name('admin.profile')->middleware('admin');
    Route::post('/profile/store', [AdminProfileController::class, 'Store'])->name('admin.profile.store');

    //Admin Change Password
    Route::get('/change/password',[AdminProfileController::class, 'AdminChangePassword'])
    ->name('admin.change.password');
    Route::post('/update/change/password', [AdminProfileController::class, 'UpdateChangePassword'])
    ->name('update.change.password');


});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'Index']);
Route::get('/user/logout', [IndexController::class, 'UserLogout'])->name('user.logout');
Route::get('/user/profile', [IndexController::class, 'UserProfile'])->name('user.profile');
Route::post('/user/profile/store', [IndexController::class, 'UserProfileStore'])->name('user.profile.store');

Route::get('/user/changepassword', [IndexController::class, 'UserChangePassword'])->name('change.password');
Route::post('/user/password/update', [IndexController::class, 'UserPasswordUpdate'])->name('user.password.update');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
