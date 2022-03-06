<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            'phone1' => [
                'ar' => '(800) 123-4567',
                'en' => '(800) 123-4567'
        ],
            'phone2' => [
                'ar' => '+20 1144228566',
                'en' => '+20 1144228566'
            ],

            'email1' => [
                'ar' => 'business@Eifa.com',
                'en' => 'business@Eifa.com'
            ],
            'email2' => [
                'ar' => 'info@eifa.com',
                'en' => 'info@eifa.com'
            ],
            'work_hours' => [
                'ar' => 'الاثنين - السبت 9:00 صباحا - 6:00 مساء / الأحد - مغلق',
                'en' => 'Mon - Sat 9:00am - 6:00pm / Sunday - CLOSED'
            ],
            'facebook' => [
                'ar' => 'https://eifa.mmgulf.com/index.html',
                'en' => 'https://eifa.mmgulf.com/index.html'
            ],
            'twitter' => [
                'ar' => 'https://eifa.mmgulf.com/index.html',
                'en' => 'https://eifa.mmgulf.com/index.html'
            ],
            'linkedin' => [
                'ar' => 'https://eifa.mmgulf.com/index.html',
                'en' => 'https://eifa.mmgulf.com/index.html'
            ],
            'instagram' => [
                'ar' => 'https://eifa.mmgulf.com/index.html',
                'en' => 'https://eifa.mmgulf.com/index.html'
            ],
            'address' => [
                'ar' => '13 Ismail Anwar- Dokki - cairo',
                'en' => '13 Ismail Anwar- Dokki - cairo'
            ],
            'description' => [
                'ar' => 'مؤسسة عالمية رائدة في مجال التمويل الإسلامي معتَمِدَة على التخصُّص العلمي مع الخبرة العملية والممارسة المهنية والالتزام الأخلاقي.',
                'en' => 'The Egyptian Islamic Finance Association (EIFA): a non-profit organization that was established in accordance with the provisions of Egyptian Law No. (84) of 2008 regarding NGOs and foundations on February 19, 2012.'
            ],
            'service_header' => [
                'ar' => 'تنشط EIFA في تقديم الورش العلمية بشكل أسبوعي، تتناول موضوعات الساعة على الساحة الاقتصادية الإسلامية، وتسهم بنتائج وتوصيات هامة في نهاية كل ورشة من شأنها مساعدة الباحثين والمهتمين وصناع القرار في الاقتصاد الإسلامي، وتحرص EIFA على التخصصات العلمية الدقيقة في موضوعاتها مما ينعكس بشكل مباشر على تحقيق الأهداف المرجوة من عقد هذه الورش.',
                'en' => 'EIFA is active in presenting scientific workshops on a weekly basis, dealing with current topics in the Islamic economic arena, and contributing with important results and recommendations at the end of each workshop that would help researchers, interested parties and decision-makers in the Islamic economy. The desired objectives of holding these workshops.'
            ]
        ];

        foreach ($settings as $key => $setting) {
            Setting::create([
                'key' => $key,
                'value' => $setting,
                'status' => 1
            ]);
        }
    }
}
