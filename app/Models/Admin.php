<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone_number',
        'last_activity',
        'timezone',
        'online'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reports()
    {
        return $this->belongsToMany(Report::class,'report_admins');
    }
}
