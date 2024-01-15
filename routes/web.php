<?php


use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//menu user
route::get('admin/user/index',[UserController::class,'index'])->name('u.index');

//menu category
route::get('admin/category/index',[CategoryController::class,'index'])->name('c.index');
route::get('admin/category/createfrom',[CategoryController::class,'createfrom'])->name('c.from');
route::get('admin/category/edit/{id}',[CategoryController::class,'edit']);
route::post('admin/category/insert',[CategoryController::class,'insert']);



//menu Product
route::get('admin/product/index',[ProductController::class,'index'])->name('p.index');
route::get('admin/product/createfrom',[ProductController::class,'createfrom'])->name('p.from');


