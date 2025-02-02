<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CigaretteSmoked extends Model
{
    use HasFactory;
    //

    protected $table = 'cigarettes_smoked';


    protected $fillable = [
        'user_id',
        'cigarettes_count',
        'cost',
        'smoked_at',
    ];

    protected $casts = [
        'smoked_at' => 'datetime',
    ];

    /**
     * Get the user that owns the cigarette smoked record.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
