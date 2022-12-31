
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\TablesController;

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

Route::middleware('auth:sanctum')->group( function () {
    // Route::resource('blogs', BlogController::class);
    

});
Route::post('/auth/register', [AuthController::class, 'signup']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::Apiresource('company',CompanyController::class);
Route::Apiresource('tables',TablesController::class);

