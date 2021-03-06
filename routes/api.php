<?php

use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\StoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response("Failed login", 401);
    }
    return $user->createToken($user->email)->plainTextToken;
});

Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('items', ItemController::class);
    Route::apiResource('stores', StoreController::class);
});
