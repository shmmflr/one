<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'l_name', 'f_name', 'age', 'email', 'gender', 'military',
    ];

    public function getFullNameAttribute()
    {
        return $this->l_name . ' ' . $this->f_name;
    }

    public function setEmialAddressAttribute($value)
    {
        dd($this->attributes['email']);

    }
}