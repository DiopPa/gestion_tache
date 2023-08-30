<?php
use App\Http\Controllers\TacheController;
use Illuminate\Support\Facades\Route;

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
Route::get('/voir-produit/{id}',[TacheController::class,'voir_produit']);
Route::get('/delete-produit/{id}',[TacheController::class,'delete_produit']);
Route::get('/update-produit/{id}',[TacheController::class,'update_produit']);
Route::post('/update/traitement',[TacheController::class,'update_produit_traitement']);
Route::get('/produit',[TacheController::class,'liste']);
Route::get('/ajouter',[TacheController::class,'ajouter_produit']);
Route::post('/ajouter/traitement',[TacheController::class,'store'])->name('ajout');

