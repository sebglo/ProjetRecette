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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(5)->has(\App\Models\Recipe::factory()->count(5))->create();
        \App\Models\User::factory(5)->has(\App\Models\Contact::factory()->count(5))->create();
        //\App\Models\User::factory(5)->has(\App\Models\Comment::factory()->count(5))->create();
    }
}
