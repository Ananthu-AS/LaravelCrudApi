<?php

use App\Http\Controllers\TodoController;
use App\Models\Todo;
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

// Route::get('/tasks', function(){
//     return Todo::all();
// });
Route::get('/tasks',[TodoController::class,'index']);

// Route::post('/create_tasks', function(){
//     return Todo::create([
//         'tasks' => 'task2'
//     ]);
// });
Route::post('/create_tasks',[TodoController::class,'store']);
Route::get('/tasks/{id}',[TodoController::class,'show']);
Route::put('/update_tasks/{id}',[TodoController::class,'update']);
Route::delete('/delete_tasks/{id}',[TodoController::class,'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
