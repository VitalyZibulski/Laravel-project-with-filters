<?php

namespace App;

use App\Filters\Course\CourseFilters;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    public function scopeFilter(Builder $builder, $request)
    {

        return (new CourseFilters($request))->filter($builder);
    }
}
