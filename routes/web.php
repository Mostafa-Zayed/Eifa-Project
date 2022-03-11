<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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
    Route::get('/',[MainController::class,'index'])->name('home');
    Route::get('/about',[MainController::class,'about'])->name('about');
    Route::get('/services',[MainController::class,'services'])->name('services');
    Route::get('/courses',[MainController::class,'courses'])->name('courses');
    Route::get('/media',[MainController::class,'media'])->name('media');
    Route::get('/blogs',[MainController::class,'blogs'])->name('blogs');
    Route::get('/founders',[MainController::class,'founders'])->name('founders');
    Route::get('/founder/details/{id}',[MainController::class,'getFounder'])->name('founder.details');
    Route::get('/course/details/{id}',[MainController::class,'getCourse'])->name('course.details');
    Route::post('/course/register/{id}',[MainController::class,'courseRegister'])->name('course.register');
    Route::get('/partners',[MainController::class,'partners'])->name('partners');
    Route::get('/contact-us',[MainController::class,'contact'])->name('contact');
    Route::post('/send/message',[MainController::class,'sendMessage'])->name('send.message');
    Route::get('category/show/{id}',[MainController::class,'categoryMedia'])->name('category.media');
    Route::get('/media/{id}',[MainController::class,'getMedia'])->name('media.getInfo');
    Route::get('/registration',[MainController::class,'registration'])->name('registration');
    Route::post('/register',[MainController::class,'makeRegister'])->name('makeRegister');
    Route::get('/article/{id}',[MainController::class,'getArticle'])->name('getArticle');
    Auth::routes(['register' => false]);
    Route::get('/home', [App\Http\Controllers\MainController::class, 'index'])->name('home');




    // dashboard routes
    Route::group([ 'prefix' => 'dashboard', 'middleware' => ['auth']],function(){

        /* dashboard routes */
        Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');

        /* Pages routes */
        Route::resource('pages',PageController::class)->except(['show']);

        /* How are We ? routes*/
        Route::resource('abouts',AboutController::class);

        /* Courses routes */
        Route::resource('courses',CourseController::class);

        /* Media routes */
        Route::resource('medias',MediaController::class);

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

Route::post('ajax/status',[MainController::class,'changeStatus'])->name('change.status');



