<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoboticsKit extends Model
{

    // relación de robotics kits pueden estar asociados con muchos cursos

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
