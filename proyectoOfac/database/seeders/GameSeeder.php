<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              //Metodo Insert
              DB::table('games')->insert([
                'name'  => "Halo",
                'description' => "Halo Creado por microsoft",
                'user_id' => 1,
                'category_id' => 1,
                'slider' => 1,
                'price' => 59
                
            ]);

             // metodo ORM
             $gm = new Game;
             $gm->name  = 'Age Empires I';
             $gm->description = 'Age of Empires es una serie de videojuegos de estrategia en tiempo real para computadoras personales, desarrollada en un principio por Ensemble Studios y más tarde por Skybox Labs, y publicada por Xbox Game Studios';
             $gm->user_id = 1;
             $gm->category_id =3; 
             $gm->slider =      0;
             $gm->price = 50;
             $gm->save();           
    
            // metodo ORM
            $gm = new Game;
            $gm->name  = 'Halo 2';
            $gm->description = 'Edicion Clasica.';
            $gm->user_id = 1;
            $gm->category_id =1; 
            $gm->slider =      0;
            $gm->price = 49;
            $gm->save();

            // metodo ORM
            $gm = new Game;
            $gm->name  = 'Need for Speed';
            $gm->description = 'Need for Speed es una franquicia de videojuegos de carreras publicada por Electronic Arts y actualmente desarrollada por Criterion Games';
            $gm->user_id = 1;
            $gm->category_id = 2; 
            $gm->slider =      0;
            $gm->price = 79;
            $gm->save();
    }
}
