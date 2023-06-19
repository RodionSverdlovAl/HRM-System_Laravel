<?php

namespace App\Services;



use App\Models\Task;

class TaskService
{
    public function store($data)
    {
        Task::create($data);
    }
}
