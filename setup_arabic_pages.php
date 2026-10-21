<?php
if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('pll_set_post_language') || !function_exists('pll_save_post_translations')) {
    die("Polylang functions not found.\n");
}

// 1. Update Polylang options
$pll_opts = get_option('polylang', array());
$pll_opts['default_lang'] = 'en';
$pll_opts['hide_default'] = 1; // English is /apexnova/, Arabic is /apexnova/ar/
$pll_opts['force_lang']   = 1;
$pll_opts['rewrite']      = 1;
update_option('polylang', $pll_opts);
echo "Polylang options updated.\n";

// 2. Map of English slugs to Arabic titles, contents, and slugs
$pages_map = array(
    'home' => array(
        'ar_title' => 'الرئيسية - شركة أيبكس نوفا القابضة',
        'ar_slug'  => 'home-ar',
        'ar_content' => "شركة أيبكس نوفا القابضة - هندسة البنية التحتية للمملكة: الحلول الميكانيكية والكهربائية والسلامة.\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    ),
    'about-us' => array(
        'ar_title' => 'من نحن - نبذة عن شركة أيبكس نوفا',
        'ar_slug'  => 'about-us-ar',
        'ar_content' => "تأسست شركة أيبكس نوفا القابضة عام 1997 كشركة سعودية رائدة في تقديم خدمات المقاولات الكهروميكانيكية، وأنظمة وقود الطيران، وصيانة المحطات والمحولات الكهربائية في المملكة العربية السعودية.\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    ),
    'services' => array(
        'ar_title' => 'خدماتنا وقدراتنا الهندسية',
        'ar_slug'  => 'services-ar',
        'ar_content' => "خدمات هندسية متكاملة تشمل أنظمة وقود الطيران، طلاء الأنابيب، الحماية الكاثودية، اختبار وتشغيل المحولات الكهربائية، ومكافحة الحرائق.\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    ),
    'training' => array(
        'ar_title' => 'مركز أيبكس نوفا للتدريب',
        'ar_slug'  => 'training-ar',
        'ar_content' => "دورات السلامة والصحة المهنية (HSE)، وشهادات OSHA و IOSH و NEBOSH، واستشارات أنظمة الجودة والآيزو المعتمدة في المملكة.\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    ),
    'safety' => array(
        'ar_title' => 'سياسة السلامة والصحة المهنية (HSSE)',
        'ar_slug'  => 'safety-ar',
        'ar_content' => "سياسة السلامة في أيبكس نوفا: كل يوم عمل يبدأ باجتماع السلامة (Toolbox Meeting) والالتزام باشتراطات أرامكو السعودية والدفاع المدني.\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    ),
    'projects' => array(
        'ar_title' => 'مشاريعنا وإنجازاتنا',
        'ar_slug'  => 'projects-ar',
        'ar_content' => "سجل حافل من المشاريع الكبرى في مطارات المملكة، ومحطات الكهرباء، وشبكات النفط والغاز، والمجمعات الصناعية.\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    ),
    'clients' => array(
        'ar_title' => 'عملاؤنا وشركاء النجاح',
        'ar_slug'  => 'clients-ar',
        'ar_content' => "نعتز بثقة كبرى الجهات والشركات الوطنية والعالمية: أرامكو السعودية، الشركة السعودية للكهرباء، شركة المياه الوطنية، وسالين، ومعادن، والقدية.\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    ),
    'media' => array(
        'ar_title' => 'المركز الإعلامي والأخبار',
        'ar_slug'  => 'media-ar',
        'ar_content' => "آخر الأخبار، والمقالات الهندسية، والإنجازات الميدانية لشركة أيبكس نوفا القابضة.\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    ),
    'careers' => array(
        'ar_title' => 'الوظائف والفرص المهنية',
        'ar_slug'  => 'careers-ar',
        'ar_content' => "انضم إلى فريق النخبة الهندسية في شركة أيبكس نوفا القابضة وساهم في بناء البنية التحتية لرؤية المملكة 2030.\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    ),
    'contact-us' => array(
        'ar_title' => 'اتصل بنا - طلب عرض أسعار',
        'ar_slug'  => 'contact-us-ar',
        'ar_content' => "تواصل مع الإدارة الهندسية وفريق المناقصات في مقرنا الرئيسي بالرياض (حي الملز، شارع جرير).\n[AR TRANSLATION PENDING - نص قيد المراجعة النهائية]"
    )
);

foreach ($pages_map as $en_slug => $data) {
    // 1. Get English Page
    $en_posts = get_posts(array(
        'name'        => $en_slug,
        'post_type'   => 'page',
        'post_status' => 'any',
        'numberposts' => 1
    ));

    if (empty($en_posts)) {
        echo "English page $en_slug not found.\n";
        continue;
    }

    $en_id = $en_posts[0]->ID;
    pll_set_post_language($en_id, 'en');

    // 2. Check or create Arabic Page
    $ar_posts = get_posts(array(
        'name'        => $data['ar_slug'],
        'post_type'   => 'page',
        'post_status' => 'any',
        'numberposts' => 1
    ));

    if (empty($ar_posts)) {
        $ar_id = wp_insert_post(array(
            'post_title'   => $data['ar_title'],
            'post_name'    => $data['ar_slug'],
            'post_content' => $data['ar_content'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ));
        echo "Created Arabic page: {$data['ar_title']} (ID: $ar_id)\n";
    } else {
        $ar_id = $ar_posts[0]->ID;
        wp_update_post(array(
            'ID'          => $ar_id,
            'post_title'  => $data['ar_title'],
            'post_status' => 'publish',
        ));
        echo "Updated Arabic page: {$data['ar_title']} (ID: $ar_id)\n";
    }

    pll_set_post_language($ar_id, 'ar');

    // 3. Link translations in Polylang
    pll_save_post_translations(array(
        'en' => $en_id,
        'ar' => $ar_id
    ));

    echo "Linked translations for $en_slug (EN: $en_id <-> AR: $ar_id)\n";
}

echo "All Arabic pages and Polylang translations linked successfully.\n";
