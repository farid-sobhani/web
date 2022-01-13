<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public static $seeders = [];

    public function run()
    {
//         \App\Models\User::factory(10)->create();
        // for load seeders in all Modules
        foreach (self::$seeders as $seeder) {
            $this->call($seeder);
        }
    }
}
