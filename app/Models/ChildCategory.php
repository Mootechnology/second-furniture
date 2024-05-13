<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;

class ChildCategory extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;
    protected $fillable = [
        'name',
        'slug',
        'parent_category_id',
        'description'
        ];

    public function parentCategory()
    {
        return $this->belongsTo(ParentCategory::class, 'parent_category_id');
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            // Generate slug from category name with spaces replaced by hyphens
            $category->slug = Str::slug($category->name, '-');
        });
    }



}

