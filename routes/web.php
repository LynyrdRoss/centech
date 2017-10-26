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

use App\Cart;
use App\User;
use App\BillingInformation;

Route::get('/', function () {
	Auth::logout();
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/my-cart', function ()
{
	$id = Auth::user()->id;

	$my_cart = Cart::findByUserId($id);
	$cart_items = $my_cart->cart_items;
	dd($my_cart->cart_item);
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'ProductController@index');

Route::post('/add-to-cart-end-point', 'ProductController@addToCart');

Route::get('/cart', 'ProductController@indexByID');

Route::get('/billing-shipping-information', function ()
{
	$user_id = Auth::user()->id;

	$details = BillingInformation::find($user_id);
	$user = User::find($user_id);

	return view('billing-shipping-information', compact('details','user'));
});

Route::get('/confirmation', "ProductController@confirmation");

Route::get('/paypal', "ProductController@paypal");


Route::get('paywithpaypal', array('as' => 'addmoney.paywithpaypal','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));