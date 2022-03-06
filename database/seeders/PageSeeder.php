<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = ['home','about us','services','training courses','media','blogs','founders','partners','contact us'];
        $pages_ar = ['الرئسيه','من نحن','خدمات','دورات تدريبيه','المعرض','مقالات','مجلس الاداره','الشركاء','اتصل بنا'];
        $pages_url = ['/','about','/services','courses','media','blogs','founders','partners','contact-us'];
        for($i = 0; $i < count($pages); $i++) {
            Page::create([
                'name' => [
                    'ar' => $pages_ar[$i],
                    'en' => $pages[$i]
                ],
                'description' => [
                    'ar' => 'description arabic',
                    'en' => 'description english'
                ],
                'status' => 1,
                'order' => $i,
                'url' => $pages_url[$i]
            ]);
        }
    }
}
