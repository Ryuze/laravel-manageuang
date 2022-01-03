<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'date',
        'total'
    ];

    protected $hidden = [
        'user_id'
    ];

    /**
     * Get the user that owns the accounting.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
