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

Route::group(['middleware' => ['web','admin_auth'], 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers'], function()
{
    //get link offer for publisher
    Route::get('/list_offer/link/{id}', ['as' => 'admin.generateLinkOffer', 'uses' => 'AdminListOfferController@getLink']);
});
