<?php

use Illuminate\Database\Seeder;

class TermiyancMoactiontestDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('termiyanc_moactiontest_users')->insert([
            'name' => 'Иван'
        ]);

        DB::table('termiyanc_moactiontest_subscriptions')->insert([
            ['name' => 'Channel 1'],
            ['name' => 'Channel 2'],
            ['name' => 'Channel 3'],
            ['name' => 'Channel 4'],
            ['name' => 'Channel 5'],
            ['name' => 'Channel 6']
        ]);
    }
}
