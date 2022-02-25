<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class DbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::disableForeignKeyConstraints();
        // Schema::enableForeignKeyConstraints();

        $this->setStringLength();
        $this->setRelationMorph();

    }

    protected function setStringLength(): void
    {
        Schema::defaultStringLength(env('DB_STRING_LENGTH', 255));
//        Schema::enableForeignKeyConstraints();
    }
    protected function setRelationMorph(): void
    {
        // Custom directive

        // Relation::morphMap([
        //     'User' => MyUser::class,
        //     'Post' => post::class,
        // ]);

    }
}