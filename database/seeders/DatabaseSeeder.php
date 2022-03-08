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
        $this->call([PageSeeder::class]);
        $this->call(SettingSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(FounderSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(MediaSeeder::class);
    }
}
