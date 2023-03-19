<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;

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
    return view('main');
});

Route::prefix('books')->group(function () {
    Route::get('', [BookController::class,'index'])->name('books.index');
    Route::post('/getBooks', [BookController::class,'getBooksForCategory'])->name('getBooks');
    Route::get('create', [BookController::class,'create'])->name('createBook');
    Route::get('/search',[BookController::class,'searchForm'])->name('searchForm');  
    Route::get('/{id}', [BookController::class,'show'])->name('show');
    Route::post('/store', [BookController::class, 'store'])->name('storeBook');
    Route::get('/edit/{id}', [BookController::class, 'edit'])->name('editBook');
    Route::put('/update/{id}', [BookController::class, 'update'])->name('updateBook');
    Route::delete('/destroy/{id}', [BookController::class, 'destroy'])->name('destroyBook');
    Route::post('',[BookController::class,'resultSearchForm'])->name('resultSearchForm');
    
});



Route::prefix('categories')->group(function (){
    Route::get('/', [CategoryController::class,'index'])->name('categories.index');
    Route::get('create', [CategoryController::class,'create'])->name('createCategory');
    Route::post('/store', [CategoryController::class, 'store'])->name('storeCategory');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('editCategory');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('updateCategory');
    Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroyCategory');
});



