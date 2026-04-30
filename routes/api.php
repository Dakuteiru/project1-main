<?php

use App\Http\Controllers\GachaController;




Route::prefix('gacha')->group(function() {
    Route::get('/', [GachaController::class, 'index']);
    Route::get('{gacha}', [GachaController::class, 'get']);
});