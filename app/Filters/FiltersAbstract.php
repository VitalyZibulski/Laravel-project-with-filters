<?php

namespace App\Filters;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class FiltersAbstract
{
    protected $request;

    protected $filters = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function filter(Builder $builder)
    {

        foreach ($this->filters as $filter => $class) { // $filter - access, $class - AccessFilter.php
           var_dump($this->resolveFilter($class));
        }

        return $builder;
    }

    protected function resolveFilter($class)
    {
        return new $class;
    }
}