<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname'
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function colleges()
    {
        return $this->belongsToMany(College::class,'teacher_colleges');
    }
}
