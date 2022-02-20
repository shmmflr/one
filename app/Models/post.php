<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'created_by',
    ];

    public function user()
    {
        return $this->belongsTo(MyUser::class, 'created_by', 'id');
    }

    public function userName()
    {
        return is_null($this->user) ? null : $this->user->l_name;
    }

    public function rates()
    {
        // dd($this->morphMany(Rate::class, 'rateable'));
        return $this->morphMany(Rate::class, 'rateable');
    }
}