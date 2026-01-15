<?php

use Illuminate\Support\Facades\Route;
use App\Models\Comentario;

Route::get('/', function () {
    $comentarios = Comentario::latest()->get();
    return view('inicio', compact('comentarios'));
});
