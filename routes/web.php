<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::resource('products', ProductController::class);// resourse позволяет нам не писать пути ко всем контроллерам в productControllers а также не указывать тип их метода