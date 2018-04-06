<?php

use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airports')->insert([
            'latitude' => 68.53,
            'longitude' => 89.80,
            'name' => 'Kugaaruk Airport',
            'city' => 'Pelly Bay',
            'country' => 'Canada',
        ]);
        DB::table('airports')->insert([
            'latitude' => 28.20,
            'longitude' => 83.98,
            'name' => 'Pokhara Airport',
            'city' => 'Pokhara',
            'country' => 'Nepal',
        ]);
        DB::table('airports')->insert([
            'latitude' => 53.55,
            'longitude' => 10.00,
            'name' => 'Hamburg Hbf',
            'city' => 'Hamburg',
            'country' => 'Germany',
        ]);
        DB::table('plane_models')->insert([
            'economy' => 2,
            'business' => 1,
            'firstclass' =>1,
            'manufacturer' => 'Airbus Industrie',
            'name' => 'Airbus A340 300',
            'cargo_limit' => 100,
        ]);

        DB::table('planes')->insert([
            'model' => 1,
            'inducted_on' => '2011-10-11',
            'status' =>'Safe',
        ]);
        DB::table('planes')->insert([
            'model' => 1,
            'inducted_on' => '2011-11-18',
            'status' =>'Safe',
        ]);

        DB::table('seats')->insert([
            'class' => 'Economy',
            'seat_no' => 'E1',
            'plane_id' =>1,
        ]);
        DB::table('seats')->insert([
            'class' => 'Economy',
            'seat_no' => 'E2',
            'plane_id' =>1,
        ]);
        DB::table('seats')->insert([
            'class' => 'Economy',
            'seat_no' => 'E1',
            'plane_id' =>2,
        ]);

        DB::table('loyalty_types')->insert([
            'program' => 'Golden',
            'minimum_miles' => 1000,
            'free_miles' =>30,
            'status' =>'active'
        ]);

        DB::table('scheduled_flights')->insert([
            'plane_id' => 1,
            'start' => 1,
            'dest' =>2,
            'dod' =>'2018-03-01',
            'doa' =>'2018-03-01',
            'tod' =>'05:10:00',
            'toa' =>'15:20:00',
            'price' =>30000,
        ]);

        DB::table('scheduled_flights')->insert([
            'plane_id' => 2,
            'start' => 2,
            'dest' =>3,
            'dod' =>'2018-03-02',
            'doa' =>'2018-03-03',
            'tod' =>'10:10:00',
            'toa' =>'05:20:00',
            'price' =>30000,
        ]);
    }
}
