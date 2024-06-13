<?php

use Illuminate\Support\Facades\Route;
use \app\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);