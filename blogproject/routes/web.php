<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogpageController;
use App\Http\Controllers\SurviceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllpostController;
use App\Http\Controllers\CatagoryController;





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

Route::get('/', [HomeController::class,'homepage']);

Route::get('/blog-pag', [BlogpageController::class,'index'])->name('blogpage');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/survice', [SurviceController::class,'index'])->name('survice');
Route::get('/add-post', [AdminController::class,'index'])->name('add-post');
Route::get('/all-post', [AllpostController::class,'index'])->name('all-post');
Route::get('/add_catagory', [CatagoryController::class,'add_catagory'])->name('add_catagory');
Route::get('/all_catagory', [CatagoryController::class,'all_catagory'])->name('all_catagory');







// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/add_post_fun', [AdminController::class,'add_post_fun'])->name('add_post_fun');

Route::get('/delete-post-fun/{id}', [AllpostController::class,'delete_post_fun'])->name('delete-post-fun');
Route::get('/edit-post-fun/{id}', [AllpostController::class,'edit_post_fun'])->name('edit-post-fun');
Route::post('/update_post_fun/{id}', [AllpostController::class,'update_post_fun'])->name('update_post_fun');
Route::get('/post_details/{id}', [HomeController::class,'post_details'])->name('post_details');
Route::post('/add_catagory_fun', [CatagoryController::class,'add_catagory_fun'])->name('add_catagory_fun');
Route::get('/edit-catagory-fun/{id}', [CatagoryController::class,'edit_catagory_fun'])->name('edit-catagory-fun');
Route::post('/update_catagory_fun/{id}', [CatagoryController::class,'update_catagory_fun'])->name('update_catagory_fun');
Route::get('/delete-catagory-fun/{id}', [CatagoryController::class,'delete_catagory_fun'])->name('delete-catagory-fun');






