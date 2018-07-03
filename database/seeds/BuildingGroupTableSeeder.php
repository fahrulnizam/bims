<?php

use Illuminate\Database\Seeder;

class BuildingGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('building_group')->insert([
            ['name' => 'Consumer'],
            ['name' => 'SME']
        ]);
    }
}
