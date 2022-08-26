<?php

use Faker\Factory;
use Phinx\Seed\AbstractSeed;

class BookSeeder extends AbstractSeed
{
    public function run()
    {
        $faker = Factory::create('fr_FR');
        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->sentence($faker->numberBetween(1, 3)),
                'price' => $faker->numberBetween(5, 50),
                'isbn' => $faker->isbn10(),
                'author' => $faker->name(),
                'releasedAtYear' => (int) $faker->year(),
                'image' => 'uploads/'.$faker->numberBetween(0, 5).'.png'
            ];
        }

        $posts = $this->table('book');
        $posts->truncate();
        $posts->insert($data)->saveData();
    }
}
