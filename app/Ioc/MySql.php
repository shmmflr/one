<?php

namespace App\Ioc;

use App\Ioc\DbConnection as IocDbConnection;

class MySql implements IocDbConnection
{

    public function create()
    {
        return 'this is a MySql';
    }
}