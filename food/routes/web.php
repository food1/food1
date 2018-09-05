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

//前台首页
Route::get('/','HomeController@index');
//前台店铺
Route::get('/dianpu','DianpuController@index');

//前台店铺详情
Route::get('/dianpu/xiangqing','DianpuController@xiangqing');
// Route::get('/', function () {
//     return view('welcome');
// });

//登陆页面
Route::get('/home/login', 'HomeController@login');
//登陆操作
Route::post('/home/login', 'HomeController@dologin');
//退出登录
Route::get('/home/logout', 'HomeController@logout');
//注册页面
Route::get('/home/zhuce', 'HomeController@zhuce');
//注册操作
Route::post('/home/zhuce', 'HomeController@dozhuce');





//后台首页
Route::get('/admin','AdminController@index');
//用户管理
Route::resource('user', 'UserController');
//餐品管理
Route::resource('food1', 'Food1Controller');
//分类管理
Route::resource('cate', 'CateController');
//店铺管理
Route::resource('dianpu', 'DianpuController');
//购物车
Route::resource('shoping', 'ShopingController');
//结算管理
Route::resource('clearing', 'ClearingController');
//订单管理
Route::resource('order', 'OrderController');
//友情链接
Route::resource('link', 'LinkController');
// 网站设置
// Route::get('/wzsz', 'WzszController');
