<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ParentCategory extends Model
{
    use HasFactory , SoftDeletes;
    protected $fillable = [
    'name',
    'slug',
    'description'
    ];

    public function childCategories(){
        return $this->hasMany(ChildCategory::class);
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
