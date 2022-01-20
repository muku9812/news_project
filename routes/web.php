<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\AdvertisementController;
use App\Http\Controllers\backend\NewsController;
use App\Http\Controllers\backend\SettingController;
use App\Http\Controllers\FrontendBaseController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\ModuleController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\AddsPlacementController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::get('/', [FrontendBaseController::class,'index'])->name('index');
Route::get('details/{slug}', [FrontendBaseController::class,'details'])->name('details');
Route::get('blog', [FrontendBaseController::class,'blog'])->name('blog');
Route::get('categori/', [FrontendBaseController::class,'categori'])->name('categori');
Route::get('politics/', [FrontendBaseController::class,'politics'])->name('politics');
Route::get('entertainment/', [FrontendBaseController::class,'entertainment'])->name('entertainment');
Route::get('sports/', [FrontendBaseController::class,'sports'])->name('sports');
Route::get('international/', [FrontendBaseController::class,'international'])->name('international');
Route::get('pradesh1/', [FrontendBaseController::class,'pradesh1'])->name('pradesh1');
Route::get('pradesh2/', [FrontendBaseController::class,'pradesh2'])->name('pradesh2');
Route::get('bagmati/', [FrontendBaseController::class,'bagmati'])->name('bagmati');
Route::get('gandaki/', [FrontendBaseController::class,'gandaki'])->name('gandaki');
Route::get('lumbini/', [FrontendBaseController::class,'lumbini'])->name('lumbini');
Route::get('karnali/', [FrontendBaseController::class,'karnali'])->name('karnali');
Route::get('sudurpashchim/', [FrontendBaseController::class,'sudurpashchim'])->name('sudurpashchim');

