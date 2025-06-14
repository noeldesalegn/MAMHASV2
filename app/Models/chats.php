<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chats extends Model
{
    protected $fillable = [
        'patient_id',
        'physician_id',
    ];

    public function messages(): HasMany
    {
        return $this->hasMany(messages::class,'chat_id');
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function physician(): BelongsTo
    {
        return $this->belongsTo(User::class, 'physician_id');
    }

    public function lastMessage()
    {
        return $this->messages()->latest()->first();
    }

    public function unreadCountFor($userId)
    {
        return $this->messages()
            ->where('sender_id', '!=', $userId)
            ->whereNull('read_at')
            ->count();
    }
}
