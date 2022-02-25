<?php

namespace App\Providers;

use App\Http\Controllers\IocServiceController;
use App\Interface\Animals;
use App\Interface\Cat;
use App\Ioc\DbConnection;
use App\Ioc\MySql;
use App\Ioc\SmsNotif;
use App\Ioc\SqlLite;
use Illuminate\Support\ServiceProvider;

class ConnectionServiceProvider extends ServiceProvider
{
    //روش بهینه استفاده از سرویس ها اینه که فراخوانی که شدن تا زمانی که لازمشون نداریم در حافظه ذخیره نشن
    // برای اینکار دو عمل باید انجام بشه

    protected $defel = true;

    public $singletons = [
        DbConnection::class => SqlLite::class,
    ];

    // public $bindings = [
    //     DbConnection::class => SqlLite::class,
    // ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->singleton('notif', SmsNotif::class);
        // $role = new Role();
        // $this->app->instance('AdminUser', $role);

        // $this->app->singleton(DbConnection::class, MySql::class);
        // $this->app->singleton(DbConnection::class, SqlLite::class);

        // $dog = new Dog;
        // $this->app->instance(Animals::class, $dog);

        $this->app->singleton(Animals::class, function ($type) {
            return new Cat($type);
        });
// ------------------------------------------------------------------------

//دستور زیر فقط برای وابستگی ها تابع سازنده می باشد
// بهش میگه که اگه در تابع سازنده شما مقدار ورودی نداری من بهت پیش فرض میدم

        $this->app->when(MySql::class)->needs('$age')->give(25);

        $this->app->when(IocServiceController::class)
            ->needs(DbConnection::class)
            ->give(SqlLite::class);

// ---------------------------------------------------------------------------------
        // تابع زیر میگه گوش بزنگ باش هر وقت کلاس گربه رو صدا زدیم دستور داخل تابع رو اجرا کن
        // این دستور میتونه هر چیزی باشه مثلا پیاک بره براش یا ایمیل یا یچی در دیتا بیس ذخیره بشه و...
        // $this->app->resolving(Cat::class, function ($obj, $app) {
        //     dd('1233215');
        // });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    // مرحله دو برای بهینه کردن سرویس ها
    public function providers()
    {
        return [

            DbConnection::class,
        ];
    }
}