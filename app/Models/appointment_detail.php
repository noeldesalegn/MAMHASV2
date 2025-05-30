<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appointment_detail extends Model
{
    protected $guarded = [];
    public function patient() {
        return $this->belongsTo(User::class, 'patient_id');
    }

    // Relationship to physician (User)
    public function physician() {
        return $this->belongsTo(User::class, 'physician_id');
    }
}
