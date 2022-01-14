<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Contributor\HomeController as ContributorHomeController;
use App\Http\Controllers\Contributor\ContributorController;
use App\Http\Controllers\Frontend\CommentController;

Route::get('category/{slug}', [NewsController::class, 'category'])->name('news.category');
Route::get('news/{slug}', [NewsController::class, 'details'])->name('news.details');
Route::post('comment/store', [CommentController::class, 'store'])->name('comment.store');

Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/contributor/home', [ContributorHomeController::class, 'index'])->name('contributor.home');
Route::get('/contributor/edit/password', [ContributorController::class, 'editpassword'])->name('contributor.editpassword');
Route::post('/contributor/update/password', [ContributorController::class, 'update'])->name('contributor.update');
Route::get('/contributor/show/profile', [ContributorController::class, 'showprofile'])->name('contributor.showprofile');
Route::get('/contributor/post/manage', [ContributorController::class, 'postmanage'])->name('contributor.post.manage');
Route::get('/contributor/post/create', [ContributorController::class, 'postcreate'])->name('contributor.post.create');
Route::get('/contributor/post/show/{id}', [ContributorController::class, 'postshow'])->name('contributor.post.show');
Route::get('/contributor/post/edit/{id}', [ContributorController::class, 'postedit'])->name('contributor.post.edit');
Route::post('/contributor/post/store', [ContributorController::class, 'poststore'])->name('contributor.post.store');
Route::post('/contributor/post/update', [ContributorController::class, 'postupdate'])->name('contributor.post.update');
Route::post('/contributor/post/destroy', [ContributorController::class, 'postdestroy'])->name('contributor.post.destroy');

Route::get('access/denied', function () {
    return view('access.denied');
})->name('404.permission');

Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware('is_admin');

Route::get('admin/category/index', [CategoryController::class, 'index'])->name('admin.category.index')->middleware('is_admin');
Route::post('admin/category/destroy', [CategoryController::class, 'destroy'])->name('admin.category.destroy')->middleware('is_admin');
Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create')->middleware('is_admin');
Route::post('admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store')->middleware('is_admin');
Route::get('admin/category/show/{slug?}', [CategoryController::class, 'show'])->name('admin.category.show')->middleware('is_admin');
Route::get('admin/category/edit/{slug?}', [CategoryController::class, 'edit'])->name('admin.category.edit')->middleware('is_admin');
Route::post('admin/category/update', [CategoryController::class, 'update'])->name('admin.category.update')->middleware('is_admin');

Route::resource('posts', PostController::class)->middleware('is_admin');
Route::resource('users', UserController::class)->middleware('is_admin');

Route::get('admin/ads/index', [AdsController::class, 'index'])->name('admin.ads.index')->middleware('is_admin');
Route::get('admin/ads/create', [AdsController::class, 'create'])->name('admin.ads.create')->middleware('is_admin');
Route::get('admin/settings/index', [SettingsController::class, 'index'])->name('admin.settings.index')->middleware('is_admin');
