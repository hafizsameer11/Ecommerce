<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
protected $guarded = [];
      protected $fillable = [
        'featured_image',
                'images',

        'title',
        'price',
        'discount_price',
        'rating',
        'short_description',
        'description',
        'category_id',
        'sub_category_id',
    ];

    protected $casts = [
        'images' => 'array',
    ];
  

    // Relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'sub_category_id');
    }

      public function variations()
    {
        return $this->hasMany(ProductVariation::class);
    }
}