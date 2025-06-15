<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $primaryKey = 'student_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'student_id',
        'name',
        'email',
        'NIM',
        'major',
        'enrollment_year',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'student_id');
    }
}