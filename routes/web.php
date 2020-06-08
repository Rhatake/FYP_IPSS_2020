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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {

     Route::get('/dashboard', function (){
        return view('admin.dashboard');
    });

    
    

    Route::get('/role-register', 'Admin\DashboardController@registered');

    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');

    Route::put('/role-register-update/{id}', 'Admin\DashboardController@registerupdate');

    Route::delete('role-delete/{id}', 'Admin\DashboardController@registerdelete');

    

    

});






Route::get('/admin/myadmin', function () {
    return view('admin.myadmin');
});

Route::get('/admin/mymap', function () {
    return view('admin.mymap');
});

Route::get('/admin/aboutus', function () {
    return view('admin.aboutus');
});



Route::get('/Notification', 'location\LocationController@loc');


Route::get('/admin/customer', function () {
    return view('admin.customer');
});

Route::get('/admin/pre', function () {
    return view('admin.pre');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});






















