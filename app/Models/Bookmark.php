<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function review()
    {
        return $this->hasOne(Review::class);
    }
}
