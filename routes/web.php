<?php

use App\Http\Controllers\BranchesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Models\Branches;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('modules.users.login');
});

Route::get('/content', function () {
    return view('modules.start');
})->name('start');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/first-user', [UsersController::class, 'firstUser']);

//Sucursales
Route::get('/branches', [BranchesController::class, 'index'])->name('branches.index');
Route::post('/branches', [BranchesController::class, 'store'])->name('branches.store');
Route::get('/branches/{id}/edit', [BranchesController::class, 'edit'])->name('branches.edit');
Route::put('/branches', [BranchesController::class, 'update'])->name('branches.update');
Route::get('/branches/{state}/{id_branch}', [BranchesController::class, 'chageState'])->name('branches.chageState');

Route::get('/branches/{id}', [BranchesController::class, 'show'])->name('branches.show');

//Productos
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');

//Categorias
Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
