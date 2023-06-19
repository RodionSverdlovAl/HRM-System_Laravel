<?php

namespace App\Services;

use App\Models\Department;

class DepartmentService
{
    public function store($data)
    {
        Department::create($data);
    }
}
