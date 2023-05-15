<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'arabic_name',
        'english_name',
        'credit',
        'type',
        'stage_id',
        'user_id',
        'is_active',
    ];
    /**
     * Get the stage that owns the Courses
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stage()
    {
        return $this->belongsTo(Stages::class, 'stage_id', 'id');
    }
    /**
     * Get the user that owns the Courses
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
