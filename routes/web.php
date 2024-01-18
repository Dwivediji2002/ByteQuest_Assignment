<?php 


use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/products', [ProductController::class, 'index']);

    Route::get('add-product', [ProductController::class, 'add'])->name('product.add');
    Route::post('insert-product', [ProductController::class, 'insert'])->name('product.insert');
    Route::get('edit-product/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('update-product/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('delete-product/{id}', [ProductController::class, 'delete'])->name('product.delete');


    // We can also use delete, insert and update methods to delete a product, insert a new product and update the existing
    // But here I'm using the get method 
});
