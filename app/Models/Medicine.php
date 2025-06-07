<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $guarded = [];
    public function physician()
    {
        return $this->belongsTo(User::class, 'prescribed_by');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'prescribed_to');
    }
}
