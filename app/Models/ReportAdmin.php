<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ReportAdmin extends Pivot
{
    //
    protected $fillable = [
        'report_id',
        'admin_id'
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
