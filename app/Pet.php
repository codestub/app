<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $table = 'pets';
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
