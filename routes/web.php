<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DonateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('products', ProductController::class);// resourse позволяет нам не писать пути ко всем контроллерам в productControllers а также не указывать тип их метода
// Route::resource('donates', DonateController::class);

Route::get('donates',[DonateController::class,'index'])->name('donates.index');
Route::post('donates',[DonateController::class, 'store'])->name('donates.store');
Route::get('donates/create',[DonateController::class, 'create'])->name('donates.create');//create
Route::get('donates/{donate}', [DonateController::class, 'show'])->name('donates.show');//show
Route::get('donates/{donate}/edit',[DonateController::class, 'edit'])->name('donates.edit');//edit
Route::put('donates/{donate}', [DonateController::class, 'update'])->name('donates.update');//update
Route::delete('donates/{donate}',[DonateController::class,'destroy'])->name('donates.destroy');//destroy


Route::put('/post/{post}', function (Post $post) {
    // The current user may update the post...
})->middleware('can:update,post');