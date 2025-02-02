<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StressLevel extends Model
{

    use HasFactory;
    //
    protected $fillable = [
        'user_id',
        'stress_level',
        'logged_at',
    ];

    protected $casts = [
        'logged_at' => 'datetime',
    ];
    
    /**
     * Get the user that owns the stress log record.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
