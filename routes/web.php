<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Service\CategoryController;

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


Route::prefix('dashboard')->group(function () {

    Route::get('/login/page', [AuthController::class, 'loginPage'])->name('admin.login_page');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/register/page', [AuthController::class, 'registerPage'])->name('admin.register_page');
    Route::post('/register', [AuthController::class, 'register'])->name('admin.register');

});
Route::get('/admin/dashboard',[AdminDashboardController::class,'dashboard'])->name('admin.dashboard');
<<<<<<< HEAD

require  base_path('routes/community.php');


=======
//category
Route::get('/category/details',[CategoryController::class,'Category'])->name('category.view');
Route::post('/category/details/form',[CategoryController::class,'PostCategory'])->name('category.post');
Route::get('/category/list',[CategoryController::class,'CategoryList'])->name('category.list');
>>>>>>> f556bb0ae26a7b3d22ce02517423bacf4c67fdd1
