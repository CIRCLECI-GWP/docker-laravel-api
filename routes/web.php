<?php

use App\Helpers\ExchangeRateHelper;
use Illuminate\Support\Facades\Route;

// The rates endpoint is stateless JSON, so it skips the session and cookie
// middleware. The container then runs without an APP_KEY or a database.
Route::get('/', function () {
    return response(ExchangeRateHelper::getAllRates());
})->withoutMiddleware('web');
