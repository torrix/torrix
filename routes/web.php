<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('/demo', 'demo')->name('demo');
