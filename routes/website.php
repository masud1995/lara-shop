<?php
use Illuminate\Support\Facades\Auth;
use App\User;
//include ('../app/logic.php');
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



Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => 'auth','admin',

],function () {
    Route::post('/seller/store','SellerController@store')->name('seller.store');
    Route::get('/seller/add','SellerController@create')->name('seller.add');
    Route::get('/sellers','SellerController@index')->name('seller.view');

    Route::get('/vendor/add','VendorController@create')->name('vendor.add');
    Route::get('/vendors','VendorController@index')->name('vendor.view');
    


});










Route::group([
    'namespace' => 'Vendor',
    'prefix' => 'vendor',
    'middleware' => 'vendor',
],function () {
    Route::get('dashboard','VendorController@index')->name('vendor.dashboard');

});



//$logic

// Route::get('/demo', $logic);


Route::get('/verify/user/dashboard', function () {

    if (Auth::check() && Auth::user()->role->id == 1)
    {
       return redirect('/admin');

    } else {

        return redirect('/vendor/dashboard');
    }
    
});