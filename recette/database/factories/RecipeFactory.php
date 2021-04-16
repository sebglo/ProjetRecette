<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence($nbWords = 6, $variableNbSentences = true);

        return [
            //
            'autor_id' => $this->faker->seed(1234),
            'title' => $title,
            'content' => $this->faker->paragraph($nbSentences = 10, $variableNbSentences = true),
            'ingredients' => $this->faker->paragraph($nbSentences = 10, $variableNbSentences = true),
            'url' => str_replace(' ', '-', $title), //$this->faker->url,
            'tags' => $this->faker->words($nb = 3, $asText = true),

        ];
    }
}
