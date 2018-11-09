<?php

namespace App\Filters\Course;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class CourseFilters
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function filter(Builder $builder)
    {
        return $builder;
    }
}