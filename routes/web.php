<?php

use Illuminate\Support\Facades\Route;

Route::get('/report/id/{id}', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\LighthouseReportController@id'
]);

Route::get('/reports', [
    'middleware' => [],
    'uses' => 'App\Http\Controllers\LighthouseReportController@all'
]);
