<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Images;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomePageController;
use App\Http\Controllers\SlidersController;




Route::get('/', [HomepageController::class, 'showHome']);

//Category Routes
Route::get('/category/all', [CategoryController::class, 'AllCategory'])->name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCategory'])->name('store.category');
Route::get('/category/edit/{id}', [CategoryController::class, 'EditCategory']);
Route::post('category/update/{id}', [CategoryController::class, 'UpdateCategory']);
Route::get('category/softdelete/{id}', [CategoryController::class, 'softDelete']);
Route::get('category/delete/{id}', [CategoryController::class, 'permanentDelete']);
Route::get('category/restore/{id}', [CategoryController::class, 'restoreCategory']);

//Brand Routes
Route::get('/brand/all', [BrandController::class, 'AllBrands'])->name('all.brand');
Route::post('/brand/add', [BrandController::class, 'addBrand'])->name('store.brand');
Route::get('/brand/edit/{id}', [BrandController::class, 'EditBrand']);
Route::post('/brand/update/{id}', [BrandController::class, 'UpdateBrand']);
Route::get('/brand/delete/{id}', [BrandController::class, 'DeleteBrand']);


//Multiple Images
Route::get('/multipleimages/all', [Images::class, 'showImages'])->name('all.multimages');
Route::post('/multipleimages/add', [Images::class, 'addImages'])->name('store.images');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

        //$users_data = User::all();

        return view('admin.index');
    })->name('dashboard');
});

//Admin Dashboard Routes
Route::get('/user/logout', [HomePageController::class, 'Logout'])->name('user.logout');

//Sliders Route
Route::get('/sliders/all', [SlidersController::class, 'showSliders'])->name('all.sliders');
Route::get('/sliders/add', [SlidersController::class, 'addSlider'])->name('add.slider');
Route::post('/sliders/store', [SlidersController::class, 'storeSlider'])->name('store.sliders');
Route::get('/sliders/edit/{id}', [SlidersController::class, 'editSlider']);
Route::post('/sliders/update/{id}', [SlidersController::class, 'udpateSlider']);
