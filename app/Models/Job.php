<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobType; // Explicit import
use App\Models\Category;
use App\Models\User;
use App\Models\JobApplication;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'salary',
        'location',
        'job_type_id',
        'category_id',
        'user_id',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'created_at' => 'datetime'
    ];

    /**
     * Get the job type associated with the job
     */
    public function jobType()
    {
        return $this->belongsTo(JobType::class, 'job_type_id');
    }

    /**
     * Get the category associated with the job
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user who posted the job
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all applications for this job
     */
    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }

    /**
     * Check if job was recently posted
     */
    public function isNew(): bool
    {
        return $this->created_at->greaterThan(now()->subDays(3));
    }
}