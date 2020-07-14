<?php

use App\EventUser;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('users', function() {
    return User::all();
});

Route::get('users/{id}', function($id) {
    return User::find($id);
});

Route::get('users/event/{id}', function($id) {
    $users = new User();
    return $users->GetUsersByEvent($id);
});


Route::delete('users/{id}', function($id) {
    User::where('id', $id)->delete();
    
    return User::all();
});

// Route::post('users', 'UserController@create_');


Route::post('users', function (Request $request) {
    $user = new User();
    return $user->store($request);
});

Route::put('users', function (Request $request) {
    $user = new User();
    return $user->store($request);
});
