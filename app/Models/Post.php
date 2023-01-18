<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public const Published = 1;
    public const Draft = 0;

    protected $fillable = ['category_id', 'gallery_id', 'title', 'description', 'is_publish'];

    public function gallery()
    {
        return $this->belongsTo(Gallerie::class);
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

}

