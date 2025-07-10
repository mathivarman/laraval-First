<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('employee.employee-details');
 });


 Route::get('employee-list/{ID}/{name}/{age}/{telephone}', function ($ID, $name, $age, $telephone) {
    return view('employee.employee-list', ['ID' => $ID, 'name' => $name, 'age' => $age, 'telephone' => $telephone]);
});

Route::view('picmathi', 'employee.mathi');

//  Route::get('my-page/{pagename}/{bgcolor}', function ($pagename, $bgcolor) {
//     return view('pages.' . $pagename , ['bgcolor' => $bgcolor]);
// });

// Route::get('my-page/{pagename}', function ($pagename) {
//     return view('pages.' . $pagename);
// });

//  Route::get('my-page/{name}', function ($name) {
//     return view('pages.about' ,["namee"=>$name] );
// });

// Route::view('welcome', 'welcome');
// Route::view('/', 'home');
// Route::view('about', 'pages.about');
// Route::view('contact', 'pages.contactus');
// Route::view('photo', 'pages.photo');

// Route::get('/name', function () {
//     return 'welcome to mathi';
// });
// Route::get('my-page/{name}/{age}', function ($name, $age) {
//     return "My name is " . $name . ". You are " . $age . " years old.";
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('about', function () {
//     return view('pages/about');
// });

// Route::get('contact', function () {
//     return view('pages/contactus');
// });

// Route::get('photo', function () {
//     return view('pages.photo');
// });
