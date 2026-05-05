<?php
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;





Route::get('/', function () { return redirect('/pasien'); });
Route::resource('pasien', PasienController::class);

