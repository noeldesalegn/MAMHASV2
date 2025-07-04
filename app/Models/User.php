<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function motherAppointments() {
        return $this->hasMany(appointment_detail::class, 'm_id');
    }
    public function appointments()
    {
        return $this->hasMany(appointment_detail::class, 'physician_id');
    }

    // Physician's appointments
    public function physicianAppointments() {
        return $this->hasMany(appointment_detail::class, 'phy_id');
    }
    public function appointmentsAsPhysician()
    {
        return $this->hasMany(appointment_detail::class, 'physician_id');
    }

    public function appointmentsAsPatient()
    {
        return $this->hasMany(appointment_detail::class, 'patient_id');
    }
    public function prescribedMedicines()
    {
        return $this->hasMany(Medicine::class, 'prescribed_by');
    }

    public function receivedMedicines()
    {
        return $this->hasMany(Medicine::class, 'prescribed_to');
    }
}
