<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $guarded = false;
    use HasFactory;

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function users()
    {
        return $this->hasMany(User::class, 'position_id', 'id');
    }
}
