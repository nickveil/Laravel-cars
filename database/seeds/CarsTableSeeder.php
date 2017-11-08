<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert ([
        	'make'=> 'Toyota',
        	'model'=> 'Prius',
        	'produced_on'=> Carbon::parse('2015-04-01');
        ])

        DB::table('cars')->insert ([
        	'make'=> 'Honda',
        	'model'=> 'Accord',
        	'produced_on'=> Carbon::parse('2017-10-01');
        ])

        DB::table('cars')->insert ([
        	'make'=> 'Chevrolet',
        	'model'=> 'Cobalt',
        	'produced_on'=> Carbon::parse('2013-05-23');
        ])

        DB::table('cars')->insert ([
        	'make'=> 'Ford',
        	'model'=> 'F-150',
        	'produced_on'=> Carbon::parse('2010-12-19');
        ])

        DB::table('cars')->insert ([
        	'make'=> 'Porche',
        	'model'=> '718 Cayman',
        	'produced_on'=> Carbon::parse('2017-02-15');
        ])

        DB::table('cars')->insert ([
        	'make'=> 'Tesla',
        	'model'=> 'X',
        	'produced_on'=> Carbon::parse('2018-01-01');
        ])          
    }
}
