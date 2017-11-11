<?php

use Illuminate\Database\Seeder;

class MakesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('makes')->insert ([
      	'name'=> 'Toyota',
      ]);

      DB::table('makes')->insert ([
      	'name'=> 'Honda',
      ]);

      DB::table('makes')->insert ([
      	'name'=> 'Chevrolet',
      ]);

      DB::table('makes')->insert ([
      	'name'=> 'Ford',
      ]);

      DB::table('makes')->insert ([
      	'name'=> 'Porche',
      ]);

      DB::table('makes')->insert ([
      	'name'=> 'Tesla',
      ]);

    }
}
