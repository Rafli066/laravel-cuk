<?php

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
        // $this->call(PostsTableSeeder::class);
        $this->call(PemainBolaSeeder::class);
        // // $this->call(TugasLaravelSeeder::class);
        // factory(App\Tabungan::class, 100) ->create();
        // factory(App\Costumer::class, 1000) ->create();
        // factory(App\PemainBola::class, 10) ->create();
    }

}
