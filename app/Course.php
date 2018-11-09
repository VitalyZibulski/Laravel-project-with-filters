<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    public function scopeFilter(Builder $builder)
    {
        return $builder;
    }
}
