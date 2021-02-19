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
Auth::routes();
Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=> ['auth:admin','prevent-back-history']],function (){
    ############################### begin dashborad ###########################################################
    Route::get('/', 'Auth\AdminLoginController@dashborad')->name('admin.dashborad');
    ############################### end dashborad ###########################################################
    ############################### begin paysons ###########################################################



    ############################### end paysons ###########################################################
    ############################### begin vanne ###########################################################


    ############################### end vanne ###########################################################

############################### begin facture ###########################################################




############################### end facture ###########################################################
});

Route::group(['middleware'=>'guest:admin'], function (){
    Route::get('/admin/login', 'admin\auth\AdminLoginController@adminLogin')->name('adminLogin');
    Route::post('/admin/login', 'admin\auth\AdminLoginController@checkLogin')->name('admin.login');

});





