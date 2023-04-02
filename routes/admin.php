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
Route::group(['prefix' => 'admin', 'middleware' => 'verified', 'auth--1'], function () {
    Route::get('/dashboard', '\App\Http\Controllers\Back\DashboardController@index')->name('dashboard');

    //Account Settings
    Route::get('setting/profile', '\App\Http\Controllers\Back\SettingController@setting')->name('profile.settings');
    Route::post('setting/profile/update', '\App\Http\Controllers\Back\SettingController@updateAccount')->name('profile.update.settings');
    Route::post('setting/password/update', '\App\Http\Controllers\Back\SettingController@updatePassword')->name('password.update.settings');

    //Mail Settings
    Route::get('setting/mail/configuration', 'App\Http\Controllers\Back\SettingController@mailConfigurationView')->name('mail.setting');
    Route::post('setting/mail/config/save', 'App\Http\Controllers\Back\SettingController@postSettings')->name('mail.save.settings');
});
