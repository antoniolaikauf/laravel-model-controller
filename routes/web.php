<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;
// rotta con contenuto dentro a pagecontroll
Route::get('/', [PageController::class, 'index']);
