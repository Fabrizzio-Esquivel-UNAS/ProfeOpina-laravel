<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $fillable = [
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }
    public function review()
    {
        return $this->hasOne(Review::class);
    }
}
