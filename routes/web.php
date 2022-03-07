<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    // Front home route
    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/about',[HomeController::class,'about'])->name('about');
    Route::get('/services',[HomeController::class,'services'])->name('services');
    Route::get('/courses',[HomeController::class,'courses'])->name('courses');
    Route::get('/media',[HomeController::class,'media'])->name('media');
    Route::get('/blogs',[HomeController::class,'blogs'])->name('blogs');
    Route::get('/founders',[HomeController::class,'founders'])->name('founders');
    Route::get('/founder/details/{id}',[HomeController::class,'getFounder'])->name('founder.details');
    Route::get('/course/details/{id}',[HomeController::class,'getCourse'])->name('course.details');
    Route::post('/course/register/{id}',[HomeController::class,'courseRegister'])->name('course.register');
    Route::get('/partners',[HomeController::class,'partners'])->name('partners');
    Route::get('/contact-us',[HomeController::class,'contact'])->name('contact');
    Route::post('/send/message',[HomeController::class,'sendMessage'])->name('send.message');
    Route::get('category/show/{id}',[HomeController::class,'categoryMedia'])->name('category.media');

    Route::group([ 'prefix' => 'dashboard'],function(){

        /* dashboard routes */
        Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');

        /* Pages routes */
        Route::resource('pages',PageController::class)->except(['show']);

        /* How are We ? routes*/
        Route::resource('abouts',AboutController::class);

        /* Courses routes */
        Route::resource('courses',CourseController::class);

        /* Media routes */
        Route::resource('media',MediaController::class);

        /* Articles routes */
        Route::resource('articles',ArticleController::class);

        /* Founders routes */
        Route::resource('founders',FounderController::class);

        /* Partners routes */
        Route::resource('partners',PartnerController::class);

        /* Contacts routes */
        Route::resource('contacts',ContactController::class);

        /* Reservations routes */
        Route::resource('reservations',ReservationController::class);

        /* Settings routes */
        Route::resource('settings',SettingController::class);

        /* Types routes */
        Route::resource('types',TypeController::class);

        /* Sliders routes */
        Route::resource('sliders',SliderController::class)->except(['show']);

        /* Services routes */
        Route::resource('services',ServiceController::class)->except(['show']);

        /* Categories routes */
        Route::resource('categories',CategoryController::class)->except(['show']);
    });

});

