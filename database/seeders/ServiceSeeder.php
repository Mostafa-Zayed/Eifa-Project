<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceList;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = Service::create([
            'title' => [
                'en' => 'Certified Islamic Banker',
                'ar' => 'المصرفي الإسلامي المعتمد Certified Islamic Banker'
            ],
            'content' => [
                'en' => 'The certified Islamic banker certificate aims to improve the capabilities and capabilities of the employees of the Islamic financial and banking system. It is available to all employees of banks and Islamic finance and investment companies at their various professional levels. It seeks to give its holders the in-depth and integrated banking and legal foundations and foundations, as well as providing them with knowledge, professional skills and sound banking applications. It also enables them to embark on a steady and smooth path towards various professional disciplines. The certified Islamic banker certificate is considered the basic certificate that provides its holders with professional recognition, career development, and the ability to specialize in the future in other advanced banking fields. The holders of this basic certificate in any institution is an indicator that reflects the quality of its employees, and expresses the level of their qualification and their banking and Sharia commitment.',
                'ar' => 'تهدف شهادة المصرفي الإسلامي المعتمد إلى الارتقاء بقدرات وإمكانيات موظفي الجهاز المالي والمصرفي الإسلامي، فهي متاحة لجميع العاملين في البنوك وشركات التمويل والاستثمار الإسلامية على مختلف مستوياتهم المهنية، وتسعى إلى منح حامليها الأسس والمرتكزات المصرفية والشرعية المعمقة والمتكاملة، كما تزودهم بالمعارف والمهارات المهنية والتطبيقات المصرفية السليمة، وتمكنهم كذلك من الانطلاق الثابت والميسر نحو التخصصات الاحترافية المتنوعة. وتعتبر شهادة المصرفي الإسلامي المعتمد الشهادة الأساسية التي تقدم لحامليها الاعتراف المهني، والتطور الوظيفي، والقدرة على التخصص مستقبلاً في مجالات مصرفية أخرى متقدمة، ويعتبر حاملو هذه الشهادة الأساسية في أي مؤسسة مؤشر يعكس جودة العاملين لديها، ويعبر عن مستوى تأهيلهم والتزامهم المصرفي والشرعي.'
            ],
            'status' => 1
        ]);

        ServiceList::create([
            'service_id' => $service->id,
            'content' => [
                'ar' => 'المدخل العام للمعاملات الإسلامية.',
                'en' => 'The general entrance to Islamic transactions.'
            ]
        ]);
    }
}
