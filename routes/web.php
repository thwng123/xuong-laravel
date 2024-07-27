<?php


use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', [HomeController::class, 'index' ]);
Route::get('/', function () {
    return view('client.index');
});
Route::get('shop-single', function () {
    return view('client.shop-single');
});
// Route::get('admin', function () {
//     return view('admin.index');
// });
// Route::get('admin/product', function () {
//     return view('admin.products.index');
// });

Route::prefix('admin')
    ->as('admin.')
    ->group(function () {

        Route::get('/',function(){
            return view('admin.index');
        });

        Route::prefix('products')
            ->as('products.')
            ->group(function () {
                Route::get('/',                 [ProductController::class, 'index'])->name('index');
                Route::get('create',            [ProductController::class, 'create'])->name('create');
                Route::post('store',            [ProductController::class, 'store'])->name('store');
                Route::get('show/{id}',         [ProductController::class, 'show'])->name('show');
                Route::get('{id}/edit',         [ProductController::class, 'edit'])->name('edit');
                Route::put('{id}/update',       [ProductController::class, 'update'])->name('update');
                Route::delete('{id}/destroy',   [ProductController::class, 'destroy'])->name('destroy');

            });
    });
