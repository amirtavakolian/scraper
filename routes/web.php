<?php

use Illuminate\Support\Facades\Route;


Route::get("/", "HomeController@index");

Route::get("/testcookie", "HomeController@testCookie");

Route::get("/cookieplace", "HomeController@cookieplace");


