<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('admin_ass', function ($asset) {
            return "<?php echo 'https://jalvinhomes.com/public/backend/'.$asset; ?>";
        });
        Schema::defaultStringLength(191);
    }
}
