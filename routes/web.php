<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController as SanphamController;
use App\Http\Controllers\frontend\ContactController as LienheController;
use App\Http\Controllers\frontend\CategoryController as DanhmucController;
//Admin
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\OrderdetailController;
use App\Http\Controllers\Backend\TopicController;
use App\Http\Controllers\Backend\UserController;
//-----------------------------------------------------------------------------------------------------
//Home
Route::get('/',[HomeController::class,'index'])->name('site.home');
//Product all
Route::get('/san-pham',[SanphamController::class,"index"])->name('site.product');
//Product category
Route::get('/danh-muc/{slug}',[SanphamController::class,"category"])->name('site.product.category');
//Product detail
Route::get('/chi-tiet-san-pham/{slug}',[SanphamController::class,"product_detail"])->name('site.product.detail');
Route::get('/lien-he',[LienheController::class,"index"])->name('site.contact');

Route::prefix("admin")->group(function(){
    Route::get('/',[DashboardController::class,"index"])->name('admin.dashboard.index');
    //1.Banner
    Route::prefix("banner")->group(function(){
        Route::get('/',[BannerController::class,"index"])->name('admin.banner.index');
        Route::get('/trash',[BannerController::class,"trash"])->name('admin.banner.trash');
        Route::get('show/{id}',[BannerController::class,"show"])->name('admin.banner.show');
        Route::get('create',[BannerController::class,"create"])->name('admin.banner.create');
        Route::post('/store',[BannerController::class,"store"])->name('admin.banner.store');
        Route::get('/edit/{id}',[BannerController::class,"edit"])->name('admin.banner.edit');
        Route::put('/update/{id}',[BannerController::class,"update"])->name('admin.banner.update');
        Route::get('/delete/{id}',[BannerController::class,"delete"])->name('admin.banner.delete');
        Route::get('/restore/{id}',[BannerController::class,"restore"])->name('admin.banner.restore');
        Route::get('/destroy/{id}',[BannerController::class,"destroy"])->name('admin.banner.destroy');
    });
    //2.Brand
    Route::prefix("brand")->group(function(){
        Route::get('/',[BrandController::class,"index"])->name('admin.brand.index');
        Route::get('/trash',[BrandController::class,"trash"])->name('admin.brand.trash');
        Route::get('show/{id}',[BrandController::class,"show"])->name('admin.brand.show');
        Route::get('create',[BrandController::class,"create"])->name('admin.brand.create');
        Route::post('/store',[BrandController::class,"store"])->name('admin.brand.store');
        Route::get('/edit/{id}',[BrandController::class,"edit"])->name('admin.brand.edit');
        Route::put('/update/{id}',[BrandController::class,"update"])->name('admin.brand.update');
        Route::get('/delete/{id}',[BrandController::class,"delete"])->name('admin.brand.delete');
        Route::get('/restore/{id}',[BrandController::class,"restore"])->name('admin.brand.restore');
        Route::get('/destroy/{id}',[BrandController::class,"destroy"])->name('admin.brand.destroy');
    });
    //3.Category
    Route::prefix("category")->group(function(){
        Route::get('/',[CategoryController::class,"index"])->name('admin.category.index');
        Route::get('/trash',[CategoryController::class,"trash"])->name('admin.category.trash');
        Route::get('show/{id}',[CategoryController::class,"show"])->name('admin.category.show');
        Route::get('create',[CategoryController::class,"create"])->name('admin.category.create');
        Route::post('/store',[CategoryController::class,"store"])->name('admin.category.store');
        Route::get('/edit/{id}',[CategoryController::class,"edit"])->name('admin.category.edit');
        Route::put('/update/{id}',[CategoryController::class,"update"])->name('admin.category.update');
        Route::get('/delete/{id}',[CategoryController::class,"delete"])->name('admin.category.delete');
        Route::get('/restore/{id}',[CategoryController::class,"restore"])->name('admin.category.restore');
        Route::get('/destroy/{id}',[CategoryController::class,"destroy"])->name('admin.category.destroy');
    });
    //4.Contact
    Route::prefix("contact")->group(function(){
        Route::get('/',[ContactController::class,"index"])->name('admin.contact.index');
        Route::get('/trash',[ContactController::class,"trash"])->name('admin.contact.trash');
        Route::get('show/{id}',[ContactController::class,"show"])->name('admin.contact.show');
        Route::get('create',[ContactController::class,"create"])->name('admin.contact.create');
        Route::post('/store',[ContactController::class,"store"])->name('admin.contact.store');
        Route::get('/edit/{id}',[ContactController::class,"edit"])->name('admin.contact.edit');
        Route::put('/update/{id}',[ContactController::class,"update"])->name('admin.contact.update');
        Route::get('/delete/{id}',[ContactController::class,"delete"])->name('admin.contact.delete');
        Route::get('/restore/{id}',[ContactController::class,"restore"])->name('admin.contact.restore');
        Route::get('/destroy/{id}',[ContactController::class,"destroy"])->name('admin.contact.destroy');
    });
    //5.Menu
    Route::prefix("menu")->group(function(){
        Route::get('/',[MenuController::class,"index"])->name('admin.menu.index');
        Route::get('/trash',[MenuController::class,"trash"])->name('admin.menu.trash');
        Route::get('show/{id}',[MenuController::class,"show"])->name('admin.menu.show');
        Route::get('create',[MenuController::class,"create"])->name('admin.menu.create');
        Route::post('/store',[MenuController::class,"store"])->name('admin.menu.store');
        Route::get('/edit/{id}',[MenuController::class,"edit"])->name('admin.menu.edit');
        Route::put('/update/{id}',[MenuController::class,"update"])->name('admin.menu.update');
        Route::get('/delete/{id}',[MenuController::class,"delete"])->name('admin.menu.delete');
        Route::get('/restore/{id}',[MenuController::class,"restore"])->name('admin.menu.restore');
        Route::get('/destroy/{id}',[MenuController::class,"destroy"])->name('admin.menu.destroy');
    });
    //6.Order
    Route::prefix("order")->group(function(){
        Route::get('/',[OrderController::class,"index"])->name('admin.order.index');
        Route::get('/trash',[OrderController::class,"trash"])->name('admin.order.trash');
        Route::get('show/{id}',[OrderController::class,"show"])->name('admin.order.show');
        Route::get('create',[OrderController::class,"create"])->name('admin.order.create');
        Route::post('/store',[OrderController::class,"store"])->name('admin.order.store');
        Route::get('/edit/{id}',[OrderController::class,"edit"])->name('admin.order.edit');
        Route::put('/update/{id}',[OrderController::class,"update"])->name('admin.order.update');
        Route::get('/delete/{id}',[OrderController::class,"delete"])->name('admin.order.delete');
        Route::get('/restore/{id}',[OrderController::class,"restore"])->name('admin.order.restore');
        Route::get('/destroy/{id}',[OrderController::class,"destroy"])->name('admin.order.destroy');
    });
    //7.Orderdetail
    Route::prefix("orderdetail")->group(function(){
        Route::get('/',[OrderdetailController::class,"index"])->name('admin.orderdetail.index');
        Route::get('/trash',[OrderdetailController::class,"trash"])->name('admin.orderdetail.trash');
        Route::get('show/{id}',[OrderdetailController::class,"show"])->name('admin.orderdetail.show');
        Route::get('create',[OrderdetailController::class,"create"])->name('admin.orderdetail.create');
        Route::post('/store',[OrderdetailController::class,"store"])->name('admin.orderdetail.store');
        Route::get('/edit/{id}',[OrderdetailController::class,"edit"])->name('admin.orderdetail.edit');
        Route::put('/update/{id}',[OrderdetailController::class,"update"])->name('admin.orderdetail.update');
        Route::get('/delete/{id}',[OrderdetailController::class,"delete"])->name('admin.orderdetail.delete');
        Route::get('/restore/{id}',[OrderdetailController::class,"restore"])->name('admin.orderdetail.restore');
        Route::get('/destroy/{id}',[OrderdetailController::class,"destroy"])->name('admin.orderdetail.destroy');
    });
    //8.Post
    Route::prefix("post")->group(function(){
        Route::get('/',[PostController::class,"index"])->name('admin.post.index');
        Route::get('/trash',[PostController::class,"trash"])->name('admin.post.trash');
        Route::get('show/{id}',[PostController::class,"show"])->name('admin.post.show');
        Route::get('create',[PostController::class,"create"])->name('admin.post.create');
        Route::post('/store',[PostController::class,"store"])->name('admin.post.store');
        Route::get('/edit/{id}',[PostController::class,"edit"])->name('admin.post.edit');
        Route::put('/update/{id}',[PostController::class,"update"])->name('admin.post.update');
        Route::get('/delete/{id}',[PostController::class,"delete"])->name('admin.post.delete');
        Route::get('/restore/{id}',[PostController::class,"restore"])->name('admin.post.restore');
        Route::get('/destroy/{id}',[PostController::class,"destroy"])->name('admin.post.destroy');
    });
    //9.Product
    Route::prefix("product")->group(function(){
        Route::get('/',[ProductController::class,"index"])->name('admin.product.index');
        Route::get('/trash',[ProductController::class,"trash"])->name('admin.product.trash');
        Route::get('show/{id}',[ProductController::class,"show"])->name('admin.product.show');
        Route::get('create',[ProductController::class,"create"])->name('admin.product.create');
        Route::post('/store',[ProductController::class,"store"])->name('admin.product.store');
        Route::get('/edit/{id}',[ProductController::class,"edit"])->name('admin.product.edit');
        Route::put('/update/{id}',[ProductController::class,"update"])->name('admin.product.update');
        Route::get('/delete/{id}',[ProductController::class,"delete"])->name('admin.product.delete');
        Route::get('/restore/{id}',[ProductController::class,"restore"])->name('admin.product.restore');
        Route::get('/destroy/{id}',[ProductController::class,"destroy"])->name('admin.product.destroy');
    });
    //10.Topic
    Route::prefix("topic")->group(function(){
        Route::get('/',[TopicController::class,"index"])->name('admin.topic.index');
        Route::get('/trash',[TopicController::class,"trash"])->name('admin.topic.trash');
        Route::get('show/{id}',[TopicController::class,"show"])->name('admin.topic.show');
        Route::get('create',[TopicController::class,"create"])->name('admin.topic.create');
        Route::post('/store',[TopicController::class,"store"])->name('admin.topic.store');
        Route::get('/edit/{id}',[TopicController::class,"edit"])->name('admin.topic.edit');
        Route::put('/update/{id}',[TopicController::class,"update"])->name('admin.topic.update');
        Route::get('/delete/{id}',[TopicController::class,"delete"])->name('admin.topic.delete');
        Route::get('/restore/{id}',[TopicController::class,"restore"])->name('admin.topic.restore');
        Route::get('/destroy/{id}',[TopicController::class,"destroy"])->name('admin.topic.destroy');
    });
    //11.User
    Route::prefix("user")->group(function(){
        Route::get('/',[UserController::class,"index"])->name('admin.user.index');
        Route::get('/trash',[UserController::class,"trash"])->name('admin.user.trash');
        Route::get('show/{id}',[UserController::class,"show"])->name('admin.user.show');
        Route::get('create',[UserController::class,"create"])->name('admin.user.create');
        Route::post('/store',[UserController::class,"store"])->name('admin.user.store');
        Route::get('/edit/{id}',[UserController::class,"edit"])->name('admin.user.edit');
        Route::put('/update/{id}',[UserController::class,"update"])->name('admin.user.update');
        Route::get('/delete/{id}',[UserController::class,"delete"])->name('admin.user.delete');
        Route::get('/restore/{id}',[UserController::class,"restore"])->name('admin.user.restore');
        Route::get('/destroy/{id}',[UserController::class,"destroy"])->name('admin.user.destroy');
    });
    
});
