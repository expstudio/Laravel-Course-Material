<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','SiteController@indexAction');

Route::any(
    "member", // ชื่อที่กรอกใน URL
    [
        "as" => "member/index", // ชื่อ Controller และ Action ที่ต้องการวิ่งเข้าไปหา
        "uses" => "MemberController@indexAction" // ชื่อ Controller และ Action ที่ต้องการวิ่งเข้าไปหา
    ]
);