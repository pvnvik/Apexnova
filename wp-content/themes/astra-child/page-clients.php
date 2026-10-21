<?php
/**
 * Template Name: Clients Page
 * Template for /clients/ and /ar/clients-ar/ - ApexNova Clients & Partners
 * Bilingual (EN / AR RTL)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';

$home_url    = $is_ar ? home_url('/ar/home-ar/') : home_url('/');
$contact_url = $is_ar ? home_url('/ar/contact-us-ar/') : home_url('/contact-us/');

$client_categories_en = array(
    'Energy, Oil & Gas and Water Utilities' => array(
        array('name' => 'Saudi Aramco', 'img' => 'page_62_img_01.webp', 'desc' => 'National oil and natural gas company of Saudi Arabia.'),
        array('name' => 'Saudi Electricity Company (SEC)', 'img' => 'page_62_img_02.webp', 'desc' => 'Kingdom’s primary electric power generation and transmission utility.'),
        array('name' => 'National Water Company (NWC)', 'img' => 'page_62_img_03.webp', 'desc' => 'State utility managing water and wastewater networks across Saudi Arabia.'),
        array('name' => 'Saline Water Conversion Corporation (SWCC)', 'img' => 'page_62_img_04.webp', 'desc' => 'World’s largest producer of desalinated water.'),
        array('name' => 'Sinopec', 'img' => 'page_66_img_01.webp', 'desc' => 'International energy and chemical corporation delivering major KSA petrochemical infrastructure.')
    ),
    'Aviation & Civil Infrastructure' => array(
        array('name' => 'General Authority of Civil Aviation (GACA)', 'img' => 'page_68_img_01.webp', 'desc' => 'National regulator and operator of civil airports across Saudi Arabia.'),
        array('name' => 'Riyadh Airports Company (RAC)', 'img' => 'page_67_img_02.webp', 'desc' => 'Operator of King Khalid International Airport (KKIA) in Riyadh.'),
        array('name' => 'China Airport Construction Group (CACC)', 'img' => 'page_64_img_01.webp', 'desc' => 'Global airport engineering and runway civil contractor.')
    ),
    'Mining & High-Tech Manufacturing' => array(
        array('name' => 'Maaden (Saudi Arabian Mining Company)', 'img' => 'page_63_img_01.webp', 'desc' => 'National mining and mineral processing powerhouse in Saudi Arabia.'),
        array('name' => 'Hitachi', 'img' => 'page_63_img_02.webp', 'desc' => 'Global leader in high-voltage substation switchgear and energy equipment.'),
        array('name' => 'Johnson Controls', 'img' => 'page_68_img_03.webp', 'desc' => 'World leader in smart buildings, HVAC automation, and fire-safety controls.')
    ),
    'EPC Contractors & Giga-Projects' => array(
        array('name' => 'Qiddiya Investment Company', 'img' => 'page_69_img_01.webp', 'desc' => 'Saudi Vision 2030 entertainment, sports, and cultural capital giga-project.'),
        array('name' => 'PowerChina', 'img' => 'page_65_img_01.webp', 'desc' => 'International engineering conglomerate executing major power and hydro projects.'),
        array('name' => 'Almabani General Contractors', 'img' => 'page_67_img_01.webp', 'desc' => 'Premier general contractor constructing airports and metro networks in Saudi Arabia.'),
        array('name' => 'Dar Al-Handasah', 'img' => 'page_68_img_02.webp', 'desc' => 'International multidisciplinary project management and engineering consultancy.')
    )
);

$client_categories_ar = array(
    'قطاع الطاقة والنفط والغاز والمرافق المائية' => array(
        array('name' => 'أرامكو السعودية', 'img' => 'page_62_img_01.webp', 'desc' => 'الشركة الوطنية الرائدة للنفط والغاز الطبيعي في المملكة.'),
        array('name' => 'الشركة السعودية للكهرباء (SEC)', 'img' => 'page_62_img_02.webp', 'desc' => 'الشركة المسؤولة عن توليد ونقل وتوزيع الطاقة الكهربائية بالمملكة.'),
        array('name' => 'شركة المياه الوطنية (NWC)', 'img' => 'page_62_img_03.webp', 'desc' => 'الجهة المسؤولة عن شبكات المياه ومعالجة مياه الصرف الصحي.'),
        array('name' => 'المؤسسة العامة لتحلية المياه (SWCC)', 'img' => 'page_62_img_04.webp', 'desc' => 'أكبر منتج للمياه المحلاة في العالم ومحطات التحلية الوطنية.'),
        array('name' => 'سينوبك (Sinopec)', 'img' => 'page_66_img_01.webp', 'desc' => 'مجموعة الطاقة والبتروكيماويات العالمية المنفذة لمشاريع كبرى بالمملكة.')
    ),
    'قطاع الطيران والمطارات والبنية التحتية' => array(
        array('name' => 'الهيئة العامة للطيران المدني (GACA)', 'img' => 'page_68_img_01.webp', 'desc' => 'المنظم والمشغل الوطني للمطارات المدنية في المملكة العربية السعودية.'),
        array('name' => 'شركة مطارات الرياض (RAC)', 'img' => 'page_67_img_02.webp', 'desc' => 'مشغل مطار الملك خالد الدولي (KKIA) في العاصمة الرياض.'),
        array('name' => 'مجموعة الصين لإنشاء المطارات (CACC)', 'img' => 'page_64_img_01.webp', 'desc' => 'مقاول عالمي متخصص في هندسة المطارات ومدارج الطائرات.')
    ),
    'قطاع التعدين والصناعات المتقدمة' => array(
        array('name' => 'شركة التعدين العربية السعودية (معادن)', 'img' => 'page_63_img_01.webp', 'desc' => 'عملاق التعدين وصناعات المعادن الرائدة في المملكة.'),
        array('name' => 'هيتاشي (Hitachi)', 'img' => 'page_63_img_02.webp', 'desc' => 'الشركة العالمية الرائدة في محطات ومعدات الطاقة والجهد العالي.'),
        array('name' => 'جونسون كنترولز (Johnson Controls)', 'img' => 'page_68_img_03.webp', 'desc' => 'رواد أنظمة المباني الذكية والتحكم في التكييف ومكافحة الحرائق.')
    ),
    'المشاريع الكبرى وشركات المقاولات والهندسة' => array(
        array('name' => 'شركة القدية للاستثمار', 'img' => 'page_69_img_01.webp', 'desc' => 'عاصمة الترفيه والرياضة والفنون ضمن مشاريع رؤية المملكة 2030 العملاقة.'),
        array('name' => 'باور تشاينا (PowerChina)', 'img' => 'page_65_img_01.webp', 'desc' => 'تكتل هندسي عالمي متخصص في محطات الكهرباء والمشاريع المائية الكبرى.'),
        array('name' => 'المباني للمقاولات العامة', 'img' => 'page_67_img_01.webp', 'desc' => 'مقاول رئيسي في تنفيذ المطارات وشبكات المترو والبنية التحتية.'),
        array('name' => 'دار الهندسة', 'img' => 'page_68_img_02.webp', 'desc' => 'استشارات هندسية وإدارة مشاريع متعددة التخصصات على المستوى الدولي.')
    )
);

$client_categories = $is_ar ? $client_categories_ar : $client_categories_en;
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> عملاؤنا وشركاء النجاح لشركة أيبكس نوفا القابضة – المملكة العربية السعودية.
  </div>
</div>
<?php endif; ?>

<!-- Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-teal);">
  <div class="container">
    <div style="font-size: 14px; color: var(--an-teal); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; <?php echo $is_ar ? 'العملاء' : 'Clients'; ?>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 800; margin-bottom: 12px;">
      <?php echo $is_ar ? 'نعتز بثقة قادة البنية التحتية في المملكة' : 'Trusted by the Kingdom’s Leaders'; ?>
    </h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 820px; line-height: 1.6;">
      <?php if ($is_ar) : ?>
        تفخر شركة أيبكس نوفا القابضة بكونها مقاولاً ومورداً معتمداً وموثوقاً لكبرى جهات الطاقة والمرافق والمطارات والمشاريع الكبرى في المملكة العربية السعودية.
      <?php else : ?>
        ApexNova is proud to be a trusted contractor and approved vendor for Saudi Arabia's premier energy, utility, aviation, and giga-project authorities.
      <?php endif; ?>
    </p>
  </div>
</section>

<!-- Categorized Client Sections -->
<section style="padding: 80px 0; background: var(--an-white);">
  <div class="container">
    <?php foreach ($client_categories as $cat_title => $clients) : ?>
      <div style="margin-bottom: 60px;">
        <span class="an-split-badge"><?php echo esc_html($cat_title); ?></span>
        <div class="an-accent-line"></div>
        <h2 style="font-size: 26px; margin-bottom: 28px;"><?php echo esc_html($cat_title); ?></h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
          <?php foreach ($clients as $c) : ?>
            <div style="background: var(--an-grey); border: 1px solid var(--an-border); border-radius: var(--an-radius-md); padding: 28px; display: flex; flex-direction: column; align-items: center; text-align: center; transition: var(--an-transition); box-shadow: var(--an-shadow-sm);">
              <div style="height: 70px; display: flex; align-items: center; justify-content: center; margin-bottom: 18px;">
                <img src="<?php echo esc_url($upload_url . $c['img']); ?>" alt="<?php echo esc_attr($c['name']); ?>" style="max-height: 60px; max-width: 100%; object-fit: contain;" loading="lazy">
              </div>
              <h4 style="font-size: 17px; color: var(--an-navy); margin-bottom: 8px;"><?php echo esc_html($c['name']); ?></h4>
              <p style="font-size: 13.5px; color: var(--an-ink-light); margin: 0; line-height: 1.5;"><?php echo esc_html($c['desc']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA Band -->
<section class="an-cta-band">
  <div class="container">
    <h2><?php echo $is_ar ? 'انضم إلى نخبة عملائنا في كبرى المشاريع الوطنية' : 'Partner with an Approved Saudi Engineering Group'; ?></h2>
    <p>
      <?php if ($is_ar) : ?>
        تواصل مع مسؤولي تأهيل الموردين وإدارة المناقصات بمقرنا الرئيسي في الرياض لطلب ملفات الاعتماد.
      <?php else : ?>
        Contact our procurement and vendor prequalification team in Riyadh to initiate supplier registration.
      <?php endif; ?>
    </p>
    <a href="<?php echo esc_url($contact_url); ?>" class="an-btn an-btn-primary" style="background: var(--an-white); color: var(--an-navy) !important; font-weight: 700;">
      <?php echo $is_ar ? 'طلب اعتماد وتأهيل موردين ←' : 'Initiate Vendor Registration →'; ?>
    </a>
  </div>
</section>

<?php get_footer(); ?>
