<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $random_number = random_int(1, 4);
        return [
            'name' => $this->faker->name(),
            'photo_url' => "img/produk/baju-{$random_number}.jpg",
            'user_id' => '1',
        ];
    }
}
