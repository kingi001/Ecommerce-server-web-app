<?php

use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\LoginComponent;
use App\Http\Livewire\RegisterComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\ContactusComponent;


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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/',HomeComponent::class);
Route::get('/shop',ShopComponent::class);
Route::get('/cart',CartComponent::class)->name('product.cart');
Route::get('/checkout',CheckoutComponent::class);
Route::get('/login',LoginComponent::class);
Route::get('/register',RegisterComponent::class);
Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
Route::get('/contactus',ContactusComponent::class);
Route::get('/admin/slider',AdminHomeSliderComponent::class)->name('admin.homeslider');
Route::get('/admin/slider/add',AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
Route::get('/admin/slider/edit/{slide_id}',AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
