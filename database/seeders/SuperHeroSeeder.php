<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SuperHero;

class SuperHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = [
            ["name" => "Batman"],
            ["name" => "Superman"],
            ["name" => "Wonder Woman"],
            ["name" => "Flash"],
            ["name" => "Robin"],
            ["name" => "Cyborg"],
            ["name" => "Alien"],
        ];

        foreach ($comics as $comic) {
            $newComic = new SuperHero();
            $newComic->name = $comic["name"];
            $newComic->save();
        }
    }
}
