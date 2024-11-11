<?php

use Illuminate\Support\Facades\Route;
use App\Mail\DownloadBrochure;

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

// Route::get('/testroute', function() {
//     $name = "Raju";

//     // The email sending is done using the to method on the Mail facade
//     Mail::to('tempemaileeeee@gmail.com')->send(new DownloadBrochure($name));
// });


// donwnload brochure
