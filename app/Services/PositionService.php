<?php

namespace App\Services;

use App\Models\Position;

class PositionService
{
    public function store($data)
    {
        Position::create($data);
    }
}
