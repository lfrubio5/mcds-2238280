<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // primero ciembra seeders
            UserSeeder::class,
            CategorySeeder::class,
            GameSeeder::class,
            //
        ]);
        //fabrica de datos llamado a la factoria de usuarios
    \App\Models\User::factory(100)->create();// general 100 registros en la tabla usuario
    }
}
