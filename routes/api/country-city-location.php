<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Api\CountryCityLocationController;


//    country,lcoation,city get route
Route::get('/all-countries',[CountryCityLocationController::class, 'getCountry']);
Route::get('/all-cities/{id}',[CountryCityLocationController::class, 'getCity']);
Route::get('/all-locations/{id}',[CountryCityLocationController::class, 'getlocation']);
