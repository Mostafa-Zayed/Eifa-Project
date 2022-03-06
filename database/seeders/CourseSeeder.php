<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // course1
        Course::create([
            'name' => [
                'en' => 'Certificate of the observer and the forensic auditor',
                'ar' => 'شهادة المراقب والمدقق الشرعي'
            ],
            'title' => [
                'en' => 'The program aims to provide participants with the necessary professional knowledge and skills in the Sharia standards of Islamic banks and financial institutions.',
                'ar' => 'يهدف البرنامج إلي تزويد المشاركين بالمعرفة والمهارات المهنية الضرورية في المعايير الشرعية للمصارف والمؤسسات المالية الإسلامية،'
            ],
            'min_description' => [
                'en' => '
AAOIFI Certificates of the Accounting and Auditing Organization for Islamic Financial Institutions
AAOIFI grants two professional certificates:
1/1- Certified Shariah Controller and Auditor Certificate(CSAA)
2/1- Certified Islamic Chartered Accountant Certificate (CIPA)',
                'ar' => '
شهادات هيئة المحاسبة والمراجعة للمؤسسات المالية الإسلامية AAOIFI
وتمنح الأيوفي شهادتان مهنيتان:
1/1- شهادة المراقب والمدقق الشرعي المعتمد (CSAA)
2/1- شهادة المحاسب القانوني الإسلامي المعتمد (CIPA)'
            ],
            'description' => [
                'en' => '
AAOIFI Certificates of the Accounting and Auditing Organization for Islamic Financial Institutions
AAOIFI grants two professional certificates:
1/1- Certified Shariah Controller and Auditor Certificate(CSAA)
2/1- Certified Islamic Chartered Accountant Certificate (CIPA)

The program also provides candidates with studying the following areas:
- Introducing the Sharia standards for Islamic banks and financial institutions issued by Al-Ayoufi.
- The role of the various Sharia supervision and follow-up processes in Islamic banks.
The relationship between the Shariah Supervisory Board and the internal Shariah control and follow-up processes.
- Mechanism to follow up on the implementation of decisions and fatwas of Sharia boards.
- Direct verification of the legitimacy of banking and financial operations in the institution.
Target groups of this program:
- Employees of Islamic banks and financial institutions (Takaful insurance and investment companies.), especially those working in the field of internal legal supervision and follow-up.
Those interested in Islamic banking
They wanted to work in Islamic banks in this field.',
                'ar' => 'كما يوفر البرنامج للمرشحين دراسة المجالات التالية:
- التعريف بالمعايير الشرعية للمصارف والمؤسسات المالية الإسلامية الصادرة عن الأيوفي.
- دور عمليات الرقابة والمتابعة الشرعية المختلفة بالمصارف الإسلامية.
- العلاقة بين هيئة الرقابة الشرعية وعمليات الرقابة والمتابعة الشرعية الداخلية.
- آلية متابعة تنفيذ قرارات وفتاوي الهيئات الشرعية.
- التحقق المباشر من شرعية العمليات المصرفية والمالية في المؤسسة.
الفئات المستهدفة من هذا البرنامج:
- موظفو البنوك والمؤسسات المالية الإسلامية (تأمين تكافلي شركات استثمارية.)، وخاصة العاملين في مجال الرقابة والمتابعة الشرعية الداخلية.
- المهتمون بالعمل المصرفي الإسلامي
- رغبوا العمل في المصارف الإسلامية في هذا النطاق'
            ],
            'details' => [
                'en' => 'Program duration:
40 hours of training.
2/1 Certified Islamic Chartered Accountant Certificate
Certified Islamic Professional Accountant (CIPA)
Program objectives and content:
The program aims to provide participants with the necessary technical knowledge and professional skills in the field of accounting for Islamic banks and financial institutions. The program also provides candidates with studying the following areas:
- Introducing the accounting standards for Islamic transactions issued by the Al-Aoufi Authority.
The objectives and concepts of financial accounting for Islamic banks and financial institutions.
Accounting rules and treatments in Islamic banks and financial institutions.
Presentation and public disclosure in the financial statements of Islamic banks and financial institutions
Applications of Shariah controls in international Islamic financial products and services.',
                'ar' => 'مدة البرنامج:
40 ساعة تدريبية.
2/1 شهادة المحاسب القانوني الإسلامي المعتمد
Certified Islamic Professional Accountant (CIPA)
أهداف ومحتوى البرنامج:
يهدف البرنامج إلى تزويد المشاركين بالمعرفة التقنية والمهارات المهنية الضرورية في مجال المحاسبة للمصارف والمؤسسات المالية الإسلامية، كما يوفر البرنامج للمرشحين دراسة المجالات التالية:
- التعريف بالمعايير المحاسبية للمعاملات الإسلامية الصادرة عن هيئة الأيوفي.
- أهداف المحاسبة المالية للمصارف والمؤسسات المالية الإسلامية ومفاهيمها.
- القواعد والمعالجات المحاسبية في المصارف والمؤسسات المالية الإسلامية.
- العرض والإفصاح العام في القوائم المالية للمصارف والمؤسسات المالية الإسلامية
- تطبيقات الضوابط الشرعية في المنتجات والخدمات المالية الإسلامية الدولية.'
            ],
            'image1' => 'imag1',
            'image2' => 'image2',
            'image3' => 'image3'
        ]);

        // course 2
        Course::create([
            'name' => [
                'en' => 'AAOIFAI Certificates',
                'ar' => 'AAOIFAI شهادات'
            ],
            'title' => [
                'en' => 'The program aims to provide participants with the necessary professional knowledge and skills in the Sharia standards of Islamic banks and financial institutions.',
                'ar' => 'يهدف البرنامج إلي تزويد المشاركين بالمعرفة والمهارات المهنية الضرورية في المعايير الشرعية للمصارف والمؤسسات المالية الإسلامية،'
            ],
            'min_description' => [
                'en' => '
AAOIFI Certificates of the Accounting and Auditing Organization for Islamic Financial Institutions
AAOIFI grants two professional certificates:
1/1- Certified Shariah Controller and Auditor Certificate(CSAA)
2/1- Certified Islamic Chartered Accountant Certificate (CIPA)',
                'ar' => 'شهادات هيئة المحاسبة والمراجعة للمؤسسات المالية الإسلامية AAOIFI وتمنح الأيوفي شهادتان مهنيتان:
1/1- شهادة المراقب والمدقق الشرعي المعتمد (CSAA)
2/1- شهادة المحاسب القانوني الإسلامي المعتمد (CIPA)
'
            ],
            'description' => [
                'en' => '
AAOIFI Certificates of the Accounting and Auditing Organization for Islamic Financial Institutions
AAOIFI grants two professional certificates:
1/1- Certified Shariah Controller and Auditor Certificate(CSAA)
2/1- Certified Islamic Chartered Accountant Certificate (CIPA)

The program also provides candidates with studying the following areas:
- Introducing the Sharia standards for Islamic banks and financial institutions issued by Al-Ayoufi.
- The role of the various Sharia supervision and follow-up processes in Islamic banks.
The relationship between the Shariah Supervisory Board and the internal Shariah control and follow-up processes.
- Mechanism to follow up on the implementation of decisions and fatwas of Sharia boards.
- Direct verification of the legitimacy of banking and financial operations in the institution.
Target groups of this program:
- Employees of Islamic banks and financial institutions (Takaful insurance and investment companies.), especially those working in the field of internal legal supervision and follow-up.
Those interested in Islamic banking
They wanted to work in Islamic banks in this field.',
                'ar' => 'كما يوفر البرنامج للمرشحين دراسة المجالات التالية:
- التعريف بالمعايير الشرعية للمصارف والمؤسسات المالية الإسلامية الصادرة عن الأيوفي.
- دور عمليات الرقابة والمتابعة الشرعية المختلفة بالمصارف الإسلامية.
- العلاقة بين هيئة الرقابة الشرعية وعمليات الرقابة والمتابعة الشرعية الداخلية.
- آلية متابعة تنفيذ قرارات وفتاوي الهيئات الشرعية.
- التحقق المباشر من شرعية العمليات المصرفية والمالية في المؤسسة.
الفئات المستهدفة من هذا البرنامج:
- موظفو البنوك والمؤسسات المالية الإسلامية (تأمين تكافلي شركات استثمارية.)، وخاصة العاملين في مجال الرقابة والمتابعة الشرعية الداخلية.
- المهتمون بالعمل المصرفي الإسلامي
- رغبوا العمل في المصارف الإسلامية في هذا النطاق.'
            ],
            'details' => [
                'en' => 'Program duration:
40 hours of training.
2/1 Certified Islamic Chartered Accountant Certificate
Certified Islamic Professional Accountant (CIPA)
Program objectives and content:
The program aims to provide participants with the necessary technical knowledge and professional skills in the field of accounting for Islamic banks and financial institutions. The program also provides candidates with studying the following areas:
- Introducing the accounting standards for Islamic transactions issued by the Al-Aoufi Authority.
The objectives and concepts of financial accounting for Islamic banks and financial institutions.
Accounting rules and treatments in Islamic banks and financial institutions.
Presentation and public disclosure in the financial statements of Islamic banks and financial institutions
Applications of Shariah controls in international Islamic financial products and services.',
                'ar' => 'مدة البرنامج:
40 ساعة تدريبية.
2/1 شهادة المحاسب القانوني الإسلامي المعتمد
Certified Islamic Professional Accountant (CIPA)
أهداف ومحتوى البرنامج:
يهدف البرنامج إلى تزويد المشاركين بالمعرفة التقنية والمهارات المهنية الضرورية في مجال المحاسبة للمصارف والمؤسسات المالية الإسلامية، كما يوفر البرنامج للمرشحين دراسة المجالات التالية:
- التعريف بالمعايير المحاسبية للمعاملات الإسلامية الصادرة عن هيئة الأيوفي.
- أهداف المحاسبة المالية للمصارف والمؤسسات المالية الإسلامية ومفاهيمها.
- القواعد والمعالجات المحاسبية في المصارف والمؤسسات المالية الإسلامية.
- العرض والإفصاح العام في القوائم المالية للمصارف والمؤسسات المالية الإسلامية
- تطبيقات الضوابط الشرعية في المنتجات والخدمات المالية الإسلامية الدولية.'
            ],
            'image1' => 'imag1',
            'image2' => 'image2',
            'image3' => 'image3'
        ]);

        //course 3
        Course::create([
            'name' => [
                'en' => 'CIBAFI Certificates',
                'ar' => 'CIBAFI شهادات'
            ],
            'title' => [
                'en' => 'The program aims to provide participants with the necessary professional knowledge and skills in the Sharia standards of Islamic banks and financial institutions.',
                'ar' => 'يهدف البرنامج إلي تزويد المشاركين بالمعرفة والمهارات المهنية الضرورية في المعايير الشرعية للمصارف والمؤسسات المالية الإسلامية،'
            ],
            'min_description' => [
                'en' => '
AAOIFI Certificates of the Accounting and Auditing Organization for Islamic Financial Institutions
AAOIFI grants two professional certificates:
1/1- Certified Shariah Controller and Auditor Certificate(CSAA)
2/1- Certified Islamic Chartered Accountant Certificate (CIPA)',
                'ar' => '
شهادات هيئة المحاسبة والمراجعة للمؤسسات المالية الإسلامية AAOIFI
وتمنح الأيوفي شهادتان مهنيتان:
1/1- شهادة المراقب والمدقق الشرعي المعتمد (CSAA)
2/1- شهادة المحاسب القانوني الإسلامي المعتمد (CIPA)'

            ],
            'description' => [
                'en' => '
AAOIFI Certificates of the Accounting and Auditing Organization for Islamic Financial Institutions
AAOIFI grants two professional certificates:
1/1- Certified Shariah Controller and Auditor Certificate(CSAA)
2/1- Certified Islamic Chartered Accountant Certificate (CIPA)

The program also provides candidates with studying the following areas:
- Introducing the Sharia standards for Islamic banks and financial institutions issued by Al-Ayoufi.
- The role of the various Sharia supervision and follow-up processes in Islamic banks.
The relationship between the Shariah Supervisory Board and the internal Shariah control and follow-up processes.
- Mechanism to follow up on the implementation of decisions and fatwas of Sharia boards.
- Direct verification of the legitimacy of banking and financial operations in the institution.
Target groups of this program:
- Employees of Islamic banks and financial institutions (Takaful insurance and investment companies.), especially those working in the field of internal legal supervision and follow-up.
Those interested in Islamic banking
They wanted to work in Islamic banks in this field.',
                'ar' => 'كما يوفر البرنامج للمرشحين دراسة المجالات التالية:
- التعريف بالمعايير الشرعية للمصارف والمؤسسات المالية الإسلامية الصادرة عن الأيوفي.
- دور عمليات الرقابة والمتابعة الشرعية المختلفة بالمصارف الإسلامية.
- العلاقة بين هيئة الرقابة الشرعية وعمليات الرقابة والمتابعة الشرعية الداخلية.
- آلية متابعة تنفيذ قرارات وفتاوي الهيئات الشرعية.
- التحقق المباشر من شرعية العمليات المصرفية والمالية في المؤسسة.
الفئات المستهدفة من هذا البرنامج:
- موظفو البنوك والمؤسسات المالية الإسلامية (تأمين تكافلي شركات استثمارية.)، وخاصة العاملين في مجال الرقابة والمتابعة الشرعية الداخلية.
- المهتمون بالعمل المصرفي الإسلامي
- رغبوا العمل في المصارف الإسلامية في هذا النطاق.'
            ],
            'details' => [
                'en' => 'Program duration:
40 hours of training.
2/1 Certified Islamic Chartered Accountant Certificate
Certified Islamic Professional Accountant (CIPA)
Program objectives and content:
The program aims to provide participants with the necessary technical knowledge and professional skills in the field of accounting for Islamic banks and financial institutions. The program also provides candidates with studying the following areas:
- Introducing the accounting standards for Islamic transactions issued by the Al-Aoufi Authority.
The objectives and concepts of financial accounting for Islamic banks and financial institutions.
Accounting rules and treatments in Islamic banks and financial institutions.
Presentation and public disclosure in the financial statements of Islamic banks and financial institutions
Applications of Shariah controls in international Islamic financial products and services.',
                'ar' => 'مدة البرنامج:
40 ساعة تدريبية.
2/1 شهادة المحاسب القانوني الإسلامي المعتمد
Certified Islamic Professional Accountant (CIPA)
أهداف ومحتوى البرنامج:
يهدف البرنامج إلى تزويد المشاركين بالمعرفة التقنية والمهارات المهنية الضرورية في مجال المحاسبة للمصارف والمؤسسات المالية الإسلامية، كما يوفر البرنامج للمرشحين دراسة المجالات التالية:
- التعريف بالمعايير المحاسبية للمعاملات الإسلامية الصادرة عن هيئة الأيوفي.
- أهداف المحاسبة المالية للمصارف والمؤسسات المالية الإسلامية ومفاهيمها.
- القواعد والمعالجات المحاسبية في المصارف والمؤسسات المالية الإسلامية.
- العرض والإفصاح العام في القوائم المالية للمصارف والمؤسسات المالية الإسلامية
- تطبيقات الضوابط الشرعية في المنتجات والخدمات المالية الإسلامية الدولية.'
            ],
            'image1' => 'imag1',
            'image2' => 'image2',
            'image3' => 'image3'
        ]);

        // course 4
        Course::create([
            'name' => [
                'en' => 'Certified Islamic Chartered Accountant Certificate',
                'ar' => 'شهادة المحاسب القانوني الإسلامي المعتمد'
            ],
            'title' => [
                'en' => 'The program aims to provide participants with the necessary professional knowledge and skills in the Sharia standards of Islamic banks and financial institutions.',
                'ar' => 'يهدف البرنامج إلي تزويد المشاركين بالمعرفة والمهارات المهنية الضرورية في المعايير الشرعية للمصارف والمؤسسات المالية الإسلامية،'
            ],
            'min_description' => [
                'en' => '
AAOIFI Certificates of the Accounting and Auditing Organization for Islamic Financial Institutions
AAOIFI grants two professional certificates:
1/1- Certified Shariah Controller and Auditor Certificate(CSAA)
2/1- Certified Islamic Chartered Accountant Certificate (CIPA)',
                'ar' => '
شهادات هيئة المحاسبة والمراجعة للمؤسسات المالية الإسلامية AAOIFI
وتمنح الأيوفي شهادتان مهنيتان:
1/1- شهادة المراقب والمدقق الشرعي المعتمد (CSAA)
2/1- شهادة المحاسب القانوني الإسلامي المعتمد (CIPA)'
            ],
            'description' => [
                'en' => '
AAOIFI Certificates of the Accounting and Auditing Organization for Islamic Financial Institutions
AAOIFI grants two professional certificates:
1/1- Certified Shariah Controller and Auditor Certificate(CSAA)
2/1- Certified Islamic Chartered Accountant Certificate (CIPA)

The program also provides candidates with studying the following areas:
- Introducing the Sharia standards for Islamic banks and financial institutions issued by Al-Ayoufi.
- The role of the various Sharia supervision and follow-up processes in Islamic banks.
The relationship between the Shariah Supervisory Board and the internal Shariah control and follow-up processes.
- Mechanism to follow up on the implementation of decisions and fatwas of Sharia boards.
- Direct verification of the legitimacy of banking and financial operations in the institution.
Target groups of this program:
- Employees of Islamic banks and financial institutions (Takaful insurance and investment companies.), especially those working in the field of internal legal supervision and follow-up.
Those interested in Islamic banking
They wanted to work in Islamic banks in this field.',
                'ar' => 'كما يوفر البرنامج للمرشحين دراسة المجالات التالية:
- التعريف بالمعايير الشرعية للمصارف والمؤسسات المالية الإسلامية الصادرة عن الأيوفي.
- دور عمليات الرقابة والمتابعة الشرعية المختلفة بالمصارف الإسلامية.
- العلاقة بين هيئة الرقابة الشرعية وعمليات الرقابة والمتابعة الشرعية الداخلية.
- آلية متابعة تنفيذ قرارات وفتاوي الهيئات الشرعية.
- التحقق المباشر من شرعية العمليات المصرفية والمالية في المؤسسة.
الفئات المستهدفة من هذا البرنامج:
- موظفو البنوك والمؤسسات المالية الإسلامية (تأمين تكافلي شركات استثمارية.)، وخاصة العاملين في مجال الرقابة والمتابعة الشرعية الداخلية.
- المهتمون بالعمل المصرفي الإسلامي
- رغبوا العمل في المصارف الإسلامية في هذا النطاق.'
            ],
            'details' => [
                'en' => 'Program duration:
40 hours of training.
2/1 Certified Islamic Chartered Accountant Certificate
Certified Islamic Professional Accountant (CIPA)
Program objectives and content:
The program aims to provide participants with the necessary technical knowledge and professional skills in the field of accounting for Islamic banks and financial institutions. The program also provides candidates with studying the following areas:
- Introducing the accounting standards for Islamic transactions issued by the Al-Aoufi Authority.
The objectives and concepts of financial accounting for Islamic banks and financial institutions.
Accounting rules and treatments in Islamic banks and financial institutions.
Presentation and public disclosure in the financial statements of Islamic banks and financial institutions
Applications of Shariah controls in international Islamic financial products and services.',
                'ar' => 'مدة البرنامج:
40 ساعة تدريبية.
2/1 شهادة المحاسب القانوني الإسلامي المعتمد
Certified Islamic Professional Accountant (CIPA)
أهداف ومحتوى البرنامج:
يهدف البرنامج إلى تزويد المشاركين بالمعرفة التقنية والمهارات المهنية الضرورية في مجال المحاسبة للمصارف والمؤسسات المالية الإسلامية، كما يوفر البرنامج للمرشحين دراسة المجالات التالية:
- التعريف بالمعايير المحاسبية للمعاملات الإسلامية الصادرة عن هيئة الأيوفي.
- أهداف المحاسبة المالية للمصارف والمؤسسات المالية الإسلامية ومفاهيمها.
- القواعد والمعالجات المحاسبية في المصارف والمؤسسات المالية الإسلامية.
- العرض والإفصاح العام في القوائم المالية للمصارف والمؤسسات المالية الإسلامية
- تطبيقات الضوابط الشرعية في المنتجات والخدمات المالية الإسلامية الدولية.'
            ],
            'image1' => 'imag1',
            'image2' => 'image2',
            'image3' => 'image3'
        ]);
    }
}
