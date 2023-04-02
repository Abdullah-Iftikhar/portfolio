<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['middleware' => 'verified', 'auth'], function () {
    Route::get('/dashboard', '\App\Http\Controllers\Back\DashboardController@index')->name('dashboard');

    //Account Settings
    Route::get('setting/profile', '\App\Http\Controllers\SettingController@setting')->name('profile.settings');
    Route::post('setting/profile/update', '\App\Http\Controllers\SettingController@updateAccount')->name('profile.update.settings');
    Route::post('setting/password/update', '\App\Http\Controllers\SettingController@updatePassword')->name('password.update.settings');

    Route::group(['middleware' => 'admin'], function () {
        //Mail Settings
        Route::get('setting/mail/configuration', 'App\Http\Controllers\SettingController@mailConfigurationView')->name('mail.setting');
        Route::post('setting/mail/config/save', 'App\Http\Controllers\SettingController@postSettings')->name('mail.save.settings');
        Route::get('users/list', 'App\Http\Controllers\SettingController@usersList')->name('users.list');
        Route::get('permissions', 'App\Http\Controllers\SettingController@permissionSetting')->name('permission.setting');
        Route::post('user/permissions', 'App\Http\Controllers\SettingController@userPermission')->name('user.permission.setting');
    });
});
