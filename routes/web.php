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


/****Frontend routes starts****/
Route::get('/', 'HomeController@main')->name('home');
Route::get('/course', 'HomeController@course')->name('course');
Route::get('/success', 'HomeController@success')->name('success');
Route::get('/successP2', 'HomeController@successP2')->name('successP2');
Route::get('/successP3', 'HomeController@successP3')->name('successP3');
Route::get('/blogs', 'HomeController@blogs')->name('blogs');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/register', 'HomeController@register')->name('register');





/****Frontend routes ends****/

///Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Admin Route
//Route::get('/adminss','admin\AdminController@index');
//Route::get('/userss','admin\AdminController@users');

Route::group(['prefix'=>'admin','namespace'=>'admin',],function(){
    Route::get('dashboard','AdminController@index');
    Route::get('users','AdminController@users');
    Route::get('blog','AdminController@blog');
    Route::get('mail','AdminController@mail');
    Route::get('slider','AdminController@slider');
    Route::get('charts','AdminController@charts');
    Route::get('table_basic','AdminController@table_basic');
    Route::get('table_datatable','AdminController@table_datatable');
    Route::get('forms_general','AdminController@formsGeneral');
    Route::get('forms_select','AdminController@formsSelect');
    Route::get('forms_validation','AdminController@formsValidation');
    Route::get('forms_text_editors','AdminController@formsTextEditors');
    Route::get('forms_multiple_file_upload','AdminController@formsMultipleFileUpload');
    Route::get('forms_date_time','AdminController@formsDateTime');
    Route::get('forms_color_picker','AdminController@formsColorPicker');
    Route::get('media_fancybox','AdminController@mediaFancybox');
    Route::get('media_masonry','AdminController@mediaMasonry');
    Route::get('page_timeline','AdminController@pageTimeline');
    Route::get('page_pricing_tables','AdminController@pagePricingTable');
});

//Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'user','middleware'=>['auth','admin']],function(){
    //Route::get('dashboard','DashboardController@index')->name('dashboard');
//});
