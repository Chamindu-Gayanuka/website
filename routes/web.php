<?php

use Illuminate\Support\Facades\Route;

// Get route example
Route::get('/', function () {
    return view('home');
});

/*
// Parameters using routes
Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . " " . $lastname;
});


// Named routes
Route::get('/test', function (){
    return "This is a test!";
}) -> name("testpage");
*/

// Portfolio related routes
Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::prefix("portfolio") -> group(function(){
    Route::get('/company', function () {
    return view('company');
    });

    Route::get('/organization', function () {
        return view('organization');
    });
});