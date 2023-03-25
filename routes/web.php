<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Postcontroller;
use App\Http\Controllers\Backend\Catagorycontroller;
use App\Models\Post;
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
    $postshow=Post::where('status',1)->get();
       
    return view('frontend.landing',compact('postshow'));
});

Route::get('/admin', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix'=>'/admin'],function(){

    Route::group(['prefix'=>'/post'],function(){
        Route::get('/addpost',[Postcontroller::class, 'create'])->name('createpost');
        Route::post('/add_post',[Postcontroller::class, 'store'])->name('poststore');
        Route::get('/manage_post',[Postcontroller::class, 'index'])->name('postmanage');
        Route::get('/edit_post/{id}',[Postcontroller::class, 'edit'])->name('postedit');
        Route::post('/update_post/{id}',[Postcontroller::class, 'update'])->name('postupdate');
        Route::get('/delete/{id}',[Postcontroller::class, 'destroy'])->name('postdelete');

    });
});

Route::group(['prefix'=>'/admin'],function(){

    Route::group(['prefix'=>'/category'],function(){
        Route::get('/addcategory',[Catagorycontroller::class, 'create'])->name('createcategory');
        Route::post('/catinsert',[Catagorycontroller::class, 'store'])->name('catinsert');
        Route::get('/catshow',[Catagorycontroller::class, 'catshow'])->name('catshow');
        Route::get('/catedit/{id}',[Catagorycontroller::class, 'catedit'])->name('catedit');
        Route::post('/catupdate/{id}',[Catagorycontroller::class, 'update'])->name('catupdate');
        Route::get('/delete/{id}',[Catagorycontroller::class, 'delete'])->name('catdelete');
       
    });
});

require __DIR__.'/auth.php';
