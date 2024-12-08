<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningOutcome extends Model
{
    use HasFactory;

    public function learningUnit()
    {
        return $this->belongsTo(LearningUnit::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

