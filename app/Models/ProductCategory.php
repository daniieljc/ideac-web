<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['article_id', 'subcategory_id'];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
