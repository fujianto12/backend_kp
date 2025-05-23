<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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



// Route::get('/', function () {
//     return redirect()->route('register');
// });
Route::get('/', function () {
    return view('home'); // Atau halaman apapun yang ingin Anda tampilkan pertama kali
});

// if (Auth::check()) {
//     // Jika sudah login, arahkan ke halaman awal (misalnya dashboard atau home)
//     return redirect()->route('client.home');
// }



Route::group(['middleware' => ['auth', 'no-cache']], function() {

    Route::get('test',[\App\Http\Controllers\TestController::class, 'index'])->name('client.test');
    Route::post('test',[\App\Http\Controllers\TestController::class, 'store'])->name('client.test.store');
    Route::get('results/{result_id}',[\App\Http\Controllers\ResultController::class, 'show'])->name('client.results.show');

    // admin only
    Route::group(['middleware' => ['isAdmin', 'no-cache'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('permissions', \App\Http\Controllers\Admin\PermissionController::class);
        Route::delete('permissions_mass_destroy', [\App\Http\Controllers\Admin\PermissionController::class, 'massDestroy'])->name('permissions.mass_destroy');
        Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
        Route::delete('roles_mass_destroy', [\App\Http\Controllers\Admin\RoleController::class, 'massDestroy'])->name('roles.mass_destroy');
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::delete('users_mass_destroy', [\App\Http\Controllers\Admin\UserController::class, 'massDestroy'])->name('users.mass_destroy');

        // categories
        Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
        Route::delete('categories_mass_destroy', [\App\Http\Controllers\Admin\CategoryController::class, 'massDestroy'])->name('categories.mass_destroy');

        // questions
        Route::resource('questions', \App\Http\Controllers\Admin\QuestionController::class);
        Route::delete('questions_mass_destroy', [\App\Http\Controllers\Admin\QuestionController::class, 'massDestroy'])->name('questions.mass_destroy');

        // options
        Route::resource('options', \App\Http\Controllers\Admin\OptionController::class);
        Route::delete('options_mass_destroy', [\App\Http\Controllers\Admin\OptionController::class, 'massDestroy'])->name('options.mass_destroy');

        // results
        Route::resource('results', \App\Http\Controllers\Admin\ResultController::class);
        Route::delete('results_mass_destroy', [\App\Http\Controllers\Admin\ResultController::class, 'massDestroy'])->name('results.mass_destroy');
    });

});


Route::middleware(['guest', 'no-cache'])->group(function () {
    Route::get('login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
    Route::get('register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);
});




Auth::routes();

