<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class TaskFilter extends AbstractFilter
{
    public const YEAR= 'year';
    public const MONTH= 'month';

    protected function getCallbacks(): array
    {
        return [
            self::YEAR=> [$this, 'year'],
            self::MONTH=> [$this, 'month']
        ];
    }

    public function year(Builder $builder, $value)
    {
        $builder->where('year', $value);
    }
    public function month(Builder $builder, $value)
    {
        $builder->where('month', $value);
    }

}
