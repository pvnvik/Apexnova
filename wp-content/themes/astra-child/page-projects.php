<?php
/**
 * Template Name: Projects Page
 * Template for /projects/ and /ar/projects-ar/ - ApexNova Project Portfolio
 * Bilingual (EN / AR RTL)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';

$home_url    = $is_ar ? home_url('/ar/home-ar/') : home_url('/');
$contact_url = $is_ar ? home_url('/ar/contact-us-ar/') : home_url('/contact-us/');

$projects_en = array(
    array(
        'title' => 'International Airport Fuel Hydrant Network Expansion',
        'sector' => 'aviation',
        'sector_label' => 'Aviation',
        'client' => 'Civil Aviation Authority',
        'location' => 'Riyadh, Kingdom of Saudi Arabia',
        'year' => '2025',
        'image' => 'page_07_img_01.webp',
        'scope' => 'Turnkey design, excavation, compaction testing, apron hydrant pit alignment, valve assembly installation, and closed-loop pressure testing for international terminal aprons.'
    ),
    array(
        'title' => 'Deep-Well Impressed Current Cathodic Protection Drilling',
        'sector' => 'oil-gas',
        'sector_label' => 'Oil & Gas',
        'client' => 'Petrochemical Corporation',
        'location' => 'Eastern Province, KSA',
        'year' => '2024',
        'image' => 'page_09_img_01.webp',
        'scope' => 'Vertical deep-well borehole drilling (120m depth), high-silicon cast iron anode string placement, calcined petroleum coke backfill, and DC rectifier commissioning.'
    ),
    array(
        'title' => 'Emergency Fuel Shut-Off (EFSO) & Redundant RIO Integration',
        'sector' => 'aviation',
        'sector_label' => 'Aviation',
        'client' => 'Airport Operating Company',
        'location' => 'Jeddah, KSA',
        'year' => '2025',
        'image' => 'page_10_img_02.webp',
        'scope' => 'Integration of dual redundant Remote Input/Output (RIO) panels with central airfield SCADA PLC system and motorized isolation valves (MOVs).'
    ),
    array(
        'title' => '380kV Substation Power Transformer Commissioning',
        'sector' => 'power',
        'sector_label' => 'Power & Utilities',
        'client' => 'National Power Grid',
        'location' => 'Riyadh Province, KSA',
        'year' => '2025',
        'image' => 'page_43_img_01.webp',
        'scope' => 'Comprehensive 9-step electrical pre-commissioning, turns ratio verification, protection relay secondary injection testing, and high-voltage bushing diagnostics.'
    ),
    array(
        'title' => 'Mobile High-Vacuum Transformer Oil Filtration & Dielectric Restoration',
        'sector' => 'power',
        'sector_label' => 'Power & Utilities',
        'client' => 'Industrial Utility Provider',
        'location' => 'Yanbu Industrial City, KSA',
        'year' => '2026',
        'image' => 'page_46_img_02.webp',
        'scope' => 'On-site degassing, dehydration, and particulate purification of 40,000 liters of insulating oil, restoring dielectric breakdown voltage above 65kV.'
    ),
    array(
        'title' => 'High-Pressure Refinery Pipeline Hot Tapping & Branch Tie-In',
        'sector' => 'oil-gas',
        'sector_label' => 'Industrial Oil & Gas',
        'client' => 'Refinery Complex',
        'location' => 'Jubail, KSA',
        'year' => '2024',
        'image' => 'page_31_img_01.webp',
        'scope' => 'Under-pressure 16" branch hot tap on active hydrocarbon feed line, retaining coupon with zero product leakage and zero plant shutdown.'
    ),
    array(
        'title' => 'Jet A-1 Fuel Testing Manifold Assembly & Airfield Commissioning',
        'sector' => 'aviation',
        'sector_label' => 'Aviation',
        'client' => 'Aviation Fuel Consortium',
        'location' => 'Riyadh, KSA',
        'year' => '2026',
        'image' => 'page_12_img_01.webp',
        'scope' => 'Fabrication and commissioning of multi-point fuel sampling manifold, line flushing, desiccant air drying, and certified laboratory cleanliness testing.'
    ),
    array(
        'title' => 'Heavy Logistics Hub Foundations & Pre-Engineered Steel Structures',
        'sector' => 'civil',
        'sector_label' => 'Civil & Structural',
        'client' => 'Logistics Park Developer',
        'location' => 'Riyadh Logistics Corridor, KSA',
        'year' => '2025',
        'image' => 'page_59_img_01.webp',
        'scope' => 'Mass earthworks, heavy equipment foundations, high-load concrete floor slabs, and erection of wide-span pre-engineered steel buildings (PEB).'
    )
);

$projects_ar = array(
    array(
        'title' => 'توسعة شبكة هيدرانت وقود الطائرات بمطار دولي',
        'sector' => 'aviation',
        'sector_label' => 'وقود الطيران',
        'client' => 'هيئة الطيران المدني',
        'location' => 'الرياض، المملكة العربية السعودية',
        'year' => '2025',
        'image' => 'page_07_img_01.webp',
        'scope' => 'تصميم وتنفيذ متكامل يشمل أعمال الحفر وفحص الدمك، ومحاذاة مآخذ الوقود مع مناسيب الساحة، وتركيب مجموعات الصمامات واختبار الضغط بالدائرة المغلقة.'
    ),
    array(
        'title' => 'حفر آبار الحماية الكاثودية العميقة بالتيار القسري',
        'sector' => 'oil-gas',
        'sector_label' => 'النفط والغاز والصناعة',
        'client' => 'شركة بتروكيماويات كبرى',
        'location' => 'المنطقة الشرقية، المملكة العربية السعودية',
        'year' => '2024',
        'image' => 'page_09_img_01.webp',
        'scope' => 'حفر آبار عمودية عميقة بعمق 120 متراً، وتركيب سلاسل أنودات الحديد السيليكوني، والردم بفحم الكوك النفطي وتشغيل محولات التيار المستمر (Rectifiers).'
    ),
    array(
        'title' => 'نظام إغلاق الوقود الطارئ (EFSO) ولوحات RIO المكررة',
        'sector' => 'aviation',
        'sector_label' => 'وقود الطيران',
        'client' => 'شركة تشغيل مطارات',
        'location' => 'جدة، المملكة العربية السعودية',
        'year' => '2025',
        'image' => 'page_10_img_02.webp',
        'scope' => 'دمج لوحات الإدخال/الإخراج عن بعد (RIO) المكررة مع نظام سكادا المركزي PLC للمطار وصمامات العزل الآلية المزودة بمحركات (MOVs).'
    ),
    array(
        'title' => 'اختبار وتشغيل محولات محطة تحويل جهد عالي 380 ك.ف',
        'sector' => 'power',
        'sector_label' => 'الطاقة والكهرباء',
        'client' => 'الشركة السعودية للكهرباء',
        'location' => 'منطقة الرياض، المملكة العربية السعودية',
        'year' => '2025',
        'image' => 'page_43_img_01.webp',
        'scope' => 'خطة اختبار تشغيلية منهجية من 9 مراحل، وفحص نسب التحويل وعزل الملفات ومرحلات الحماية بالحقن الثانوي، وتشخيص عوازل الجهد العالي.'
    ),
    array(
        'title' => 'وحدة متنقلة لفلترة ومعالجة زيت المحولات عالية التفريغ',
        'sector' => 'power',
        'sector_label' => 'الطاقة والكهرباء',
        'client' => 'مزود مرافق صناعية',
        'location' => 'مدينة ينبع الصناعية، المملكة العربية السعودية',
        'year' => '2026',
        'image' => 'page_46_img_02.webp',
        'scope' => 'إزالة الغازات والرطوبة وتطهير الشوائب ميدانياً لـ 40,000 لتر من زيت العزل، واستعادة جهد الانهيار الكهربائي للزيت (BDV) لأكثر من 65 ك.ف.'
    ),
    array(
        'title' => 'التفريغ الحي على خط أنابيب مصفاة عالي الضغط',
        'sector' => 'oil-gas',
        'sector_label' => 'النفط والغاز والصناعة',
        'client' => 'مجمع تكرير نفطي',
        'location' => 'الجبيل الصناعية، المملكة العربية السعودية',
        'year' => '2024',
        'image' => 'page_31_img_01.webp',
        'scope' => 'تنفيذ تفريع حي قطر 16 بوصة تحت الضغط التشغيلي على خط هيدروكربوني حي مع استخراج القسيمة المعدنية بنسبة تسريب صفرية ودون إيقاف المصنع.'
    ),
    array(
        'title' => 'تصنيع مشعب اختبار وقود Jet A-1 وتشغيله بالمطار',
        'sector' => 'aviation',
        'sector_label' => 'وقود الطيران',
        'client' => 'تحالف تزويد وقود الطيران',
        'location' => 'الرياض، المملكة العربية السعودية',
        'year' => '2026',
        'image' => 'page_12_img_01.webp',
        'scope' => 'تصنيع وتشغيل مشعب أخذ العينات متعدد النقاط، وغسيل الخطوط وتجفيفها بالهواء المعالج، وإجراء اختبارات النظافة المخبرية المعتمدة.'
    ),
    array(
        'title' => 'قواعد مركز لوجستي عملاق وهياكل فولاذية مسبقة الصنع',
        'sector' => 'civil',
        'sector_label' => 'الأعمال المدنية',
        'client' => 'مطور مجمعات لوجستية',
        'location' => 'المحور اللوجستي، الرياض، المملكة العربية السعودية',
        'year' => '2025',
        'image' => 'page_59_img_01.webp',
        'scope' => 'أعمال ترابية وتسوية كبرى، وقواعد خرسانية للمعدات الثقيلة، وأرضيات خرسانية فائقة التحمل، وتركيب هياكل فولاذية مسبقة الصنع واسعة البحور.'
    )
);

$projects = $is_ar ? $projects_ar : $projects_en;
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> سجل مشاريع وإنجازات شركة أيبكس نوفا القابضة في قطاعات البنية التحتية الكبرى بالمملكة.
  </div>
</div>
<?php endif; ?>

<!-- Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-teal);">
  <div class="container">
    <div style="font-size: 14px; color: var(--an-teal); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; <?php echo $is_ar ? 'المشاريع' : 'Projects'; ?>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 800; margin-bottom: 12px;">
      <?php echo $is_ar ? 'سجل حافل من التميز في مشاريع البنية التحتية' : 'Track Record of Infrastructure Excellence'; ?>
    </h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 820px; line-height: 1.6;">
      <?php if ($is_ar) : ?>
        استعرض جانباً من مشاريعنا المنجزة في شبكات وقود المطارات ومحطات الكهرباء والمجمعات الصناعية والأعمال الإنشائية عبر المملكة.
      <?php else : ?>
        Explore our landmark aviation fuel, power substation, petrochemical, and civil engineering project deliveries across Saudi Arabia.
      <?php endif; ?>
    </p>
  </div>
</section>

<!-- Filter Chips & Projects Grid -->
<section style="padding: 70px 0 90px 0; background: var(--an-grey);">
  <div class="container">
    
    <!-- Filter Chips -->
    <div style="display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; margin-bottom: 48px;">
      <button class="an-btn an-filter-btn active" data-filter="all" style="background: #fff; color: var(--an-navy); border: 1px solid var(--an-border); padding: 8px 20px; border-radius: 30px; font-weight: 600;">
        <?php echo $is_ar ? 'كافة القطاعات' : 'All Sectors'; ?>
      </button>
      <button class="an-btn an-filter-btn" data-filter="aviation" style="background: #fff; color: var(--an-navy); border: 1px solid var(--an-border); padding: 8px 20px; border-radius: 30px; font-weight: 600;">
        <?php echo $is_ar ? 'وقود الطيران' : 'Aviation & Fuel'; ?>
      </button>
      <button class="an-btn an-filter-btn" data-filter="power" style="background: #fff; color: var(--an-navy); border: 1px solid var(--an-border); padding: 8px 20px; border-radius: 30px; font-weight: 600;">
        <?php echo $is_ar ? 'الطاقة ومحطات التحويل' : 'Power & Substations'; ?>
      </button>
      <button class="an-btn an-filter-btn" data-filter="oil-gas" style="background: #fff; color: var(--an-navy); border: 1px solid var(--an-border); padding: 8px 20px; border-radius: 30px; font-weight: 600;">
        <?php echo $is_ar ? 'النفط والغاز والصناعة' : 'Industrial Oil & Gas'; ?>
      </button>
      <button class="an-btn an-filter-btn" data-filter="civil" style="background: #fff; color: var(--an-navy); border: 1px solid var(--an-border); padding: 8px 20px; border-radius: 30px; font-weight: 600;">
        <?php echo $is_ar ? 'الأعمال المدنية والإنشائية' : 'Civil & Structural'; ?>
      </button>
    </div>

    <!-- Grid -->
    <div class="an-project-grid">
      <?php foreach ($projects as $p) : ?>
        <article class="an-project-card" data-sector="<?php echo esc_attr($p['sector']); ?>">
          <div class="an-project-img">
            <img src="<?php echo esc_url($upload_url . $p['image']); ?>" alt="<?php echo esc_attr($p['title']); ?>" loading="lazy">
            <span class="an-project-sector"><?php echo esc_html($p['sector_label']); ?></span>
          </div>
          <div class="an-project-body">
            <div class="an-project-meta">
              <span><?php echo $is_ar ? 'الجهة: ' . esc_html($p['client']) : 'Client: ' . esc_html($p['client']); ?></span> · 
              <span><?php echo esc_html($p['year']); ?></span>
            </div>
            <h3 class="an-project-title"><?php echo esc_html($p['title']); ?></h3>
            <p style="font-size: 13.5px; color: var(--an-teal); font-weight: 600; margin-bottom: 8px;">📍 <?php echo esc_html($p['location']); ?></p>
            <p style="font-size: 14.5px; color: var(--an-ink-light); line-height: 1.6; margin-bottom: 16px;">
              <?php echo esc_html($p['scope']); ?>
            </p>
            <a href="<?php echo esc_url($contact_url); ?>" class="an-service-card-link">
              <?php echo $is_ar ? 'طلب عرض سعر لنطاق أعمال مماثل ←' : 'Request Similar Scope Proposal →'; ?>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- CTA Band -->
<section class="an-cta-band">
  <div class="container">
    <h2><?php echo $is_ar ? 'هل لديك مناقصة مشروع تتطلب خبرة تنفيذية مؤكدة؟' : 'Have a Project Tender Requiring Proven Execution?'; ?></h2>
    <p>
      <?php if ($is_ar) : ?>
        تواصل مع مكتب إدارة المشاريع والمناقصات في الرياض للحصول على ملفات التأهيل والملفات الفنية وتقديم العطاءات.
      <?php else : ?>
        Contact our project management office in Riyadh for qualification dossiers, pre-qualifications, and bids.
      <?php endif; ?>
    </p>
    <a href="<?php echo esc_url($contact_url); ?>" class="an-btn an-btn-primary" style="background: var(--an-white); color: var(--an-navy) !important; font-weight: 700;">
      <?php echo $is_ar ? 'تقديم طلب مناقصة / RFP ←' : 'Submit Project RFP →'; ?>
    </a>
  </div>
</section>

<?php get_footer(); ?>
