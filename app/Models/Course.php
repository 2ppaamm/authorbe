<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author_name',
        // Add any other fields you want to allow mass assignment
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contentBlocks()
    {
        return $this->hasMany(ContentBlock::class);
    }

    public function learningUnits()
    {
        return $this->hasMany(LearningUnit::class);
    }

        // Relationship with Assets
    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function analytics()
    {
        return $this->hasOne(CourseAnalytics::class);
    }

    public function progress()
    {
        return $this->hasMany(TrackProgress::class);
    }

    public function xapiStatements()
    {
        return $this->hasMany(XapiStatement::class);
    }

    public function author()
	{
	    return $this->belongsTo(User::class, 'user_id');
	}
}
