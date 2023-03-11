<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\userSearchHistory;
use Faker\Factory as Faker;

class UserSearchHistoryFactory extends Factory
{
    protected $model = userSearchHistory::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'keyword' => $faker->words(rand(1,3), true),
            'user' => $faker->name(),
            'result' => $faker->paragraph(),
        ];
    }
}
