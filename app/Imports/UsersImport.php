<?php

namespace App\Imports;

use App\Models\MyUser;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class UsersImport implements ToModel, WithBatchInserts, WithChunkReading
{
    /**
     * @param array $row
     *
     * @return MyUser|null
     */
    public function model(array $row)
    {
        return new MyUser([
            'l_name' => $row[0],
            'f_name' => $row[1],
            'age' => $row[2],
        ]);
    }

    public function batchSize(): int
    {
        return 50;
    }

    public function chunkSize(): int
    {
        return 50;
    }
}
