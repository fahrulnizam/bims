<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state')->insert([
            ['name' => 'JOHOR'],
            ['name' => 'KEDAH'],
            ['name' => 'KELANTAN'],
            ['name' => 'MELAKA'],
            ['name' => 'NEGERI SEMBILAN'],
            ['name' => 'PAHANG'],
            ['name' => 'PERAK'],
            ['name' => 'PERLIS'],
            ['name' => 'PULAU PINANG'],
            ['name' => 'SABAH'],
            ['name' => 'SARAWAK'],
            ['name' => 'SELANGOR'],
            ['name' => 'TERENGGANU'],
            ['name' => 'W.P KUALA LUMPUR'],
            ['name' => 'W.P LABUAN'],
            ['name' => 'W.P PUTRAJAYA'],
        ]);
    }
}
