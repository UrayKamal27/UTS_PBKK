<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseLecturers extends Model
{
    protected $table = 'course_lecturers';

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'course_id',
        'lecturer_id',
        'role',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }

    public function lecturer()
    {
        return $this->belongsTo(Lecturers::class, 'lecturer_id');
    }
}