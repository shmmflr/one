<?php

//namespace App\Exports;
//
//use App\Models\MyUser;
//use Maatwebsite\Excel\Concerns\FromCollection;
//
//class UsersExport implements FromCollection
//{
//    public function collection()
//    {
//        return MyUser::all();
//    }
//}

namespace App\Exports;

use App\Models\MyUser;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromQuery, WithMapping
//    , WithHeadings
{
    public function query()
    {
        return MyUser::query();
    }

    /**
     * @return array
     * @var User $users
     */
    public function map($users): array
    {
        return [
            ucwords($users->l_name),
            ucwords($users->f_name),
            $users->age,
        ];
    }

//    public function headings(): array
//    {
//        return [
//            'نام',
//            'نام خانوادگی',
//            'سن',
//        ];
//    }

}
