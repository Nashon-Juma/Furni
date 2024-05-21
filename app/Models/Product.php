<?php

namespace App\Models;

namespace App\Models;
use Money\Money;
use Money\Currency;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;

class Product extends Model
{
    // use HasAttributes;

    use HasFactory;
    public function mainImage()
    {
        return $this->belongsTo(Image::class, 'main_image_id');
    }
    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn (int $value) => new Money($value, new Currency('USD')),
        );
    }
}
