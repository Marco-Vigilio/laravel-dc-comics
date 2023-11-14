<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\SuperHero;
use App\Models\Helper;

class HelperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker): void
    {
        $superheros = SuperHero::all();

        foreach ($superheros as $superhero) {

            $newHelper = new Helper();
            $newHelper->super_hero_id = $superhero->id;
            $newHelper->name = $faker->name();
            $newHelper->save();
        }
    }
}
