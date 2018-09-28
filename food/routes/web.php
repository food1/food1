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
// Route::get('/', function () {
//     return view('welcome');
// });

//前台首页
Route::get('/','HomeController@index');
//前台展示&店铺分类展示
Route::get('dianpus','HomeController@show');
//菜品展示
Route::get('/dianpus/cai','QdianpuController@cai');
//菜品详情
//Route::get('/dianpus/xiangqing','QdianpuController@xiangqing');//加入购物车//结算
//登陆页面
Route::get('/home/login', 'HomeController@login');
//登陆操作
Route::post('/home/dianpus', 'HomeController@dologin');
//注册页面
Route::get('/home/zhuce', 'HomeController@zhuce');
//注册操作
Route::post('/home/login', 'HomeController@dozhuce');
//规则中心
Route::get('/dianpus/guize','QdianpuController@guize');
//关于我们
Route::get('/dianpus/intro','QdianpuController@intro');
//联系我们
Route::get('/dianpus/call','QdianpuController@call');
//用户反馈
// Route::get('/dianpus/fankui','QdianpuController@fankui');
Route::resource('/fankui','FanKuiController');



//前台登陆拦截
Route::group(['middleware'=>'home'],function(){
//个人中心
Route::resource('/person','PersonController');
//进入购物车
Route::get('/dianpus/car', 'QdianpuController@car');
//购物车
Route::get('/addshopcar','ShopcarController@addshopcar');
//移除商品
Route::get('/destroy','ShopcarController@destroy');
//结算
Route::post('/jiesuan','ShopcarController@index');
//进入我的订单
Route::get('/dianpus/order', 'QdianpuController@order');
//提交
Route::get('/jiesuan/tijiao', 'ShopcarController@tj');
//退出登录
Route::get('/home/logout', 'HomeController@logout');
});
//----------------------------------------------------------------------


//后台登录拦截
Route::group(['middleware'=>'admin'],function(){
//后台首页
Route::get('/admin','AdminController@index');
//用户管理
Route::resource('user', 'UserController');
//餐品管理
Route::resource('food1', 'Food1Controller');
//轮播图
Route::resource('lunbotu','LunboController');
//logo管理
Route::resource('logo','LogoController');
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
// 店铺_餐品
Route::get('/model', 'DBController@model');
// 店铺_分类
Route::get('/cd', 'DBController@cd');
// 网站设置
Route::resource('/peizhi', 'PeizhiController');
//退出登录
Route::get('/admin/logout','AdminController@logout');
});


//后台登录页面
Route::get('/admin/login','AdminController@login');
//后台登录操作
Route::post('/admin/login','AdminController@dologin');


