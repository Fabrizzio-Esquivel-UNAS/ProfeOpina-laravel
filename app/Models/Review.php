<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'score',
        'votes'
    ];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    public function bookmark()
    {
        return $this->hasMany(Bookmark::class);
    }
}
