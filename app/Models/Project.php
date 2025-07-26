<?php declare(strict_types=1); 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'category',
        'technologies',
        'image',
        'demo_link',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the category display name
     */
    public function getCategoryDisplayNameAttribute()
    {
        return match($this->category) {
            'web' => 'Applications Web',
            'mobile' => 'Applications Mobile',
            'ai' => 'Intelligence Artificielle',
            'design' => 'UX/UI Design',
            default => ucfirst($this->category),
        };
    }

    /**
     * Get the category color classes
     */
    public function getCategoryColorClassesAttribute()
    {
        return match($this->category) {
            'web' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200',
            'mobile' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200',
            'ai' => 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200',
            'design' => 'bg-orange-100 text-orange-800 dark:bg-orange-900 dark:text-orange-200',
            default => 'bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200',
        };
    }

    /**
     * Scope for featured projects
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope for projects by category
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
