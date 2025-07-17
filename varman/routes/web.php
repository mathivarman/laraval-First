<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('layouts.master');
// });


Route::view('/', 'home');
Route::view('about', 'pages.about');
Route::view('contact', 'pages.contactus');
Route::view('photo', 'pages.photo');


Route::get('employee-details', function () {
    return view('employee.employee-dataonly');
});

Route::get('employee-list/{ID?}/{name?}/{telephone?}/{NIC?}', function ($ID="1", $name="mathi", $telephone="077", $NIC="200115600669") {
    return view('employee.employee-listonly',['ID' => $ID, 'name' => $name, 'telephone' => $telephone, 'NIC' => $NIC]);
});

// Route::get('/', function () {
//     return view('form.input');
// });

// Route::post('/output', function (Request $request) {
//    // dd($request->all());
//     return view('form.receive',$request->all());
// });



// Route::get('/', function () {
//     return view('employee.employee-details');
// });

// Route::get('employee-list/{ID?}/{name?}/{telephone?}/{NIC?}', function ($ID="1", $name="mathi", $telephone="077", $NIC="200115600669") {

//     $string = Str::of($telephone)->substr(0, 3);
//     if ($string == "077") {
//         $telephone = $telephone . "-Dialog";
//     } elseif ($string == "078") {
//         $telephone = $telephone . "-Mobitel";
//     } elseif ($string == "071") {
//         $telephone = $telephone . "-Airtel";
//     } else {
//         $telephone = $telephone . "-Other";
//     }
//     return view('employee.employee-list',['ID' => $ID, 'name' => $name, 'telephone' => $telephone, 'NIC' => $NIC]);
// });

// Route::get('/', function () {
//     return view('employee.employee-form');
// });

// Route::post('employee-list', function (Request $request) {
//     $ID=$request->input('id');
//     $name=$request->input('name');
//     $telephone=$request->input('telephone');
//     $NIC=$request->input('nic');

//      return view('employee.employee-list',['ID' => $ID, 'name' => $name, 'telephone' => $telephone, 'NIC' => $NIC]);
// });


// Route::get('get-form', function () {
//     return view('form/get-form');
// });

// Route::post('home', function (Request $request) {
//     dd($request->all());
// });

// Route::get('home', function () {
//     return "get form";
// });

// Route::put('home', function () {
//     return "put form";
// });

// Route::delete('home', function () {
//     return "delete form";
// });

// Route::patch('home', function () {
//     return "patch form";
// });




// Route::get('/', function () {
//     return view('employee.employee-details');
//  });

//  Route::get('employee-list/{ID?}/{name?}/{telephone?}/{NIC?}', function ($ID="1", $name="mathi", $telephone="077", $NIC="200115600669") {

//     $string = Str::of($telephone)->substr(0, 3);
//     if ($string == "077") {
//         $telephone = $telephone . "-Dialog";
//     } elseif ($string == "078") {
//         $telephone = $telephone . "-Mobitel";
//     } elseif ($string == "071") {
//         $telephone = $telephone . "-Airtel";
//     } else {
//         $telephone = $telephone . "-Other";
//     }
//     $details = ['ID' => $ID, 'name' => $name, 'telephone' => $telephone, 'NIC' => $NIC];
//     return view('employee.foreach',['details'=>$details]);
// });

// Route::get('employee-list/{ID?}/{name?}/{telephone?}/{NIC?}', function ($ID="1", $name="mathi", $telephone="077", $NIC="200115600669") {

//     $string = Str::of($telephone)->substr(0, 3);
//     if ($string == "077") {
//         $telephone = $telephone . "-Dialog";
//     } elseif ($string == "078") {
//         $telephone = $telephone . "-Mobitel";
//     } elseif ($string == "071") {
//         $telephone = $telephone . "-Airtel";
//     } else {
//         $telephone = $telephone . "-Other";
//     }
//     return view('employee.employee-list',['ID' => $ID, 'name' => $name, 'telephone' => $telephone, 'NIC' => $NIC]);
// });

// Route::view('picmathi', 'employee.mathi');

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
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('about', function () {
//     return view('pages/about');
// });

// Route::get('contact', function () {
//     return view('pages.contactus');
// });

// Route::get('photo', function () {
//     return view('pages.photo');
// });
