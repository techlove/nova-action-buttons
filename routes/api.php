<?php
use Illuminate\Support\Facades\Route;
use Pavloniym\ActionButtons\Http\Controllers\ActionController;

Route::get('/{resource}/action', [ActionController::class, 'get']);
