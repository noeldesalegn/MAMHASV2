<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appointment_detail extends Model
{
    public function mother() {
        return $this->belongsTo(User::class, 'm_id');
    }

    // Relationship to physician (User)
    public function physician() {
        return $this->belongsTo(User::class, 'phy_id');
    }
}
