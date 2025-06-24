<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Get route example
Route::get('/', function () {
    return view('home');
});

// POST route example
Route::post("/formSubmitted", function (Request $request) {
    $request -> validate([
        'fullName' => 'required|min:3|max:30',
        'email' => 'required|min:3|max30|email',
    ]);

    $fullName = $request -> input('fullName');
    $email = $request -> input('email');

    return "Your full name is: $fullName and your email is: $email";
})->name("formSubmitted");
