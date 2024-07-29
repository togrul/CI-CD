<?php

use App\Livewire\ShowCourse;
use Illuminate\Support\Facades\Route;

Route::get('/',ShowCourse::class)->name('home');