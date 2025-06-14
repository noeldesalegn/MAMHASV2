<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Messages extends Model
{
    protected $fillable = [
        'chat_id',
        'sender_id',
        'content',
        'attachment_path',
        'read_at',
    ];

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chats::class);
    }

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function isRead(): bool
    {
        return $this->read_at !== null;
    }
}
