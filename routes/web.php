<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\client;

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

//admin routes

Route::get('/admin',[admin_controller::class,'index']);
Route::get('/products',[admin_controller::class,'adminproducts']);
Route::get('/ourcustomer',[admin_controller::class,'customers']);
Route::post('/addnewproduct',[admin_controller::class,'addnewproduct']);
Route::post('/updateproduct',[admin_controller::class,'updateproduct']);
Route::get('/deleteproduct/{id}',[admin_controller::class,'deleteproduct']);
Route::get('/deletecustomer/{id}',[admin_controller::class,'deletecustomer']);
Route::get('/categouries',[admin_controller::class,'categouries']);
Route::post('/addcategouries',[admin_controller::class,'addcategouries']);
Route::get('/deletecategouries/{id}',[admin_controller::class,'deletecategouries']);
Route::get('/ourorders',[admin_controller::class,'ourorders']);
Route::get('/changeorderstatus/{status}/{id}',[admin_controller::class,'changeorderstatus']);
Route::get('/profile',[admin_controller::class,'profile']);
Route::get('/editprofile',[admin_controller::class,'editprofile']);
Route::post('/editcategouries/{id}',[admin_controller::class,'editcategouries']);





//client
Route::get('/product',[client::class,'displayproducts']);
Route::get('/index',[client::class,'index']);
Route::get('/proddisp/{id}',[client::class,'singleproduct']);
Route::get('/addtocart',[client::class,'addtocart']);
Route::get('/cart',[client::class,'cart']);
Route::get('/deletecartitem/{id}',[client::class,'deletecartitem']);
Route::get('updatecart',[client::class,'updatecart']);
Route::get('checkout',[client::class,'checkout']);
Route::get('orderhistory',[client::class,'ordershistory']);
Route::post('contact',[client::class,'contact']);



Route::get('/', function () {
    return view('welcome');
});



Route::post("register",'App\Http\Controllers\login_controller@insert_data');

Route::post("login",'App\Http\Controllers\login_controller@index');

Route::get('login', function () {
    if(session()->has('user'))
    {
        return redirect('/index');
    }
    return view('login');
});

Route::get('logout', function () {
    if(session()->has('user'))
    {
        session()->forget('user');
         session()->forget('id');
    }
    return redirect('login');
});


//user side

Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('paynment', function () {
     return view('paynment');
});
