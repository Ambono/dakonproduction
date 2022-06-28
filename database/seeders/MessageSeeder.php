<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;
use Illuminate\Support\Str;
class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $faker = \Faker\Factory::create();
        for($i=0; $i<5; $i++){
            Message::create([
                'titre' => $faker->sentence($nbWords =4, $variableWords =false),
                'prenom' => $faker->sentence($nbWords =4, $variableWords =false),
                'nom' => $faker->sentence($nbWords =4, $variableWords =false),
                'numeroPhone' => $faker->sentence($nbWords =4, $variableWords =false),
                'lieuDeResidence' => Str::random(10)
            ]);
        }
    }
}
