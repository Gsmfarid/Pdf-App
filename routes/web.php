<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers/PDFExtractController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('pdf'[PDFExtractController::class,'extractPDF']);