<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $guarded = ['id'];

    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
