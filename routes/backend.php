<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ModuleMakerController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\PopularFoodController;
use App\Http\Controllers\Backend\BestSellingController;
use App\Http\Controllers\Backend\ChefController;
use App\Http\Controllers\Backend\DivisionController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\UpazilaController;
use App\Http\Controllers\Backend\UnionController;
//don't remove this comment from route namespace

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

Route::get('/', [LoginController::class, 'loginPage'])->name('home')->middleware('AuthCheck');

Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('clear-compiled');
    Artisan::call('optimize:clear');
    Artisan::call('storage:link');
    Artisan::call('optimize');
    session()->flash('message', 'System Updated Successfully.');

    return redirect()->route('home');
});

Route::group(['as' => 'auth.'], function () {
    Route::get('/login', [LoginController::class, 'loginPage'])->name('login2')->middleware('AuthCheck');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'AdminAuth'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::match(['get', 'post'], '/module-make', [ModuleMakerController::class, 'index'])->name('moduleMaker');

    Route::resource('admin', AdminController::class);
    Route::get('admin/{id}/status/{status}/change', [AdminController::class, 'changeStatus'])->name('admin.status.change');

    // for role
    Route::resource('role', RoleController::class);

    // for permission entry
    Route::resource('permission', PermissionController::class);


	// for Contact
	Route::resource('contact', ContactController::class);
	Route::get('contact/{id}/status/{status}/change', [ContactController::class, 'changeStatus'])->name('contact.status.change');

    // for Popular Food
	Route::resource('popularfood', PopularFoodController::class);
	Route::get('popularfood/{id}/status/{status}/change', [PopularFoodController::class, 'changeStatus'])->name('popularfood.status.change');
    // for Best Selling
	Route::resource('bestselling', BestSellingController::class);
	Route::get('bestselling/{id}/status/{status}/change', [BestSellingController::class, 'changeStatus'])->name('bestselling.status.change');


    // for Chef
	Route::resource('chef', ChefController::class);
	Route::get('chef/{id}/status/{status}/change', [ChefController::class, 'changeStatus'])->name('chef.status.change');

    //for Division
    Route::resource('division', DivisionController::class);

    Route::get('division/{id}/status/{status}/change', [DivisionController::class, 'changeStatus'])->name('division.status.change');

    // for district
    Route::resource('district', DistrictController::class);

    Route::get('district/{id}/status/{status}/change', [DistrictController::class, 'changeStatus'])->name('district.status.change');
   // for upazila
   Route::resource('upazila', UpazilaController::class);

   Route::get('upazila/{id}/status/{status}/change', [UpazilaController::class, 'changeStatus'])->name('upazila.status.change');


   // for union
   Route::resource('union', UnionController::class);

   Route::get('union/{id}/status/{status}/change', [UnionController::class, 'changeStatus'])->name('union.status.change');



	//don't remove this comment from route body
});
