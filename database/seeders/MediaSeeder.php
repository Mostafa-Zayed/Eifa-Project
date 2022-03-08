<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Media;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::create([
            'name' => [
                'en' => 'name en',
                'ar' => 'name ar'
            ],
            'description' => [
                'en' => 'The Egyptian Islamic Finance Association (EIFA): a non-profit organization that was established in accordance with the provisions of Egyptian Law No. (84) of 2008 regarding NGOs and foundations on February 19, 2012. The association includes a group of specialized members in Sharia sciences, financial, administrative, economic and legal sciences based on Islamic thought, which work to develop and support the Islamic financial industry in Egypt and the world.',
                'ar' => 'الجمعية المصرية للتمويل الإسلامي (EIFA): منظمة غير ربحية تم تأسيسها طبقًا لأحكام القانون المصري رقم (84) لسنة 2008م بشأن الجمعيات والمؤسسات الأهلية بتاريخ 19 فبراير 2012م. وتَضُم الجمعية مجموعة من الأعضاء المتخصِّصين في العلوم الشرعية، والعلوم المالية والإدارية والاقتصادية والقانونية المؤسَّسة والمؤصَّلة على الفكر الإسلامي، والتي تعمل على تطوير ودعم صناعة المالية الإسلامية في مصر والعالم.'
            ],
            'date' => '12/12/2022',
            'location' => [
                'en' => 'Cairo',
                'ar' => 'القاهره'
            ],
            'category_id' => Category::select('id')->get()->random()->id
        ]);

        Media::create([
            'name' => [
                'en' => 'name en',
                'ar' => 'name ar'
            ],
            'description' => [
                'en' => 'The Egyptian Islamic Finance Association (EIFA): a non-profit organization that was established in accordance with the provisions of Egyptian Law No. (84) of 2008 regarding NGOs and foundations on February 19, 2012. The association includes a group of specialized members in Sharia sciences, financial, administrative, economic and legal sciences based on Islamic thought, which work to develop and support the Islamic financial industry in Egypt and the world.',
                'ar' => 'الجمعية المصرية للتمويل الإسلامي (EIFA): منظمة غير ربحية تم تأسيسها طبقًا لأحكام القانون المصري رقم (84) لسنة 2008م بشأن الجمعيات والمؤسسات الأهلية بتاريخ 19 فبراير 2012م. وتَضُم الجمعية مجموعة من الأعضاء المتخصِّصين في العلوم الشرعية، والعلوم المالية والإدارية والاقتصادية والقانونية المؤسَّسة والمؤصَّلة على الفكر الإسلامي، والتي تعمل على تطوير ودعم صناعة المالية الإسلامية في مصر والعالم.'
            ],
            'date' => '12/10/2022',
            'location' => [
                'en' => 'Cairo',
                'ar' => 'القاهره'
            ],
            'category_id' => Category::select('id')->get()->random()->id
        ]);

        Media::create([
            'name' => [
                'en' => 'name en',
                'ar' => 'name ar'
            ],
            'description' => [
                'en' => 'The Egyptian Islamic Finance Association (EIFA): a non-profit organization that was established in accordance with the provisions of Egyptian Law No. (84) of 2008 regarding NGOs and foundations on February 19, 2012. The association includes a group of specialized members in Sharia sciences, financial, administrative, economic and legal sciences based on Islamic thought, which work to develop and support the Islamic financial industry in Egypt and the world.',
                'ar' => 'الجمعية المصرية للتمويل الإسلامي (EIFA): منظمة غير ربحية تم تأسيسها طبقًا لأحكام القانون المصري رقم (84) لسنة 2008م بشأن الجمعيات والمؤسسات الأهلية بتاريخ 19 فبراير 2012م. وتَضُم الجمعية مجموعة من الأعضاء المتخصِّصين في العلوم الشرعية، والعلوم المالية والإدارية والاقتصادية والقانونية المؤسَّسة والمؤصَّلة على الفكر الإسلامي، والتي تعمل على تطوير ودعم صناعة المالية الإسلامية في مصر والعالم.'
            ],
            'date' => '12/8/2022',
            'location' => [
                'en' => 'Cairo',
                'ar' => 'القاهره'
            ],
            'category_id' => Category::select('id')->get()->random()->id
        ]);

    }
}
