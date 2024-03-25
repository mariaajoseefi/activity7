<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    use HasFactory;

    // relación de cursos tiene un robotics kit
    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }
}
