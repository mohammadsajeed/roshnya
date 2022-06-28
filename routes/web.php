<?php

use App\Http\Livewire\Backend\Home;
use App\Http\Livewire\Backend\Jobs;
use App\Http\Livewire\Backend\Slider;
use App\Http\Livewire\Backend\SlideShow;
use App\Http\Livewire\Frontend\About;
use App\Http\Livewire\Frontend\Home as FrontendHome;
use App\Http\Livewire\Index;
use App\Http\Livewire\Test;
use App\Http\Controllers\SliderControler;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//  Route::get('/slider',SlideShow::class)->middleware(['auth'])->name('dashboard');
// // Route::get('/jobs',Jobs::class)->middleware(['auth'])->name('dashboard');
// // Route::get('/',Index::class)->middleware(['auth'])->name('dashboard');
// // Route::get('/test',Test::class)->middleware(['auth'])->name('dashboard');
// Route::get('/about',About::class)->middleware(['auth'])->name('dashboard');
 Route::get('/index',FrontendHome::class);

Route::get('/slider',[SliderControler::class,'index']);
Route::post('add_slider',[SliderControler::class,'add_slider']);
Route::get('slider_delete/{id}',[SliderControler::class,'slider_delete']);
Route::get('/news',[NewsController::class,'index']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
