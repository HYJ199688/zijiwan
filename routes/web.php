<?php

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

Route::get('/test','Auth\LoginController@test');



/*Route::group(['middleware'=>'web'],function (){
    Route::any('/home/login', 'Auth\LoginController@login');
    Route::get('/home/logout', 'Auth\LoginController@logout');
    Route::any('/home/register', 'Auth\RegisterController@register');

    Route::get('/home', 'Auth\HomeController@index');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//后台管理员路由
Route::get('/admin/login','AdminController@getLogin');
Route::post('/admin/login','AdminController@postLogin');

//自定义的后台认证路由
Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    
    $router->post('login', 'LoginController@login')->name('admin.login');
    $router->get('login', 'LoginController@showLogin');
    $router->post('logout', 'LoginController@logout');

    $router->get('index', 'AdminController@index');
});

//医生登录路由
Route::get('/doctor/login','Doctor\DoctorController@getLogin');
Route::post('/doctor/login','Doctor\DoctorController@postLogin')->name('doctor.login');

