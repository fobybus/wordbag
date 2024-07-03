<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response(content:"word bag",status:200);
});
