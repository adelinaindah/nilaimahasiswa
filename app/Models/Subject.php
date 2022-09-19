<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name_subject', 'teacher'];

    public function student()
    {
        return $this->belongsToMany('App\Models\Student')->withPivot(['score']);
    }
}
