<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = ['id'];

    public function class()
    {
        return $this->belongsTo(Classroom::class, 'classroom');
    }
}
