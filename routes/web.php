<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\AuthController;

Route::get('/login', [taskController::class, 'showLoginForm'])->name('login');
Route::post('/login', [taskController::class, 'loginUser']);



//Route::get('/homepage', [taskController::class,'index'])->name("homepage");
Route::get('/mainpage', [taskController::class,'index'])->name("homepage");

Route::get('/' , function(){
    return view('layouts.homepage');
})->name("dashboard");


Route::get('/available', [taskController::class, 'showAvailable'])->name('available'); // To display the available information
Route::post('/available', [taskController::class, 'storeAvailable'])->name('available.store'); // To handle form submission
Route::get('/availableUser', [taskController::class, 'avaialable'])->name("availablePage");

//message section
Route::post('/message', [TaskController::class, 'message'])->name('messagePage');
Route::get('/message', [TaskController::class, 'showMessages'])->name('messagePage');
Route::post('/messages/delete', [TaskController::class, 'deleteMessage'])->name('deleteMessage');


//Booking
Route::get('/availableUserbooking', [taskController::class, 'avaialablebooking'])->name("availablebookingPage");



Route::get('/editavailableuser/{id}', [taskController::class,'editavailable'])->name("editavailablepage");

Route::post('/updateavailable',[taskController::class,'updateavaiable'])->name("updateavailablepage");

Route::get('deleteavailable/{id}',[taskController::class,'deleteavailable'])->name("deleteavailablepage");


Route::get('/show', [taskController::class,'show'])->name("showpage");

Route::get('/create', function () {
    return view('create');
})->name("createpage");

Route::get('/edit/{id}', [taskController::class,'edit'])->name("editpage");

Route::post('/update',[taskController::class,'update'])->name("updatepage");

Route::post('/create',[taskController::class,'store'])->name("task.store");


//Delete Task

Route::get('delete/{id}',[taskController::class,'delete'])->name("deletepage");


//Auth

Route::get('/register', [taskController::class, 'register'])->name('registerPage');
Route::get('/login', [taskController::class, 'login'])->name('loginpage');
Route::post('/registerUser', [taskController::class, 'registerUser'])->name('registerUser');
Route::post('/loginUser', [taskController::class, 'loginUser'])->name('loginUser');


Route::middleware(['checkUserSession'])->group(function () {
    Route::get('/adminpage', [taskController::class, 'adminPage']);
});

Route::get('/searchTasks', [taskController::class, 'searchTasks'])->name('searchTasks');
//Route::get('/available', [taskController::class, 'availableuser'])->name("avaiableuser");



//division
Route::get('/khulna', [taskController::class , 'showKhulnaTasks'])->name("khulna");
Route::get('/dhaka', [taskController::class , 'showDhakaTasks'])->name("dhaka");
Route::get('/rajshahi', [taskController::class , 'showRajshahiTasks'])->name("rajshahi");
Route::get('/sylhet', [taskController::class , 'showSylhetTasks'])->name("sylhet");
Route::get('/chottogram', [taskController::class , 'showChottogramTasks'])->name("chottogram");

//admin division
Route::get('/khulnaadmin', [taskController::class , 'showKhulnaAdmin'])->name("khulnaadmin");
Route::get('/dhakaadmin', [taskController::class , 'showDhakaAdmin'])->name("dhakaadmin");
Route::get('/sylhetadmin', [taskController::class , 'showSylhetAdmin'])->name("sylhetadmin");
Route::get('/chottogramadmin', [taskController::class , 'showChottogramAdmin'])->name("chottogramadmin");
Route::get('/rajshahiadmin', [taskController::class , 'showRajshahiAdmin'])->name("rajshahiadmin");

//avaiable division
Route::get('/khulnaAvaiable', [taskController::class , 'showKhulnaAvailable'])->name("khulnaavaiable");
Route::get('/dhakaAvaiable', [taskController::class , 'showDhakaAvailable'])->name("dhakaavaiable");
Route::get('/rajshahiAvaiable', [taskController::class, 'showRajshahiAvailable'])->name('rajshahiavaiable');
Route::get('/sylhetAvaiable', [taskController::class, 'showSylhetAvailable'])->name('sylhetavaiable');
Route::get('/chottogramAvaiable', [taskController::class, 'showChottogramAvailable'])->name('chottogramavaiable');
