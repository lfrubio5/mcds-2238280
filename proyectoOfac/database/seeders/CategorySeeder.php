<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Metodo Insert
        DB::table('categories')->insert([
			'name'  => 'Xbox One',
			'description'     => 'lorem insup sit amet.',
			
        ]);

        // metodo ORM
        $cat = new Category;
        $cat->name  = 'Play station';
        $cat->description = 'Desarrollado por sony';
        $cat->save();

        $cat = new Category;
        $cat->name  = 'GamerPc';
        $cat->description = 'Gamer pc lorem insup sit amet.';
        $cat->save();
    }
}
