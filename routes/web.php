<?php

use Illuminate\Support\Facades\Route;

// Get route example
Route::get('/', function () {
    return view('home');
});

// Parameters using routes
Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . " " . $lastname;
});

// Named routes
Route::get('/test', function (){
    return "This is a test!";
});
