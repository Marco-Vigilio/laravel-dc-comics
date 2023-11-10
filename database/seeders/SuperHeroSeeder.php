<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
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

        $SuperHeros = [
            ["name" => "Batman"],
            ["name" => "Superman"],
            ["name" => "Wonder Woman"],
            ["name" => "Flash"],
            ["name" => "Cyborg"],
            ["name" => "Alien"],
        ];

        foreach ($SuperHeros as $SuperHero) {
            $newSuperHero = new SuperHero();
            $newSuperHero->name = $SuperHero["name"];
            $newSuperHero->save();
        }


        //con API gia fatta
        /*
        $response = Http::get("https://akabab.github.io/superhero-api/api/all.json");
        if ($response->successful()) {
            $superheros = $response->json();
            //var_dump($superheros);
            //die;
            foreach ($superheros as $superhero) {
                $newSuperHero = new SuperHero();
                $newSuperHero->name = $superhero['name'];
    
                    //$newCocktail->content = $faker->paragraphs(10, true);
                    //$newCocktail->image = $cocktail['strDrinkThumb'];
                    
                $newSuperHero->save();
            }
            $this->command->info('success');
        }
        */
        $this->command->info('success');
    }
}
