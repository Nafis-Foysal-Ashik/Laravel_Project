<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Hash;


Route::get('/homepage', [taskController::class,'index'])->name("homepage");

Route::get('/dash' , function(){
    return view('layouts.homepage');
})->name("dashboard");




// Route::get('/customer_register',[taskController::class,'customer_register'])->name("customer_regsiter");
// Route::post('/customerregisterUser',[taskController::class,'customerUser']);
// Route::get('/customer_login',[taskController::class,'customer_login'])->name("customer_regsiter");


Route::get('/available', [taskController::class, 'showAvailable'])->name('available'); // To display the available information
Route::post('/available', [taskController::class, 'storeAvailable'])->name('available.store'); // To handle form submission
Route::get('/ava', [taskController::class, 'avaialable'])->name("availablePage");


Route::get('/', [taskController::class,'show'])->name("showpage");

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




Route::get('/khulna-tasks', [taskController::class , 'showKhulnaTasks'])->name("khulna");