Auth::routes([
  //  'register' => false,

]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('user/profile', [UserController::class, 'profile'])->name('user.profile');


Route::middleware(['web','auth'])->group(function() {




//Route::resource('role',RoleController::class);
//Route::get('role/create', [RoleController::class, 'create'])->name('role.create');

//Route::resource('role',RoleController::class);
//    Route::get('/rolechangestatus',[RoleController::class,'ChangeRoleStatus'])->name('ChangeStatus');
    Route::get('/rolechangestatus',[RoleController::class,'ChangeRoleStatus'])->name('ChangeStatus');

    Route::get('role/create', [RoleController::class, 'create'])->name('role.create');
    Route::post('role', [RoleController::class, 'store'])->name('role.store');
    Route::get('role', [RoleController::class, 'index'])->name('role.index');
    Route::get('role/{id}', [RoleController::class, 'show'])->name('role.show');
    Route::get('role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
    Route::put('role/{id}/edit', [RoleController::class, 'update'])->name('role.update');
    Route::delete('role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

    Route::get('role/assign_permission/{role_id}', [RoleController::class,'assignPermission'])->name('role.assign_permission');
    Route::post('role/assign_permission', [RoleController::class,'postPermission'])->name('role.post_permission');

    Route::get('/permissionchangestatus',[PermissionController::class,'ChangePermissionStatus'])->name('ChangeStatus');
    Route::get('permission/create', [PermissionController::class, 'create'])->name('permission.create');
    Route::post('permission', [PermissionController::class, 'store'])->name('permission.store');
    Route::get('permission', [PermissionController::class, 'index'])->name('permission.index');
    Route::get('permission/{id}', [PermissionController::class, 'show'])->name('permission.show');
    Route::get('permission/{id}/edit', [PermissionController::class, 'edit'])->name('permission.edit');
    Route::put('permission/{id}/edit', [PermissionController::class, 'update'])->name('permission.update');
    Route::delete('permission/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');

    Route::get('/modulechangestatus',[ModuleController::class,'ChangeModuleStatus'])->name('ChangeStatus');
    Route::get('module/create', [ModuleController::class, 'create'])->name('module.create');
    Route::post('module', [ModuleController::class, 'store'])->name('module.store');
    Route::get('module', [ModuleController::class, 'index'])->name('module.index');
    Route::get('module/{id}', [ModuleController::class, 'show'])->name('module.show');
    Route::get('module/{id}/edit', [ModuleController::class, 'edit'])->name('module.edit');
    Route::put('module/{id}/edit', [ModuleController::class, 'update'])->name('module.update');
    Route::delete('module/{id}', [ModuleController::class, 'destroy'])->name('module.destroy');



Route::get('/categorychangestatus',[CategoryController::class,'ChangeCatagoryStatus'])->name('ChangeCgStatus');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category', [CategoryController::class, 'store'])->name('category.store');
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('category/{id}/edit', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');



Route::get('/addschangeStatus',[AdvertisementController::class,'ChangeAdvertisementStatus'])->name('ChangeAddStatus');
Route::get('advertisement/create', [AdvertisementController::class, 'create'])->name('advertisement.create');
Route::post('advertisement', [AdvertisementController::class, 'store'])->name('advertisement.store');
Route::get('advertisement', [AdvertisementController::class, 'index'])->name('advertisement.index');
    Route::get('advertisement/active', [AdvertisementController::class, 'active'])->name('advertisement.active');
Route::get('advertisement/{id}', [AdvertisementController::class, 'show'])->name('advertisement.show');
Route::get('advertisement/{id}/edit', [AdvertisementController::class, 'edit'])->name('advertisement.edit');
Route::put('advertisement/{id}/edit', [AdvertisementController::class, 'update'])->name('advertisement.update');
Route::delete('advertisement/{id}', [AdvertisementController::class, 'destroy'])->name('advertisement.destroy');

    Route::get('/newschangeStatus',[NewsController::class,'ChangeNewsStatus'])->name('ChangeStatus');
Route::get('/newschangefeaturekey',[NewsController::class,'ChangeFeatureKey'])->name('ChangeFeatureKey');
Route::get('/newschangesliderkey',[NewsController::class,'ChangeSliderKey'])->name('ChangesliderKey');
Route::get('/newschangebreakingkey',[NewsController::class,'ChangeBreakingKey'])->name('ChangebreakingKey');
Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('news', [NewsController::class, 'store'])->name('news.store');
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('news/{id}/edit', [NewsController::class, 'update'])->name('news.update');
Route::delete('news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');



Route::get('setting/create', [SettingController::class, 'create'])->name('setting.create');
Route::post('setting', [SettingController::class, 'store'])->name('setting.store');
Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
Route::get('setting/{id}', [SettingController::class, 'show'])->name('setting.show');
Route::get('setting/{id}/edit', [SettingController::class, 'edit'])->name('setting.edit');
Route::put('setting/{id}/edit', [SettingController::class, 'update'])->name('setting.update');
Route::delete('setting/{id}', [SettingController::class, 'destroy'])->name('setting.destroy');

//
//Route::get('permission/create', [PermissionController::class, 'create'])->name('permission.create');
//Route::post('permission', [PermissionController::class, 'store'])->name('permission.store');
//Route::get('permission', [PermissionController::class, 'index'])->name('permission.index');
//Route::get('permission/{id}', [PermissionController::class, 'show'])->name('permission.show');
//Route::get('permission/{id}/edit', [PermissionController::class, 'edit'])->name('permission.edit');
//Route::put('permission/{id}/edit', [PermissionController::class, 'update'])->name('permission.update');
//Route::delete('permission/{id}', [PermissionController::class, 'destroy'])->name('permission.destroy');


Route::get('/pagechangestatus',[PageController::class,'ChangePageStatus'])->name('changePageStatus');
Route::get('page/create', [PageController::class, 'create'])->name('page.create');
Route::post('page', [PageController::class, 'store'])->name('page.store');
Route::get('page', [PageController::class, 'index'])->name('page.index');
Route::get('page/{id}', [PageController::class, 'show'])->name('page.show');
Route::get('page/{id}/edit', [PageController::class, 'edit'])->name('page.edit');
Route::put('page/{id}/edit', [PageController::class, 'update'])->name('page.update');
Route::delete('page/{id}', [PageController::class, 'destroy'])->name('page.destroy');



Route::get('user', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user', [UserController::class, 'store'])->name('user.store');
Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{id}/edit', [UserController::class, 'update'])->name('user.update');


    Route::get('/placementchangestatus',[AddsPlacementController::class,'ChangePlacementStatus'])->name('ChangeStatus');

    Route::get('placement/create', [AddsPlacementController::class, 'create'])->name('placement.create');
    Route::post('placement', [AddsPlacementController::class, 'store'])->name('placement.store');
    Route::get('placement', [AddsPlacementController::class, 'index'])->name('placement.index');
    Route::get('placement/{id}', [AddsPlacementController::class, 'show'])->name('placement.show');
    Route::get('placement/{id}/edit', [AddsPlacementController::class, 'edit'])->name('placement.edit');
    Route::put('placement/{id}/edit', [AddsPlacementController::class, 'update'])->name('placement.update');
    Route::delete('placement/{id}', [AddsPlacementController::class, 'destroy'])->name('placement.destroy');
});


Route::get('/changePassword', [App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/changePassword', [App\Http\Controllers\HomeController::class, 'changePasswordPost'])->name('changePasswordPost');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/changePassword',[App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
    Route::post('/changePassword',[App\Http\Controllers\HomeController::class, 'changePasswordPost'])->name('changePasswordPost');
});
