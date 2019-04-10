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
//    return view('mIndex.login');
});
Route::get('/register', 'view\MemberController@toRegister');
Route::get('/login', 'view\MemberController@toLogin');
Route::any('/service/validate_code/create', 'service\ValidateController@create');
Route::any('/service/validate_phone/send', 'service\ValidateController@sendSMS');

Route::any('/service/register', 'service\MemberController@register');


