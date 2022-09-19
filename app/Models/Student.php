<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name_student', 'id_class', 'id_subject'];

    public function score()
    {
       return $this->belongsToMany('App\Model\Subject')->withPivot(['score']);
    }
}
