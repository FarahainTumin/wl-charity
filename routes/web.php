<?php

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Billing;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Home;
use App\Http\Livewire\ExampleLaravel\UserManagement;
use App\Http\Livewire\ExampleLaravel\UserProfile;
use App\Http\Livewire\Notifications;
use App\Http\Livewire\Profile;
use App\Http\Livewire\RTL;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Tables;
use App\Http\Livewire\VirtualReality;
use App\Http\Controllers\TemplateController;
use GuzzleHttp\Middleware;

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

Route::get('/', function(){
    return redirect('welcome');
});
//
//Route::get('forgot-password', ForgotPassword::class)->middleware('guest')->name('password.forgot');
//Route::get('reset-password/{id}', ResetPassword::class)->middleware('signed')->name('reset-password');
//
//Route::get('register', Register::class)->middleware('guest')->name('register');
//Route::get('sign-in', Login::class)->middleware('guest')->name('login');
//
//Route::get('user-profile', UserProfile::class)->middleware('auth')->name('user-profile');
//Route::get('user-management', UserManagement::class)->middleware('auth')->name('user-management');
//
//Route::group(['middleware' => 'auth'], function () {
//Route::get('dashboard', Dashboard::class)->name('dashboard');
//Route::get('billing', Billing::class)->name('billing');
//Route::get('profile', Profile::class)->name('profile');
//Route::get('tables', Tables::class)->name('tables');
//Route::get('notifications', Notifications::class)->name("notifications");
//Route::get('virtual-reality', VirtualReality::class)->name('virtual-reality');
//Route::get('static-sign-in', StaticSignIn::class)->name('static-sign-in');
//Route::get('static-sign-up', StaticSignUp::class)->name('static-sign-up');
//Route::get('rtl', RTL::class)->name('rtl');
//});

Route::get('/welcome',[TemplateController::class,'welcome']);
Route::get('/vid',[TemplateController::class,'vid']);
Route::get('/doa',[TemplateController::class,'doa']);
Route::get('/doa_penutup',[TemplateController::class,'doa_penutup']);
Route::get('/home',[TemplateController::class,'index']);
//Route::get('home',Home::class)->middleware('guest')->name('home');
Route::get('/qr',[TemplateController::class,'qr']);
Route::get('/qr2',[TemplateController::class,'qr2']);
Route::get('/qr3',[TemplateController::class,'qr3']);
Route::get('/qr4',[TemplateController::class,'qr4']);
Route::get('/qr5',[TemplateController::class,'qr5']);
Route::get('/qr6',[TemplateController::class,'qr6']);
Route::get('/program',[TemplateController::class,'index3']);
Route::get('/past_program',[TemplateController::class,'index4']);
