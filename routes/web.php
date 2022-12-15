<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Admin\MsgController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/index', [HomeController::class,'index']);

Route::get('/products', [ProductsController::class,'index']);
Route::get('/products/{id}', [ProductsController::class,'show']);

Route::get('/contact', [ContactController::class,'index']);
Route::post('/msg', [ContactController::class,'store']);

Route::get('/about', [AboutController::class,'index']);





Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/admin', function () {
        return view('admin.index');
    }
    );

    Route::get('/admin/about', [AdminAboutController::class, 'edit']);
    Route::patch('/admin/about/update', [AdminAboutController::class, 'update']);

    Route::get('/admin/messeges', [MsgController::class, 'index']);
    Route::delete('/admin/messeges/delete/{id}', [MsgController::class, 'destroy']);

    Route::resource('/admin/products', ProductController::class);
    Route::resource('/admin/categories', CategoryController::class);
});
require __DIR__.'/auth.php';
