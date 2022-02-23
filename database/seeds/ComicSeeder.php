<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {
            $comic = new Comic();
            $comic->author = $faker->word();
            $comic->illustrator = $faker->word();
            $comic->description = $faker->words(10, true);
            $comic->price = $faker->randomFloat(2, 50, 200);
            $comic->save();
        }
    }
}
