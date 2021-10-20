<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'page_number' => $this->faker->randomNumber(5, false),
            'price' => $this->faker->randomFloat(2),
            'barcode' => $this->faker->randomNumber(8, false),
            'category' => $this->faker->name(),
            'description' => $this->faker->text(),
        ];
    }
}
