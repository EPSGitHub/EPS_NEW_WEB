<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/',[App\Http\Controllers\frontendViewManagement::class,'HomePage']);
Route::get('/contact-us',[App\Http\Controllers\frontendViewManagement::class,'ContactUs']) -> name('frontend.contact');
Route::get('/about-us',[App\Http\Controllers\frontendViewManagement::class,'AboutUs']) -> name('frontend.aboutus');
Route::get('/single-details',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails']) -> name('frontend.singledetails');
Route::get('/team',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_Team']) -> name('frontend.team');
Route::get('/terms-and-condition',[App\Http\Controllers\frontendViewManagement::class,'TermsAndCondition']) -> name('frontend.terms');
Route::get('/privacy-policy',[App\Http\Controllers\frontendViewManagement::class,'PrivacyPage']) -> name('frontend.privacy');
Route::get('/cookie',[App\Http\Controllers\frontendViewManagement::class,'CookiePage']) -> name('frontend.cookie');
Route::get('/faq',[App\Http\Controllers\frontendViewManagement::class,'FaqPage']) -> name('frontend.faq');

//single_details
Route::get('/mr-mohammad-mohsin',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_Mohsin']) -> name('frontend.mohsin');
Route::get('/md-shah-alam',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_shahAlam']) -> name('frontend.shahalam');
Route::get('/nasir-uddin',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_nasirUddin']) -> name('frontend.nasir');
Route::get('/md-faruq-ahmed',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_Faruq']) -> name('frontend.faruq');
Route::get('/mr-nasimul-hasin',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_nasimul']) -> name('frontend.nasimul');

//End Single Details

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('contact-us', [App\Http\Controllers\ContactController::class, 'index'])-> name('frontend.contact');;
Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');
