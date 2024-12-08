<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'course_id', 'description', 'LU_code', 'order'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function outcomes()
    {
        return $this->hasMany(LearningOutcome::class);
    }

    public function objectives()
    {
        return $this->hasMany(LearningObjective::class);
    }

    public function knowledgeAndAbilities()
    {
        return $this->hasMany(KnowledgeAndAbility::class);
    }
}
