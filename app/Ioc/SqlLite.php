<?php

namespace App\Ioc;

use App\Ioc\DbConnection as IocDbConnection;

class SqlLite implements IocDbConnection
{
    public function create()
    {
        return "this is a sql lite";
    }
}