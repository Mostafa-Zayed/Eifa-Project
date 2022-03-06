<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Founder;
class FounderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Founder::create([
            'name' => [
                'en' => 'Dr. Mohamed El-Beltagy',
                'ar' => '
د. محمد البلتاجي'
            ],
            'description' => [
                'en' => 'One of the most important experts in the Islamic banking industry in Egypt and the Arab world, with more than 35 years of experience in serving the Islamic financial industry.',
                'ar' => 'أحد أهم خبراء الصناعة المصرفية الإسلامية في مصر والوطن العربي، خبراته تزيد عن 35 عامًا في خدمة الصناعة المالية الإسلامية.'
            ],
            'facebook' => 'https://www.facebook.com/',
            'twitter' => 'https://www.twitter.com/',
            'instagram' => 'https://www.instagram.com/',
            'linkedin' => 'https://www.linkdedin.com/',
            'image' => 'image'
        ]);
    }
}
