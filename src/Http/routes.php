<?php
Route::get('/', 'LunitController@index');
Route::post('/', 'LunitController@store')->name('lunit.store');

// 测试路由
Route::get('test', 'TestController@index');
