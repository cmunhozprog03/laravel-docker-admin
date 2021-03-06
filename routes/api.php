<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
  Route::get('user', [AuthController::class, 'user']);
  Route::post('logout', [AuthController::class, 'logout']);
  Route::put('users/info', [AuthController::class, 'updateInfo']);
  Route::put('users/password', [AuthController::class, 'updatePassword']);
  
  /**User Controller */
  
  Route::apiResource('users', UserController::class);
  Route::apiResource('roles', RoleController::class);
  Route::get('permissions', [PermissionController::class, 'index']);
  

});




