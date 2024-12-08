<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = ['course_id', 'filename', 'path'];

    // Relationship with Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
