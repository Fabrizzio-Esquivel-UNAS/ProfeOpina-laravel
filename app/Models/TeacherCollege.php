<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TeacherCollege extends Pivot
{
    protected $fillable = [
        'teacher_id',
        'college_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function college()
    {
        return $this->belongsTo(College::class);
    }
}
