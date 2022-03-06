<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create([
            'name' => [
                'en' => 'ITS',
                'ar' => 'ITS'
            ],
            'description' => [
                'en' => '40 years of technology support for performance and innovation. Headquarters Kuwait with a global presence.',
                'ar' => '40 عامًا من الدعم التكنولوجي للأداء والابتكار. المقر الرئيسي الكويت مع وجود عالمي.'
            ],
            'facebook' => 'http://eifa.mmgulf.com/ar/partners.html',
            'linkedin' => 'http://eifa.mmgulf.com/ar/partners.html',
            'link' => 'http://eifa.mmgulf.com/ar/partners.html'
        ]);

        Partner::create([
            'name' => [
                'en' => 'Cibafi',
                'ar' => 'أيوفي'
            ],
            'description' => [
                'en' => "The General Council for Islamic Banks and Financial Institutions (CIBAFI)",
                'ar' => 'أيوفي هي هيئة إسلامية دولية مستقلة غير هادفة للربح تقوم بإعداد المحاسبة والتدقيق والحوكمة والأخلاق والمعايير الشرعية'
            ],
            'facebook' => 'http://eifa.mmgulf.com/ar/partners.html',
            'linkedin' => 'http://eifa.mmgulf.com/ar/partners.html',
            'link' => 'http://eifa.mmgulf.com/ar/partners.html'
        ]);

        Partner::create([
            'name' => [
                'en' => 'AAOIFI',
                'ar' => 'مجلس العام للبنوك والمؤسسات المالية الاسلامية'
            ],
            'description' => [
                'en' => "AAOIFI is an Islamic international autonomous non-for-profit corporate body that prepares accounting, auditing, governance, ethics and Shari'a standards",
                'ar' => 'المجلس العام للمصارف والمؤسسات المالية الإسلامية (CIBAFI)'
            ],
            'facebook' => 'http://eifa.mmgulf.com/ar/partners.html',
            'linkedin' => 'http://eifa.mmgulf.com/ar/partners.html',
            'link' => 'http://eifa.mmgulf.com/ar/partners.html'
        ]);


    }
}
