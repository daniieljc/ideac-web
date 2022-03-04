<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['code', 'description', 'stock', 'price'];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
