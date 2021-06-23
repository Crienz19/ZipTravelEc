<?php

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

Route::view('/', 'frontview.home');
Route::view('/about-us', 'frontview.about-us');
Route::view('/contact-us', 'frontview.contact-us');
Route::view('/our-programs', 'frontview.our-programs');
Route::prefix('our-programs')->group(function() {
    Route::view('/swt', 'frontview.program-swt');
    Route::view('/australia', 'frontview.program-australia');
    Route::view('/canada', 'frontview.program-canada');
    Route::view('/internship', 'frontview.program-internship');
    Route::view('/career-training', 'frontview.program-career');
});

Route::post('/sendInquiry', 'InquiryController@sendInquiry');
