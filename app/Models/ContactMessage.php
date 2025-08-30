<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'subject',
        'message',
        'is_read',
        'ip_address',
        'source_page',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($message) {
            $message->ip_address = request()->ip();
            $message->source_page = 'contact';
            $message->is_read = false;
        });
    }
}
