<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Observers\ApartmentObserver;
use App\Apartment;
use App\Observers\BuildingObserver;
use App\Building;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::directive('convert', function ($money) {
            return "<?php echo number_format($money, 0, '', '.'); ?>";
        });

        // Apartment Observer
        Apartment::observe(ApartmentObserver::class);
       
        // Building Observer
        Building::observe(BuildingObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
