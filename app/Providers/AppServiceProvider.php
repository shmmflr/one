<?php

namespace App\Providers;

use App\Interface\Cat;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     *Register any application services.
     *
     *@return void
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

        Blade::directive('fontBold', function ($query) {

            $text = "<span><b> $query</b></span>";
            return $text;
        });
        // Custom if
        Blade::if('is_number', function ($query) {
            if (is_int($query)) {
                $num = $query;

                echo $num;
            } else {
                echo 'is not number';
            }
        });
    }
}