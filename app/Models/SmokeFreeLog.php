<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmokeFreeLog extends Model
{
    /** @use HasFactory<\Database\Factories\SmokeFreeLogFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'money_saved',
        'logged_at',
    ];


    protected $casts = [
        'logged_at' => 'datetime',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
