<?php

use App\Http\Controllers\admin\Usercontroller;
use App\Http\Controllers\admin\Categorycontroller;
use App\Http\Controllers\admin\Productcontroller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;

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
    $u = User::all();
    $c = Category::all();
    $p = Product::all();
    return view('dashboard',compact('u','c','p'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// เมนู user
Route::get('admin/user/index',[Usercontroller::class, 'index'])->name('u.index');

//เมนู category
Route::get('admin/category/index',[Categorycontroller::class, 'index'])->name('c.index');
Route::get('admin/category/createform',[Categorycontroller::class, 'createform'])->name('c.from');
route::get('admin/category/edit/{id}',[Categorycontroller::class,'edit']);
route::post('admin/category/insert',[Categorycontroller::class,'insert']);
route::post('admin/category/update/{id}',[Categorycontroller::class,'update']);
route::get('admin/category/delete/{id}',[Categorycontroller::class,'delete']);


//เมนู Product

route::get('admin/product/index',[Productcontroller::class,'index'])->name('p.index');
route::get('admin/product/createfrom',[Productcontroller::class,'createfrom'])->name('p.from');
route::post('admin/product/insert',[Productcontroller::class, 'insert']);
route::get('admin/product/edit/{id}',[Productcontroller::class,'edit']);
route::post('admin/product/update/{id}',[Productcontroller::class,'update']);
route::get('admin/product/delete/{id}',[Productcontroller::class,'delete']);