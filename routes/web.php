<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\FaqComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ServiceComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeComponent::class)->name('index.home');
Route::get('/about', AboutComponent::class)->name('index.about');
Route::get('/contact', ContactComponent::class)->name('index.contact');
Route::get('/faq', FaqComponent::class)->name('index.faq');
Route::get('/service', ServiceComponent::class)->name('index.service');


// Route::get('/', function () {
//     return view('welcome');
// });
