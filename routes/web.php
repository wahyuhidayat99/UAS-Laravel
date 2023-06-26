<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\SepatuController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
    Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('/home');
    });
    
    // Route::get('/', [PemainController::class,'index']);
    Route::get('/pemain', [PemainController::class,'index']);
        Route::get('/pemain-add', [PemainController::class,'create']);
        Route::post('/pemain', [PemainController::class,'store']);
        Route::get('/pemain-edit/{id}', [PemainController::class,'edit']);
        Route::put('/pemain/{id}', [PemainController::class,'update']);
        Route::delete('/pemain/{id}', [PemainController::class,'destroy']);
        
        
        Route::get('/sepatu', [SepatuController::class,'index']);
        Route::get('/sepatu-add', [SepatuController::class,'create']);
        Route::post('/sepatu', [SepatuController::class,'store']);
        Route::get('/sepatu-edit/{id}', [SepatuController::class,'edit']);
        Route::put('/sepatu/{id}', [SepatuController::class,'update']);
        Route::delete('/sepatu/{id}', [SepatuController::class,'destroy']);
        
        
        Route::get('/club', [ClubController::class,'index']);
        Route::get('/club-add', [ClubController::class,'create']);
        Route::post('/club', [ClubController::class,'store']);
        Route::get('/club-edit/{id}', [ClubController::class,'edit']);
        Route::put('/club/{id}', [ClubController::class,'update']);
        Route::delete('/club/{id}', [ClubController::class,'destroy']);
        
        
        Route::get('/negara', [NegaraController::class,'index']);
        Route::get('/negara-add', [NegaraController::class,'create']);
        Route::post('/negara', [NegaraController::class,'store']);
        Route::get('/negara-edit/{id}', [NegaraController::class,'edit']);
        Route::put('/negara/{id}', [NegaraController::class,'update']);
        Route::delete('/negara/{id}', [NegaraController::class,'destroy']);     
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
