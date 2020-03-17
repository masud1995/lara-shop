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



// Route::group([
//     'namespace' => 'Admin',
//     'prefix' => 'admin',
//     'middleware' => 'auth','admin',

// ],function () {
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function (){
    //sellerRoutes
    Route::get('/seller/delete/{id}','SellerController@destroy')->name('seller.destroy');
    Route::post('/seller/store','SellerController@store')->name('seller.store');
    Route::get('/seller/add','SellerController@create')->name('seller.add');
    Route::get('/sellers','SellerController@index')->name('seller.view');


    //vendorRoutes

    Route::get('/vendor/delete/{id}','VendorController@destroy')->name('vendor.delete');
    Route::get('/vendor/edit/{id}','VendorController@edit')->name('vendor.edit');
    Route::post('/vendor/store','VendorController@store')->name('vendor.store');
    Route::get('/vendor/add','VendorController@create')->name('vendor.add');
    Route::get('/vendors','VendorController@index')->name('vendor.view');

    
    
    


});







Route::group([
    'namespace' => 'Vendor',
    'prefix' => 'vendor',
    'middleware' => 'vendor','auth',
],function () {
    Route::get('dashboard','VendorController@index')->name('vendor.dashboard');

});



//$logic

// Route::get('/demo', $logic);


// Route::get('/verify/user/dashboard', function () {

//     if (Auth::check() && Auth::user()->role->id == 1)
//     {
//        return redirect('/admin');

//     } else {

//         return redirect('/vendor/dashboard');
//     }
    
// });

//secure the redirect
Route::get('/verify/user/dashboard','Admin\RoleController@index');