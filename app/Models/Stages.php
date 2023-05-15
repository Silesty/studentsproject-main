<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stages extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    protected $with = ['activeCourses'];

    /**
     * Get all of the courses for the Stages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany(Courses::class, 'stage_id', 'id');
    }
    public function activeCourses()
    {
        return $this->hasMany(Courses::class, 'stage_id', 'id')->where('is_active', 1);
    }
}
