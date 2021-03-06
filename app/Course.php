<?php

namespace App;

use App\Filters\Course\CourseFilters;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    public function scopeFilter(Builder $builder, $request, array $filters = [])
    {

        return (new CourseFilters($request))->add($filters)->filter($builder);
    }
}
