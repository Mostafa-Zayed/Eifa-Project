<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => [
                'ar' => 'ندوات',
                'en' => 'Seminars'
            ]
        ]);

        Category::create([
            'name' => [
                'ar' => 'مؤتمرات',
                'en' => 'Conferences'
            ]
        ]);
    }
}
