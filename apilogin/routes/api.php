<?php
use App\Http\Controllers\LogosController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\TextosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('users', [ApiController::class, 'users']);
Route::post('login', [ApiController::class, 'login']);
Route::middleware('auth:sanctum')->post('foto',[FilesController::class,'upload']);
Route::get('tipo', [TiposController::class,'index']);
Route::get('rubro', [RubrosController::class,'index']);
Route::middleware('auth:sanctum')->post('logo',[LogosController::class, 'create']);
Route::apiResource('texto',TextosController::class);
Route::middleware('auth:sanctum')->put('/texto/{texto}', [TextosController::class, 'update']);
