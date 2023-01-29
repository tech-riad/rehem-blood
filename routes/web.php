<?php

use App\Http\Controllers\Auth\DonorAuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\BloodRequestController;
use App\Http\Controllers\DonnerController;
use App\Http\Controllers\DonorRegistration\DonorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [IndexController::class, 'index'])->name('index');
#ajax Route
Route::get('/getPhone',[IndexController::class, 'getPhone'])->name('getPhone');
Route::get('/getDistrict',[IndexController::class, 'getDistrict'])->name('getDistrict');
Route::get('/getUpazila',[IndexController::class, 'getUpazila'])->name('getUpazila');
Route::post('/getByBloodGroup',[IndexController::class, 'getByBloodGroup'])->name('getByBloodGroup');

// 
Route::get('/getDistrict',[DonorController::class, 'getDistrict'])->name('getDistrict');
Route::get('/getUpazila',[DonorController::class, 'getUpazila'])->name('getUpazila');



Route::group(['as'=>'app.','prefix'=>'app','namespace'=>'Backend','middleware'=>['auth','web']],function () {

    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard.index');

    Route::group(['as'=>'role.','prefix'=>'role'],function(){

        Route::get('/',[RoleController::class,'index'])->name('index');
        Route::get('/create',[RoleController::class,'create'])->name('create');
        Route::get('/edit/{id}',[RoleController::class,'edit'])->name('edit');
        Route::post('/store',[RoleController::class,'store'])->name('store');
        Route::post('/update/{id}',[RoleController::class,'update'])->name('update');
        Route::get('/delete/{id}',[RoleController::class,'delete'])->name('delete');
     

    });

    Route::group(['as'=>'user.','prefix'=>'user'],function(){

        Route::get('/',[UserController::class,'index'])->name('index');
        Route::get('/create',[UserController::class,'create'])->name('create');
        Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
        Route::post('/store',[UserController::class,'store'])->name('store');
        Route::post('/update/{id}',[UserController::class,'update'])->name('update');
        Route::get('/delete/{id}',[UserController::class,'delete'])->name('delete');
     

    });

    Route::group(['as'=>'blood-request.','prefix'=>'blood-request'],function(){

        Route::get('/',[BloodRequestController::class,'index'])->name('index');
        Route::post('/blood',[BloodRequestController::class,'create'])->name('create');
        Route::post('/store',[BloodRequestController::class,'store'])->name('store');
        
     

    });
    Route::group(['as'=>'donner-list.','prefix'=>'donner-list'],function(){

        Route::get('/',[DonnerController::class,'index'])->name('index');
        
     

    });
    Route::group(['as'=>'volunteer-list.','prefix'=>'volunteer-list'],function(){

        Route::get('/',[VolunteerController::class,'index'])->name('index');
        
     

    });

});


Route::group(['as'=>'donor-register.','prefix'=>'donor-register'],function(){

    Route::get('/create',[DonorController::class,'create'])->name('donor_registration');
    Route::post('/store',[DonorController::class,'store'])->name('donor_store');
    
 

});
Route::group(['as'=>'donor-search.','prefix'=>'donor-search'],function(){

    Route::get('/',[IndexController::class,'search_donor'])->name('donor_search');
    // Route::post('/store',[DonorController::class,'store'])->name('donor_store');
    
 

});

// Donor
Route::get('/donor-login',[DonorController::class,'donor_login'])->name('donor_login');
Route::post('/donor-login',[DonorAuthController::class,'donorLogin'])->name('donorLogin');

Route::group(['as'=>'donor-dashboard.','prefix'=>'donor-dashboard'],function(){

    
    Route::get('/dashboard',[DonorController::class,'donor_dashboard'])->name('donor_dashboard');
    Route::post('/dashboard/{id}',[DonorController::class,'update_donor'])->name('update_donor');
    Route::get('/create',[DonorController::class,'create'])->name('donor_registration');
    Route::post('/store',[DonorController::class,'store'])->name('donor_store');
    
 

});