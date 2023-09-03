<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PostController;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/posts",[PostController::class , "index"])->middleware("auth:sanctum");
Route::post("/posts",[PostController::class , "store"]);
Route::get("/posts/{id}",[PostController::class , "show"])->middleware("auth:sanctum");
Route::delete("/posts/{id}",[PostController::class , "destroy"]);
Route::post("/posts/{id}",[PostController::class , "update"]);

//2|laravel_sanctum_dLIJ5P09gzlagsEFTRjT8HykuaK9y9WqHLIMgQP12f312ad9

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);
 
    $user = User::where('email', $request->email)->first();
 
    if (! $user || !Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken($request->device_name)->plainTextToken;
});