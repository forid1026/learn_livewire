<?php

use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\UserPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/users', UserPage::class);
Route::get('/users/{user}', UserPage::class);
Route::get('/contact', ContactPage::class);