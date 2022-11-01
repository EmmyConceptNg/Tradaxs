<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\InvestmentsController;
use App\Http\Controllers\Backend\MerchantsController;
use App\Http\Controllers\Backend\TradesController;
use App\Http\Controllers\Backend\UserAccountController;
use App\Http\Controllers\Backend\WalletsController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/wallet', function () {
    return view('wallet');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/helpdesk', function () {
    return view('helpdesk');
});

Route::get('/learn-forex', function () {
    return view('backend.learn');
});

Route::get('/settings-security', function () {
    return view('backend.settings-security');
});

Route::get('/settings-account', function () {
    return view('backend.settings-account')->with('user', Auth::user());
});

Route::get('/merchants', function () {
    return view('backend.merchants');
});

Route::get('/add-bank-account', function () {
    return view('backend.add-bank-account');
});

Auth::routes();

Route::get('/buy', [TradesController::class, 'buy'])->name('buy');
Route::post('/checkout', [TradesController::class, 'checkout'])->name('checkout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/settings-preferences', [UserAccountController::class, 'preferences'])->name('settings.preferences');


Route::resource('/merchants', MerchantsController::class);
Route::resource('/investment', InvestmentsController::class);
Route::resource('/wallet', WalletsController::class);
Route::resource('/account', UserAccountController::class);
Route::resource('/trade', TradesController::class);
Route::post('/account/photo/', [UserAccountController::class, 'photo'])->name('account.update.photo');



Route::any('{any}', function () {
    return redirect()->route('dashboard');
})->where('any', '.*');

