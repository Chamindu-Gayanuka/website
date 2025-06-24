<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Get route example
Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
   return view('contact');
});

// POST route example
Route::post("/formSubmitted", function (Request $request) {
    $request -> validate([
        'fullName' => 'required|min:3|max:30',
        'email' => 'required|min:3|max:30|email',
    ]);

    $fullName = $request -> input('fullName');
    $email = $request -> input('email');

    return "Your full name is: {$request -> input('fullName')}, and your email is: $email";
})->name("formSubmitted");
