<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Hash;


Route::get('/homepage', [taskController::class,'index'])->name("homepage");

Route::get('/' , function(){
    return view('layouts.homepage');
})->name("dashboard");




// Route::get('/customer_register',[taskController::class,'customer_register'])->name("customer_regsiter");
// Route::post('/customerregisterUser',[taskController::class,'customerUser']);
// Route::get('/customer_login',[taskController::class,'customer_login'])->name("customer_regsiter");


Route::get('/available', [taskController::class, 'showAvailable'])->name('available'); // To display the available information
Route::post('/available', [taskController::class, 'storeAvailable'])->name('available.store'); // To handle form submission
Route::get('/availableUser', [taskController::class, 'avaialable'])->name("availablePage");

//message section
Route::post('/message', [TaskController::class, 'message'])->name('messagePage');
Route::get('/message', [TaskController::class, 'showMessages'])->name('messagePage');
// Add this route to your routes file (e.g., routes/web.php)
Route::post('/messages/delete', [TaskController::class, 'deleteMessage'])->name('deleteMessage');


//Booking
Route::get('/availableUserbooking', [taskController::class, 'avaialablebooking'])->name("availablebookingPage");


//booking
//Route::post('/booknow', [taskController::class, 'bookNow'])->name('booknow');
// Route::get('/adminpage', [taskController::class, 'adminPage'])->name('adminpage');

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

Route::get('/register', [taskController::class, 'register'])->name("registerPage");


Route::get('/login', [taskController::class , 'login'])->name("loginpage");

Route::post('/registerUser', [taskController::class, 'registerUser'])->name('registerUser');

Route::post('/loginUser', [taskController::class, 'loginUser'])->name('loginUser');

//Route::get('/available', [taskController::class, 'availableuser'])->name("avaiableuser");

Route::post('/customerlogin',[taskController::class, 'customerlogin']);


//division
Route::get('/khulna', [taskController::class , 'showKhulnaTasks'])->name("khulna");
Route::get('/dhaka', [taskController::class , 'showDhakaTasks'])->name("dhaka");
Route::get('/rajshahi', [taskController::class , 'showRajshahiTasks'])->name("rajshahi");
Route::get('/sylhet', [taskController::class , 'showSylhetTasks'])->name("sylhet");
Route::get('/chottogram', [taskController::class , 'showChottogramTasks'])->name("chottogram");
