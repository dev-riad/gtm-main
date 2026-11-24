<?php

use App\Http\Controllers\Frontend\Api\JobOffer\JobofferController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/tuition-offers',[JobofferController::class, 'getJobOffer']);
Route::get('/tuition_offer_details/{id}',[JobofferController::class, 'jobDetails']);
Route::post('/job-search',[JobofferController::class, 'jobSearch']);
Route::post('/job-filter',[JobofferController::class, 'jobFilter']);
