<?php

    use App\Http\Controllers\ClientController;
    use App\Http\Controllers\EnumsController;
    use App\Http\Controllers\OrderController;
    use App\Http\Controllers\ServiceController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResources([
        'services' => ServiceController::class,

    ]);
    Route::apiResource('orders',OrderController::class);
    Route::apiResource('clients', ClientController::class);
    Route::get('/shared/enums/{object}', EnumsController::class);
});
