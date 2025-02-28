<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
# Write comments even if you are alone in the project
# it makes things easier even if you see the code in future
# either in laravel or in ur internship
Route::get('/', function () {
    return view('welcome');
});

# use Capitalized Method name, its good practice 
Route::POST('/api/v1/users/addUser' , [userController::class, 'AddUser']); 

Route::POST('/api/v1/users/register' , [userController::class, 'validate_registration']);

Route::POST('/api/v1/users/login' , [userController::class, 'validate_login']);

Route::POST('/api/v1/users/logout' , [userController::class, 'logout']);

# nothing much just added Controller methods & Api end points

Route::get('/api/v1/users/connections', [userController::class, 'getUserConnections']);

Route::post('/api/v1/users/connections/add', [userController::class, 'addConnection']);



Route::view('home','home');

Route::view('index','admin/index');

Route::view('reg_form','reg_form');

Route::view('khata','khata');