<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login.login');
});

Route::prefix('houses')->group(function () {//楼盘管理

    Route::get('created', function () {
        return view('houses.create-house');//创建楼盘
    });
    
    Route::get('list', function () {
        return view('houses.house-list');//楼盘列表
    });
});

Route::prefix('branch')->group(function () {//组织架构管理

    Route::get('created', function () {
        return view('branch.create-branch');//创建部门
    });
    
    Route::get('list', function () {
        return view('branch.branch-list');//部门列表
    });
});

Route::prefix('broker')->group(function () {//经纪人管理

    Route::get('account', function () {
        return view('broker.account');//帐号管理
    });
    
    Route::get('power', function () {
        return view('broker.power');//权限管理
    });
});

Route::prefix('work')->group(function () {//工作管理

    Route::get('broker-list', function () {
        return view('work.broker-list');//经纪人列表
    });
    
    Route::get('broker-workinfo', function () {
        return view('work.broker-workinfo');//经纪人工作详情
    });
});

Route::prefix('clean')->group(function () {//扫楼记录管理

    Route::get('all-record', function () {
        return view('clean.all-record');//查看全部扫楼记录
    });
    
    Route::get('record-change', function () {
        return view('clean.record-change');//按楼盘查看数据变更
    });
});

Route::prefix('tenant')->group(function () {//租户管理

    Route::get('query', function () {
        return view('tenant.query');//租户查询
    });
    
    Route::get('manage', function () {
        return view('tenant.manage');//租户管理
    });
});