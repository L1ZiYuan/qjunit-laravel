<?php
/**
 * Created by PhpStorm.
 * User: L1_Zi
 * Date: 2019/7/25
 * Time: 21:06
 */
Route::get('qjunit', 'QJunitController@index');
Route::post('/', 'QJunitController@store')->name('qjunit.store');