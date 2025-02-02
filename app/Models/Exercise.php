<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'user_id',
        'exercise_type',
        'duration',
        'calories_burned',
        'logged_at',
    ];

    protected $casts = [
        'logged_at' => 'datetime',
    ];

    /**
     * Get the user that owns the exercise log record.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
