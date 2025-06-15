<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lecturers extends Model
{
    protected $primaryKey = 'lecturer_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'lecturer_id',
        'name',
        'NIP',
        'department',
        'email',
    ];

    public function courseLecturers()
    {
        return $this->hasMany(CourseLecturers::class, 'lecturer_id');
    }
}