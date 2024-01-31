<?php

// app/Providers/DataServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\CategoryKegiatan;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\View;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    // public function boot()
    // {
    //     // Using a view composer to share $category and $kegiatan with all views
    //     View::composer('*', function ($view) {
    //         $category = CategoryKegiatan::all();
    //         $kegiatan = Kegiatan::all();

    //         $view->with('category', $category);
    //         $view->with('kegiatan', $kegiatan);
    //     });
    // }

    public function boot()
    {
        // Using a view composer to share $category and $kegiatan with the includes.navbar view
        View::composer('includes.navbar', function ($view) {
            $category = CategoryKegiatan::all();
            $kegiatan = Kegiatan::all();

            $view->with('category', $category);
            $view->with('kegiatan', $kegiatan);
        });
    }
}
