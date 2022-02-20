<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    use HasFactory;

    protected $table = 'rates';

    protected $fillable = [
        'rate',
        'rateable_id',
        'rateable_type',
    ];

    public function rateable()
    {

        return $this->morphTo();
    }
}