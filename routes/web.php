<?php

// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/ping', fn() => 'pong');

Route::get('/', fn() => redirect()->route('articles.index'));
Route::resource('articles', ArticleController::class)->except(['show']);

