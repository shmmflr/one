<?php

namespace App\Providers;

use App\Interface\Animals;
use App\Interface\Cat;
use App\Ioc\DbConnection;
use App\Ioc\MySql;
use App\Ioc\SmsNotif;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
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

        $this->app->singleton('notif', SmsNotif::class);
        // $role = new Role();
        // $this->app->instance('AdminUser', $role);

        $this->app->singleton(DbConnection::class, MySql::class);

        // $dog = new Dog;
        // $this->app->instance(Animals::class, $dog);

        $this->app->singleton(Animals::class, function ($type) {
            return new Cat($type);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Custom directive

        // Relation::morphMap([
        //     'User' => MyUser::class,
        //     'Post' => post::class,
        // ]);

        Schema::disableForeignKeyConstraints();

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