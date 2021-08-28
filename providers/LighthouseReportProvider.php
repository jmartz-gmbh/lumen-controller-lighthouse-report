<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LighthouseReportProvider
 * @package App\Providers
 */
class LighthouseReportProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
