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
            'name' => $this->faker->name,
            'cover_image' => 'cover.jpg',
            'description' => $this->faker->text,
            'isbn' => $this->faker->numberBetween(91234569,123456000),
            'price' =>$this->faker->numberBetween(99,1000),
            'mrp' => $this->faker->numberBetween(99,1000),
            'author_id' => $this->faker->numberBetween(1,2),
            'genres_id' => $this->faker->numberBetween(1,20),
        ];
    }
}
