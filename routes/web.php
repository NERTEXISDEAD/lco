<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\profileMainController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\ScanDocumentsController;
use App\Http\Controllers\ProfilePersonalDataController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\CancelApplicationController;
use App\Http\Controllers\CancelDocController;
use App\Http\Controllers\AdditionalInformController;

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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::post('/login_process', [AuthController::class, 'login'])->name('login_process');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register_process', [AuthController::class, 'register'])->name('register_process');

Route::post('/forget_password_process', [ForgetPasswordController::class, 'forget_password'])->name('forget_password_process');
Route::get('/forget_password', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forget_password');

Route::get('/profileMain', [profileMainController::class, 'showProfileMainForm'])->name('profileMain');
Route::get('/contacts', [ContactsController::class, 'showContacts'])->name('contacts');
Route::get('/messages', [MessagesController::class, 'showMessages'])->name('messages');
Route::get('/profilePersonalData', [ProfilePersonalDataController::class, 'showProfilePersonalData'])->name('profilePersonalData');
Route::get('/scans_documents', [ScanDocumentsController::class, 'showScanDocuments'])->name('scans_documents');
Route::get('/agreement', [AgreementController::class, 'showAgreement'])->name('agreement');
Route::get('/cancel_application', [CancelApplicationController::class, 'showCancelApplication'])->name('cancel_application');
Route::get('/cancel_doc', [CancelDocController::class, 'showCancelDoc'])->name('cancel_doc');
Route::get('/additional_inform', [AdditionalInformController::class, 'showAdditionalInform'])->name('additional_inform');