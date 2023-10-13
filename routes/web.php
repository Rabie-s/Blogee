<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ArticleController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\blog\BlogController;

require __DIR__ . '/auth.php'; //Authentication routes

/* admin-routs */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'auth.session']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('articles', ArticleController::class)->except(['show']);

    Route::middleware('isAdmin')->group(function () {
        Route::get('admins/changeAdminPassword/{id}', [AdminController::class, 'changeAdminPassword'])->name('admins.changeAdminPassword');
        Route::post('admins/updateAdminPassword/{id}', [AdminController::class, 'updateAdminPassword'])->name('admins.updateAdminPassword');
        Route::resource('admins', AdminController::class)->except(['show']);
        Route::resource('categories', CategoryController::class)->except(['show']);

        Route::get('settings', [SettingController::class, 'index'])->name('settings.settings');
        Route::post('settings', [SettingController::class, 'save'])->name('settings.save');
    });
});
/* end-admin-routs */

/* blog-routs */
Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/article/{slug}', [BlogController::class, 'show'])->name('article');
Route::get('/category/{id}', [BlogController::class, 'showArticlesInCategory'])->name('showArticlesInCategory');
Route::view('/about', 'blog.about')->name('about');
/* end-blog-routs */