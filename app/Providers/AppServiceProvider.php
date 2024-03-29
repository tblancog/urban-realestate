<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Observers\ApartmentObserver;
use App\Apartment;
use App\Observers\BuildingObserver;
use App\Building;
use App\Observers\HouseObserver;
use App\House;
use App\Observers\ProjectObserver;
use App\Project;
use App\Observers\ArticleObserver;
use App\Article;



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
        Blade::directive('status_class', function ($class) {
            return "<?php echo str_replace(' ', '_', $class); ?>";
        });
        Blade::directive('status_show', function ($class) {
            return "<?php echo str_replace('_', ' ', $class); ?>";
        });

        // Apartment Observer
        Apartment::observe(ApartmentObserver::class);

        // Building Observer
        Building::observe(BuildingObserver::class);

        // House Observer
        House::observe(HouseObserver::class);

        // Project Observer
        Project::observe(ProjectObserver::class);

        // Article Observer
        Article::observe(ArticleObserver::class);
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
