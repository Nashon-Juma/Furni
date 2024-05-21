<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'path'];
    public function product()
    {
        return $this->hasOne(Product::class, 'main_image_id');
    }
}
