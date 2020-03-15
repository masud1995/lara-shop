<?php
use Illuminate\Support\Facades\Auth;

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



Route::get('/serv',function(){
    return response("Data");
});



Route::group([
    'namespace' => 'Vendor',
    'prefix' => 'vendor',
    'middleware' => 'auth','vendor',
],function () {

    Route::get('dashboard','VendorController@index')->name('vendor.dashboard');


});



Route::get('/verify_user/dashboard', function () {

    if (Auth::check() && Auth::user()->role->id == 1)
    {
       return redirect('/admin');
    } else {
        return redirect('/vendor/dashboard');
    }
    
});