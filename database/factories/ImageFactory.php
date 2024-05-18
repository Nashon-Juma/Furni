<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'path' => $this->faker->randomElement([ 'https://images.unsplash.com/photo-1540574163026-643ea20ade25?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8c29mYXxlbnwwfHwwfHx8MA%3D%3D',
                                                'https://plus.unsplash.com/premium_photo-1683140589868-4f9b38110050?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8c29mYXxlbnwwfHwwfHx8MA%3D%3D',
                                                'https://images.unsplash.com/photo-1506898667547-42e22a46e125?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHNvZmF8ZW58MHx8MHx8fDA%3D',
                                                'https://images.unsplash.com/photo-1630585308572-f53438fc684f?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fHNvZmF8ZW58MHx8MHx8fDA%3D'
        ])
        ];
    }
}
