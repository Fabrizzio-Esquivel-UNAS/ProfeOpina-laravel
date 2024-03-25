<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'ubication',
        'type'
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class,'teacher_colleges');
    }
}
