<?php

use Illuminate\Support\Facades\Route;
use App\Mail\DownloadBrochure;
use App\Http\Controllers\form\downloadBrochureController;
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
    return view('welcome');
});

Route::get('/event-1', function () {
    return view('event-inner-page');
});

Route::get('/contact', function () {
    return view('contact-page');
});

Route::get('/blog_list1', function () {
    return view('blog-list1');
});

// test route for testing purpuses
Route::get('/test', function () {
    return view('test.brochure');
});

// donwnload brochure route
Route::post('/download-brochure', [downloadBrochureController::class, 'sendBrochure'])->name('download-brochure');