<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerformanceTask extends Model
{
    protected $fillable = ['description'];

    public function users() {
        return $this->belongsToMany(User::class);
    }
}
