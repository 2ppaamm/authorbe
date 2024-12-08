<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningObjective extends Model
{
    use HasFactory;

    public function learningUnit()
    {
        return $this->belongsTo(LearningUnit::class);
    }
}