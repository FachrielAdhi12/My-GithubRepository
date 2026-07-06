<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Schedule;

Schedule::call(function () {
    app(PortfolioController::class)->syncGithub();
})->hourly(); // Akan otomatis menarik data dari GitHub setiap jam