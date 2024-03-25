<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'external_site'
    ];
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
    public function college()
    {
        return $this->hasOne(College::class);
    }
}
