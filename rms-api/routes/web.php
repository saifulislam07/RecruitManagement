<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::group(
//     [
//         'middleware' => 'api',
//         'prefix' => 'auth'
//     ],
//     function ($router) {
//         Route::post('/login', [AuthController::class, 'login']);
//         Route::post('/register', [AuthController::class, 'register']);
//         Route::post('/logout', [AuthController::class, 'logout']);
//         Route::post('/refresh', [AuthController::class, 'refresh']);
//         Route::get('/user-profile', [AuthController::class, 'userProfile']);
//     }
// );
