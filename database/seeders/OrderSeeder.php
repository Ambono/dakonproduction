<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
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
                Order::create([
                    'maladie' => $faker->sentence($nbWords =4, $variableWords =false),
                    'produit' => $faker->sentence($nbWords =4, $variableWords =false),
                    'quantite' => $faker->sentence($nbWords =4, $variableWords =false),
                    'complete' => true,
                    'numeroDeCommande' => Str::random(10)
                ]);
            }
        
   }
  }
