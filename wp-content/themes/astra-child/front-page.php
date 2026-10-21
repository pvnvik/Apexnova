<?php
/**
 * Front Page Template - ApexNova Holding Company
 * Bilingual (EN / AR RTL)
 * Conforms to Brief Section 6.1 (11 sections in precise ACWA rhythm)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';

$services_url = $is_ar ? home_url('/ar/services-ar/') : home_url('/services/');
$about_url    = $is_ar ? home_url('/ar/about-us-ar/') : home_url('/about-us/');
$projects_url = $is_ar ? home_url('/ar/projects-ar/') : home_url('/projects/');
$safety_url   = $is_ar ? home_url('/ar/safety-ar/') : home_url('/safety/');
$training_url = $is_ar ? home_url('/ar/training-ar/') : home_url('/training/');
$careers_url  = $is_ar ? home_url('/ar/careers-ar/') : home_url('/careers/');
$contact_url  = $is_ar ? home_url('/ar/contact-us-ar/') : home_url('/contact-us/');
$media_url    = $is_ar ? home_url('/ar/media-ar/') : home_url('/media/');
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> النسخة العربية المعتمدة لشركة أيبكس نوفا القابضة (ApexNova Holding Company) – الرياض.
  </div>
</div>
<?php endif; ?>

<!-- 1. Hero Slider (4 Slides) -->
<section class="an-hero-slider" aria-label="<?php echo $is_ar ? 'القدرات الهندسية ومشاريع البنية التحتية' : 'Featured Infrastructure Capabilities'; ?>">
  <!-- Slide 1: Engineering Infrastructure -->
  <div class="an-slide active" style="background-image: url('<?php echo esc_url($upload_url . 'page_01_img_02.webp'); ?>');">
    <div class="an-slide-overlay"></div>
    <div class="container">
      <div class="an-slide-content">
        <span class="an-slide-tag"><?php echo $is_ar ? 'منذ 1997 · الرياض، المملكة العربية السعودية' : 'Since 1997 · Riyadh, Saudi Arabia'; ?></span>
        <h1 class="an-slide-title"><?php echo $is_ar ? 'هندسة البنية التحتية للمملكة' : 'Engineering the Kingdom’s Infrastructure'; ?></h1>
        <p class="an-slide-desc">
          <?php if ($is_ar) : ?>
            تقديم حلول هندسية متكاملة في المقاولات الكهروميكانيكية (MEP)، وشبكات وقود الطيران، وتوزيع الطاقة والمحولات عبر المملكة على مدى ثلاثة عقود.
          <?php else : ?>
            Providing high-precision MEP, electrical, aviation fuel systems, and industrial services across Saudi Arabia for nearly three decades.
          <?php endif; ?>
        </p>
        <div class="an-slide-actions">
          <a href="<?php echo esc_url($services_url); ?>" class="an-btn an-btn-primary"><?php echo $is_ar ? 'استكشف خدماتنا' : 'Explore Our Services'; ?></a>
          <a href="<?php echo esc_url($about_url); ?>" class="an-btn an-btn-outline"><?php echo $is_ar ? 'عن أيبكس نوفا' : 'About ApexNova'; ?></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 2: Powering Aviation, Oil & Gas -->
  <div class="an-slide" style="background-image: url('<?php echo esc_url($upload_url . 'page_03_img_01.webp'); ?>');">
    <div class="an-slide-overlay"></div>
    <div class="container">
      <div class="an-slide-content">
        <span class="an-slide-tag"><?php echo $is_ar ? 'مشاريع البنية التحتية الحيوية' : 'Critical National Infrastructure'; ?></span>
        <h2 class="an-slide-title"><?php echo $is_ar ? 'طاقة موثوقة لقطاعات الطيران والنفط والغاز والصناعة' : 'Powering Aviation, Oil & Gas and Heavy Industry'; ?></h2>
        <p class="an-slide-desc">
          <?php if ($is_ar) : ?>
            هندسة متخصصة لأنظمة هيدرانت وقود الطيران، وطلاء خطوط الأنابيب (3LPE)، والحماية الكاثودية، وأنظمة الإغلاق الآلي للطوارئ (EFSO) المرتبطة بأنظمة سكادا.
          <?php else : ?>
            Specialized engineering for aviation fuel hydrant systems, high-pressure pipeline coatings, cathodic protection, and automated SCADA shut-off networks.
          <?php endif; ?>
        </p>
        <div class="an-slide-actions">
          <a href="<?php echo esc_url(home_url('/services/aviation-fuel-systems/')); ?>" class="an-btn an-btn-primary"><?php echo $is_ar ? 'أنظمة وقود الطيران' : 'Aviation Fuel Systems'; ?></a>
          <a href="<?php echo esc_url($projects_url); ?>" class="an-btn an-btn-outline"><?php echo $is_ar ? 'استعراض المشاريع' : 'View Our Projects'; ?></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 3: Safety is How We Work -->
  <div class="an-slide" style="background-image: url('<?php echo esc_url($upload_url . 'page_51_img_01.webp'); ?>');">
    <div class="an-slide-overlay"></div>
    <div class="container">
      <div class="an-slide-content">
        <span class="an-slide-tag"><?php echo $is_ar ? 'معايير وسلامة مهنية بلا مساومة' : 'Zero Compromise HSSE'; ?></span>
        <h2 class="an-slide-title"><?php echo $is_ar ? 'السلامة منهج عملنا: معايير وامتثال كامل' : 'Safety is How We Work: Standards & Compliance'; ?></h2>
        <p class="an-slide-desc">
          <?php if ($is_ar) : ?>
            التزام صارم باشتراطات أرامكو السعودية، والدفاع المدني، وكود البناء السعودي، ومعايير ASME و API و NFPA و IEC، وشهادات ISO 9001 و 14001 و 45001.
          <?php else : ?>
            Full compliance with Saudi Law, Saudi Aramco safety specifications, ASME, API, NFPA, IEC, and certified ISO 9001, 14001 & 45001 protocols.
          <?php endif; ?>
        </p>
        <div class="an-slide-actions">
          <a href="<?php echo esc_url($safety_url); ?>" class="an-btn an-btn-red"><?php echo $is_ar ? 'سياسة السلامة' : 'Our Safety Policy'; ?></a>
          <a href="<?php echo esc_url($training_url); ?>" class="an-btn an-btn-outline"><?php echo $is_ar ? 'مركز التدريب' : 'Training Center'; ?></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 4: Careers & Team -->
  <div class="an-slide" style="background-image: url('<?php echo esc_url($upload_url . 'page_16_img_01.webp'); ?>');">
    <div class="an-slide-overlay"></div>
    <div class="container">
      <div class="an-slide-content">
        <span class="an-slide-tag"><?php echo $is_ar ? 'رأس المال البشري والتميز الهندسـي' : 'Human Capital & Excellence'; ?></span>
        <h2 class="an-slide-title"><?php echo $is_ar ? 'اصنع مستقبلك المهني مع أيبكس نوفا القابضة' : 'Build Your Career with ApexNova Holding'; ?></h2>
        <p class="an-slide-desc">
          <?php if ($is_ar) : ?>
            انضم إلى نخبة من المهندسين والفنيين المؤهلين ميدانياً للمساهمة في بناء بنية تحتية وطنية عملاقة تواكب رؤية المملكة 2030.
          <?php else : ?>
            Join a dynamic team of academically qualified and field-certified engineering professionals driving major Saudi infrastructure achievements.
          <?php endif; ?>
        </p>
        <div class="an-slide-actions">
          <a href="<?php echo esc_url($careers_url); ?>" class="an-btn an-btn-primary"><?php echo $is_ar ? 'انضم إلى فريقنا' : 'Join Our Team'; ?></a>
          <a href="<?php echo esc_url($contact_url); ?>" class="an-btn an-btn-outline"><?php echo $is_ar ? 'تواصل معنا' : 'Get in Touch'; ?></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slider Navigation -->
  <button class="an-slider-btn an-slider-prev" aria-label="<?php echo $is_ar ? 'الشريحة السابقة' : 'Previous Slide'; ?>">‹</button>
  <button class="an-slider-btn an-slider-next" aria-label="<?php echo $is_ar ? 'الشريحة التالية' : 'Next Slide'; ?>">›</button>

  <div class="an-slider-dots">
    <button class="an-dot active" aria-label="Slide 1"></button>
    <button class="an-dot" aria-label="Slide 2"></button>
    <button class="an-dot" aria-label="Slide 3"></button>
    <button class="an-dot" aria-label="Slide 4"></button>
  </div>
</section>

<!-- 2. Who We Are (Split Section) -->
<section class="an-split-section bg-grey">
  <div class="container">
    <div class="an-split-grid">
      <div class="an-split-content">
        <span class="an-split-badge"><?php echo $is_ar ? 'من نحن' : 'Who We Are'; ?></span>
        <div class="an-accent-line"></div>
        <h2>
          <?php echo $is_ar ? 'مجموعة كهروميكانيكية وصناعية رائدة في الشرق الأوسط' : 'A Leading Electro-Mechanical & Industrial Group in the Middle East'; ?>
        </h2>
        <?php if ($is_ar) : ?>
          <p>تأسست <strong>شركة أيبكس نوفا القابضة</strong> عام 1997 كشركة سعودية متخصصة ومقرها الرياض، تقدم خدمات متكاملة في المقاولات الكهروميكانيكية والمشاريع الصناعية الكبرى عبر المملكة. نقدم حلولاً فائقة الدقة في أنظمة وقود الطيران، وتوزيع الطاقة الكهربائية، واختبار وتشغيل محولات الجهد العالي، وتركيب المعدات الثابتة والدوارة، والتفريغ الحي (Hot Tapping)، وأنظمة مكافحة الحرائق، والأعمال الإنشائية.</p>
          <p>وانطلاقاً من مقرنا في الرياض، نوظف كوادر هندسية معتمدة ومجهزة بأحدث المعدات للالتزام الصارم بمعايير الجودة والسلامة المعتمدة لدى أرامكو السعودية والشركة السعودية للكهرباء والهيئات الدولية.</p>
          <a href="<?php echo esc_url($about_url); ?>" class="an-btn an-btn-navy" style="margin-top: 12px;">
            تعرف أكثر علينا ←
          </a>
        <?php else : ?>
          <p>Founded in 1997, <strong>ApexNova Holding Company</strong> is a Riyadh-based engineering and MEP contractor providing end-to-end multi-disciplinary services across Saudi Arabia. We deliver mission-critical solutions in aviation fuel systems, power distribution, substation transformer commissioning, static and rotating equipment installation, live hot tapping, fire safety, and structural infrastructure.</p>
          <p>Headquartered in Al Riyadh, ApexNova brings seasoned technical expertise, certified field teams, and an unwavering commitment to quality and safety standards compliant with Saudi Aramco, SEC, and international codes.</p>
          <a href="<?php echo esc_url($about_url); ?>" class="an-btn an-btn-navy" style="margin-top: 12px;">
            Learn More About Us →
          </a>
        <?php endif; ?>
      </div>
      <div class="an-split-image">
        <img src="<?php echo esc_url($upload_url . 'page_05_img_02.webp'); ?>" alt="ApexNova Pipeline Engineering & Fabrication" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 3. Stats Counter Strip -->
<section class="an-stats-strip" aria-label="<?php echo $is_ar ? 'أرقام وإحصائيات أداء المجموعة' : 'Key Performance Figures'; ?>">
  <div class="container">
    <div class="an-stats-grid">
      <div class="an-stat-item">
        <div class="an-stat-number"><span class="an-stat-count" data-target="1997">1997</span></div>
        <div class="an-stat-label"><?php echo $is_ar ? 'سنة التأسيس' : 'Year Founded'; ?></div>
      </div>
      <div class="an-stat-item">
        <div class="an-stat-number"><span class="an-stat-count" data-target="29">29</span><span class="an-stat-suffix">+</span></div>
        <div class="an-stat-label"><?php echo $is_ar ? 'عاماً من الخبرة التشغيلية' : 'Years Operating'; ?></div>
      </div>
      <div class="an-stat-item">
        <div class="an-stat-number"><span class="an-stat-count" data-target="12">12</span><span class="an-stat-suffix">+</span></div>
        <div class="an-stat-label"><?php echo $is_ar ? 'قطاعاً وخدمة متخصصة' : 'Service Divisions'; ?></div>
      </div>
      <div class="an-stat-item">
        <div class="an-stat-number"><span class="an-stat-count" data-target="15">15</span><span class="an-stat-suffix">+</span></div>
        <div class="an-stat-label"><?php echo $is_ar ? 'كبرى الهيئات والشركات الوطنية' : 'Major Enterprise Clients'; ?></div>
      </div>
      <div class="an-stat-item">
        <div class="an-stat-number"><span class="an-stat-count" data-target="250">250</span><span class="an-stat-suffix">+</span></div>
        <div class="an-stat-label"><?php echo $is_ar ? 'مشروعاً منجزاً' : 'Projects Executed'; ?></div>
      </div>
      <div class="an-stat-item">
        <div class="an-stat-number"><span class="an-stat-count" data-target="500">500</span><span class="an-stat-suffix">+</span></div>
        <div class="an-stat-label"><?php echo $is_ar ? 'مهندس وفني متخصص' : 'Engineering Workforce'; ?></div>
      </div>
    </div>
  </div>
</section>

<!-- 4. What We Do (Service Cards Grid - 12 Cards) -->
<section class="an-services-section">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'خدماتنا وقدراتنا' : 'What We Do'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'حلول هندسية متكاملة لقطاعات البنية التحتية' : 'Engineered Solutions Across Critical Industries'; ?></h2>
      <p>
        <?php if ($is_ar) : ?>
          من أنظمة هيدرانت وقود المطارات المعقدة إلى محطات المحولات الكهربائية عالية الجهد والصيانة بدون إيقاف تشغيل.
        <?php else : ?>
          From complex airport fuel hydrants to high-voltage power substations and industrial maintenance without shutdown, our divisions deliver turnkey excellence.
        <?php endif; ?>
      </p>
    </div>

    <div class="an-service-grid">
      <!-- 1. Aviation Fuel Hydrant Systems -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_06_img_01.webp'); ?>" alt="Aviation Fuel Systems" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'أنظمة وقود الطيران والهيدرانت' : 'Aviation Fuel Hydrant Systems'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'تصميم شبكات الأنابيب، وتثبيت مآخذ الوقود بساحة المطار، والتحقق من مناسيب الضغط، وتركيب الصمامات وغسيل الخطوط.' : 'Specialized pipeline design, apron hydrant pit installation, compaction verification, valve assemblies, and high/low point flushing.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/aviation-fuel-systems/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 2. Pipeline Coating & Protection -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_04_img_01.webp'); ?>" alt="Pipeline Coating" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'طلاء وحماية خطوط الأنابيب' : 'Pipeline Coating & Protection'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'التبطين الداخلي (850/950 ميكرون)، والطلاء الخارجي ثلاثي الطبقات (3LPE)، وبرايمر الإيبوكسي وفحص الثقوب بالجهد العالي (Holiday Testing).' : 'Internal lining (850/950 microns), external 3LPE (Three-Layer Polyethylene), EX4413-L300(S) epoxy powder primer, and Holiday testing.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/pipeline-coating/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 3. Cathodic Protection (Deep-Well CP) -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_09_img_01.webp'); ?>" alt="Cathodic Protection" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'الحماية الكاثودية (الآبار العميقة)' : 'Cathodic Protection (Deep-Well CP)'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'أنظمة التيار القسري والأنودات المضحية مع حفر الآبار العميقة لتوفير حماية متجانسة للأنابيب المدفونة ومنع التآكل.' : 'Impressed-current and sacrificial anode systems with vertical borehole deep anode beds for uniform underground corrosion prevention.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/cathodic-protection/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 4. EFSO & SCADA Automation -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_11_img_01.webp'); ?>" alt="SCADA & EFSO" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'أنظمة سكادا والإغلاق الطارئ (EFSO)' : 'SCADA Automation & EFSO'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'أنظمة إغلاق وقود الطوارئ المتصلة بصمامات MOV مع لوحات RIO مكررة لضمان التحكم والمراقبة اللحظية للضغوط والتدفق.' : 'Emergency Fuel Shut-Off systems connected to MOVs, redundant RIO panels, and PLC integration for automated flow and pressure monitoring.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/efso-system/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 5. Jet A-1 Testing & Commissioning -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_12_img_01.webp'); ?>" alt="Jet A-1 Testing" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'تشغيل واختبار خطوط وقود Jet A-1' : 'Jet A-1 Line Commissioning'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'تصنيع مشعبات الاختبار، وغسيل وتجفيف الخطوط، وتدوير الوقود وسحب العينات للتأكد من نقاوة الوقود وفقاً للمواصفات الدولية.' : 'Custom testing manifold systems, pipeline flushing, drying, fuel circulation, and strict clarity and sediment testing for safe release.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/jet-a1-testing-commissioning/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 6. Aviation Fuel Bowsers Manufacturing -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_17_img_01.webp'); ?>" alt="Fuel Bowsers Manufacturing" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'تصنيع صهاريج وشاحنات الوقود' : 'Fuel Bowsers & Tankers Mfg'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'تصنيع محلي متقدم لصهاريج تزويد وقود الطائرات والديزل بأقسام فردية ومتعددة وفقاً لمعايير ASME و API 570/653.' : 'In-house manufacturing of mobile aviation fuel refuelers and diesel bowsers built in strict adherence to ASME and API 570/653 standards.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/fuel-bowsers-tankers/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 7. Mechanical Industrial Solutions -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_19_img_01.webp'); ?>" alt="Mechanical Industrial Solutions" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'الحلول الميكانيكية والصناعية' : 'Mechanical Industrial Solutions'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'تصميم وتنفيذ وصيانة المعدات الثابتة والدوارة، والأنابيب داخل وخارج الموقع، والهياكل الحديدية، وخزانات التخزين والمبادلات الحرارية.' : 'Design, installation, and O&M for static and rotating equipment, on-plot/off-plot piping, steel structures, storage tanks, and heat exchangers.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/mechanical-industrial-solutions/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 8. Hot Tapping, Cold Cutting & Pipe Freezing -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_31_img_01.webp'); ?>" alt="Hot Tapping & Pipe Freezing" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'التفريغ الحي وتجميد الأنابيب' : 'Hot Tapping & Pipe Freezing'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'ربط التفرعات تحت الضغط وتجميد الأنابيب بالتبريد العميق لتنفيذ الصيانة واستبدال الصمامات دون إيقاف تشغيل المنشأة.' : 'Live line branch tie-ins and cryogenic line freezing allowing plant maintenance and valve replacements without shutting down operations.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/hot-tapping-cold-cutting/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 9. Fire Fighting & FADS -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_21_img_01.webp'); ?>" alt="Fire Fighting Systems" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'أنظمة مكافحة الحرائق والإنذار' : 'Fire Fighting & FADS'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'أنظمة متكاملة لإنذار الحريق، وكواشف الغاز والحرارة، ومآخذ ومضخات الإطفاء الرطبة، وشبكات الرش الآلي المعتمدة من الدفاع المدني.' : 'Integrated Fire Alarm Detection Systems, flame/gas/water detectors, portable extinguisher supply, wet riser hydrants, and sprinkler networks.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/fire-fighting-systems/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 10. Transformer Testing & Commissioning -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_43_img_01.webp'); ?>" alt="Transformer Testing" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'اختبار وتشغيل المحولات الكهربائية' : 'Transformer Testing & Commissioning'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'خطة تشغيل منهجية من 9 مراحل تشمل اختبارات Tan Delta ونسب التحويل واختبار مرحلات الحماية، مع فلترة وتفريغ زيت المحولات ميدانياً.' : '9-step systematic pre-commissioning, Tan Delta, Turns Ratio, protection relay testing, and mobile on-site vacuum oil filtration (BDV/DGA).'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/transformer-testing-commissioning/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 11. Electrical Power Distribution -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_40_img_01.webp'); ?>" alt="Electrical Services" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'شبكات وتوزيع الطاقة الكهربائية' : 'Electrical Power Distribution'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'حلول سلسلة الطاقة الشاملة (جهد عالي ومتوسط ومنخفض)، وتمديد الكابلات وربطها، وأنظمة التأريض والصواعق ولوحات التوزيع MDB.' : 'End-to-end power chain solutions (HV/MV/LV), cable laying, glanding and termination, earthing, lightning protection, and MDB/SMDB panels.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/electrical-services/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>

      <!-- 12. Civil & Structural Engineering -->
      <article class="an-service-card">
        <div class="an-service-card-img">
          <img src="<?php echo esc_url($upload_url . 'page_59_img_01.webp'); ?>" alt="Civil & Structural Works" loading="lazy">
        </div>
        <div class="an-service-card-body">
          <h3 class="an-service-card-title"><?php echo $is_ar ? 'الأعمال المدنية والإنشائية' : 'Civil & Structural Works'; ?></h3>
          <p class="an-service-card-text">
            <?php echo $is_ar ? 'أعمال الحفر والردم، وقواعد المعدات الثقيلة، والجدران الواقية، والأبراج التجارية، ومشاريع الضيافة الفندقية والمستودعات الصناعية.' : 'Earthworks, heavy equipment foundations, bund walls, commercial high-rise structures, five-star hospitality real estate, and industrial hubs.'; ?>
          </p>
          <a href="<?php echo esc_url(home_url('/services/civil-structural-works/')); ?>" class="an-service-card-link"><?php echo $is_ar ? 'تفاصيل الخدمة ←' : 'Explore Service →'; ?></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 5. Standards & Certifications Badge Row -->
<section class="an-standards-strip" aria-label="<?php echo $is_ar ? 'معايير الجودة والاعتمادات' : 'Regulatory Standards'; ?>">
  <div class="container">
    <div class="an-standards-title">
      <?php echo $is_ar ? 'معايير الجودة العالمية والامتثال لاشتراطات المملكة' : 'Engineered to Global Quality & Saudi Safety Standards'; ?>
    </div>
    <div class="an-standards-badges">
      <div class="an-standard-chip">ASME Standards</div>
      <div class="an-standard-chip">API 570 / API 653</div>
      <div class="an-standard-chip">NFPA Compliance</div>
      <div class="an-standard-chip">ISO 9001:2015 (Quality)</div>
      <div class="an-standard-chip">ISO 14001:2015 (Environment)</div>
      <div class="an-standard-chip">ISO 45001:2018 (OH&S)</div>
      <div class="an-standard-chip">IEC & IEEE Electrical</div>
      <div class="an-standard-chip">SASO & Saudi Civil Defense</div>
      <div class="an-standard-chip">Saudi Aramco Specifications</div>
    </div>
  </div>
</section>

<!-- 6. Featured Projects (3-Up Cards) -->
<section class="an-projects-section">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'المشاريع البارزة' : 'Featured Projects'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'إنجازات وطنية في كبرى مشاريع البنية التحتية' : 'Delivering High-Impact Saudi Infrastructure'; ?></h2>
      <p>
        <?php if ($is_ar) : ?>
          نماذج من عقود المقاولات الكهروميكانيكية، وأنظمة وقود الطيران، وتشغيل المحولات المنجزة في مختلف مناطق المملكة.
        <?php else : ?>
          A selection of landmark electro-mechanical, fuel system, and power commissioning contracts executed across the Kingdom.
        <?php endif; ?>
      </p>
    </div>

    <div class="an-project-grid">
      <!-- Project 1 -->
      <article class="an-project-card">
        <div class="an-project-img">
          <img src="<?php echo esc_url($upload_url . 'page_07_img_01.webp'); ?>" alt="Airport Jet A-1 Fuel Hydrant Network" loading="lazy">
          <span class="an-project-sector"><?php echo $is_ar ? 'وقود الطيران' : 'Aviation'; ?></span>
        </div>
        <div class="an-project-body">
          <h3 class="an-project-title"><?php echo $is_ar ? 'توسعة شبكة هيدرانت وقود Jet A-1 للمطارات' : 'Airport Jet A-1 Fuel Hydrant Expansion'; ?></h3>
          <div class="an-project-meta">
            <span><?php echo $is_ar ? 'الجهة: هيئة الطيران المدني' : 'Client: Aviation Authority'; ?></span> · <span><?php echo $is_ar ? 'الرياض' : 'Riyadh, KSA'; ?></span>
          </div>
          <p style="font-size: 14.5px; color: var(--an-ink-light);">
            <?php echo $is_ar ? 'تصميم وحفر ومحاذاة مناسيب مآخذ الوقود مع ساحة المطار، وتركيب صمامات Pit ومحطة اختبار التدفق.' : 'Design, excavation, alignment with apron elevation levels, hydrant pit valves installation, and manifold testing.'; ?>
          </p>
          <a href="<?php echo esc_url($projects_url); ?>" class="an-service-card-link"><?php echo $is_ar ? 'استعراض دراسة الحالة ←' : 'View Case Study →'; ?></a>
        </div>
      </article>

      <!-- Project 2 -->
      <article class="an-project-card">
        <div class="an-project-img">
          <img src="<?php echo esc_url($upload_url . 'page_45_img_01.webp'); ?>" alt="380kV Substation Power Transformer Testing" loading="lazy">
          <span class="an-project-sector"><?php echo $is_ar ? 'الطاقة والكهرباء' : 'Power & Utilities'; ?></span>
        </div>
        <div class="an-project-body">
          <h3 class="an-project-title"><?php echo $is_ar ? 'اختبار وتشغيل محولات محطة جهد عالي' : 'High-Voltage Substation Transformer Testing'; ?></h3>
          <div class="an-project-meta">
            <span><?php echo $is_ar ? 'الجهة: الشركة السعودية للكهرباء' : 'Client: National Power Grid'; ?></span> · <span><?php echo $is_ar ? 'المنطقة الشرقية' : 'Eastern Province'; ?></span>
          </div>
          <p style="font-size: 14.5px; color: var(--an-ink-light);">
            <?php echo $is_ar ? 'اختبارات ما قبل التشغيل الشاملة، وفحص نسب التحويل وعزل الملفات، ومعالجة زيت المحولات بالتفريغ ميدانياً.' : 'Complete electrical pre-commissioning, turns ratio verification, protection relay secondary injection, and on-site oil filtration.'; ?>
          </p>
          <a href="<?php echo esc_url($projects_url); ?>" class="an-service-card-link"><?php echo $is_ar ? 'استعراض دراسة الحالة ←' : 'View Case Study →'; ?></a>
        </div>
      </article>

      <!-- Project 3 -->
      <article class="an-project-card">
        <div class="an-project-img">
          <img src="<?php echo esc_url($upload_url . 'page_31_img_01.webp'); ?>" alt="Live Hot Tapping on Pressurized Main" loading="lazy">
          <span class="an-project-sector"><?php echo $is_ar ? 'النفط والغاز والصناعة' : 'Industrial Oil & Gas'; ?></span>
        </div>
        <div class="an-project-body">
          <h3 class="an-project-title"><?php echo $is_ar ? 'التفريغ الحي على خطوط أنابيب مضغوطة' : 'Pressurized Pipeline Hot Tapping & Rerouting'; ?></h3>
          <div class="an-project-meta">
            <span><?php echo $is_ar ? 'الجهة: مجمع بتروكيماويات' : 'Client: Petrochemical Complex'; ?></span> · <span><?php echo $is_ar ? 'ينبع الصناعية' : 'Yanbu, KSA'; ?></span>
          </div>
          <p style="font-size: 14.5px; color: var(--an-ink-light);">
            <?php echo $is_ar ? 'تنفيذ ربط تفرعات دون إيقاف الضغط ودون تعطيل دورة الإنتاج للمنشأة مع ضمان أعلى اشتراطات الأمان.' : 'Under-pressure branch connection without shutdown, eliminating plant downtime and preventing production disruption.'; ?>
          </p>
          <a href="<?php echo esc_url($projects_url); ?>" class="an-service-card-link"><?php echo $is_ar ? 'استعراض دراسة الحالة ←' : 'View Case Study →'; ?></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 7. Safety Band (Full Width Toolbox Photo) -->
<section class="an-safety-band" aria-label="<?php echo $is_ar ? 'ثقافة السلامة المهنية' : 'Safety Culture'; ?>">
  <div class="container">
    <div class="an-safety-content">
      <div>
        <span class="an-slide-tag" style="background: var(--an-red);"><?php echo $is_ar ? 'ثقافة السلامة المهنية' : 'Safety Culture'; ?></span>
        <h2 class="an-safety-title">
          <?php echo $is_ar ? '«كل يوم عمل يبدأ باجتماع السلامة (Toolbox Meeting).»' : '“Every Single Day Starts with a Toolbox Meeting.”'; ?>
        </h2>
        <p style="color: #E2E8F0; font-size: 1.15rem; line-height: 1.6;">
          <?php if ($is_ar) : ?>
            في شركة أيبكس نوفا، تمثل سلامة الكوادر البشرية والبيئة المحيطة الركيزة التشغيلية الأولى. وقبل بدء أي نشاط ميداني، تعقد فرقنا اجتماعات السلامة الصباحية لمراجعة المخاطر والتأكد من مطابقة أدوات الوقاية الشخصية (PPE).
          <?php else : ?>
            At ApexNova, employee and environmental safety is our foundational operational imperative. Before any tool is lifted, our field supervisors and crews review hazards, verify PPE, and align with international safety protocols.
          <?php endif; ?>
        </p>
        <ul class="an-safety-list">
          <?php if ($is_ar) : ?>
            <li>تحديد المخاطر اليومية بالموقع ووضع التدابير الوقائية الاستباقية</li>
            <li>التأكد بنسبة 100% من جاهزية ومعايرة أدوات الوقاية الشخصية (PPE)</li>
            <li>تطبيق إجراءات العزل والإغلاق الصارم (LOTO) على خطوط الضغط والكهرباء</li>
            <li>الالتزام الدائم باشتراطات أرامكو السعودية والدفاع المدني والمعايير الدولية</li>
          <?php else : ?>
            <li>Daily identification of workplace hazards and site-specific controls</li>
            <li>100% confirmation of task-appropriate PPE and calibrated safety equipment</li>
            <li>Strict Lockout / Tagout (LOTO) protocols for electrical and high-pressure lines</li>
            <li>Continuous adherence to Saudi Civil Defense and Saudi Aramco safety standards</li>
          <?php endif; ?>
        </ul>
        <a href="<?php echo esc_url($safety_url); ?>" class="an-btn an-btn-primary">
          <?php echo $is_ar ? 'استعرض سياسة السلامة ←' : 'Read ApexNova Safety Policy →'; ?>
        </a>
      </div>
      <div>
        <img src="<?php echo esc_url($upload_url . 'page_16_img_01.webp'); ?>" alt="ApexNova Daily Safety Toolbox Meeting" style="border-radius: var(--an-radius-md); box-shadow: var(--an-shadow-lg);" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- 8. Training Center Teaser -->
<section class="an-split-section bg-grey">
  <div class="container">
    <div class="an-split-grid">
      <div class="an-split-image">
        <img src="<?php echo esc_url($upload_url . 'page_59_img_03.webp'); ?>" alt="ApexNova Training Center Courses" loading="lazy">
      </div>
      <div class="an-split-content">
        <span class="an-split-badge"><?php echo $is_ar ? 'مركز أيبكس نوفا للتدريب' : 'ApexNova Training Center'; ?></span>
        <div class="an-accent-line"></div>
        <h2>
          <?php echo $is_ar ? 'تمكين الكوادر الوطنية عبر دورات السلامة والإدارة المعتمدة' : 'Empowering Saudi Industry Through Certified Safety & Management Training'; ?>
        </h2>
        <p>
          <?php if ($is_ar) : ?>
            يقدم مركز أيبكس نوفا للتدريب برامج متخصصة ومعتمدة في الصحة والسلامة المهنية (HSE)، واستشارات تأهيل الموردين، وتطبيق أنظمة الجودة والآيزو للمؤسسات والشركات في المملكة.
          <?php else : ?>
            ApexNova Training Center provides world-class occupational health and safety (OHS) instruction, vendor registration consulting, and management system certifications to clients and workforce teams across the Kingdom.
          <?php endif; ?>
        </p>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin: 20px 0;">
          <div style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid var(--an-border); font-size: 14px;"><strong>✓ <?php echo $is_ar ? 'دورات H2S و SCBA' : 'H2S & SCBA Training'; ?></strong></div>
          <div style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid var(--an-border); font-size: 14px;"><strong>✓ <?php echo $is_ar ? 'دخول الأماكن المغلقة' : 'Confined Space Entry'; ?></strong></div>
          <div style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid var(--an-border); font-size: 14px;"><strong>✓ <?php echo $is_ar ? 'الإسعافات الأولية BLS' : 'First Aid & BLS'; ?></strong></div>
          <div style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid var(--an-border); font-size: 14px;"><strong>✓ <?php echo $is_ar ? 'السقالات والرفع والتثبيت' : 'Scaffolding & Rigging'; ?></strong></div>
          <div style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid var(--an-border); font-size: 14px;"><strong>✓ <?php echo $is_ar ? 'شهادات OSHA و IOSH و NEBOSH' : 'OSHA, IOSH & NEBOSH'; ?></strong></div>
          <div style="background: #fff; padding: 12px; border-radius: 6px; border: 1px solid var(--an-border); font-size: 14px;"><strong>✓ <?php echo $is_ar ? 'كبير مدققي الآيزو (ISO Lead)' : 'ISO Lead Auditor'; ?></strong></div>
        </div>
        <a href="<?php echo esc_url($training_url); ?>" class="an-btn an-btn-primary">
          <?php echo $is_ar ? 'استكشف الدورات التدريبية ←' : 'Explore Training Courses →'; ?>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- 9. Clients Logo Grid -->
<section class="an-clients-section" aria-label="<?php echo $is_ar ? 'العملاء والشركاء' : 'Clients and Partners'; ?>">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'العملاء والشركاء' : 'Clients & Partners'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'ثقة كبرى الهيئات والشركات في المملكة' : 'Trusted by the Leaders of Saudi Infrastructure'; ?></h2>
      <p><?php echo $is_ar ? 'نعتز بخدمة كبرى جهات الطاقة والمرافق والمطارات والمشاريع الكبرى في المملكة العربية السعودية.' : 'We are proud to serve the Kingdom’s premier energy, utility, aviation, and engineering giga-projects.'; ?></p>
    </div>

    <div class="an-client-grid">
      <div class="an-client-item" title="Saudi Aramco"><img src="<?php echo esc_url($upload_url . 'page_62_img_01.webp'); ?>" alt="Saudi Aramco" loading="lazy"></div>
      <div class="an-client-item" title="Saudi Electricity Company"><img src="<?php echo esc_url($upload_url . 'page_62_img_02.webp'); ?>" alt="Saudi Electricity Company" loading="lazy"></div>
      <div class="an-client-item" title="National Water Company"><img src="<?php echo esc_url($upload_url . 'page_62_img_03.webp'); ?>" alt="National Water Company" loading="lazy"></div>
      <div class="an-client-item" title="SWCC"><img src="<?php echo esc_url($upload_url . 'page_62_img_04.webp'); ?>" alt="Saline Water Conversion Corporation" loading="lazy"></div>
      <div class="an-client-item" title="Maaden"><img src="<?php echo esc_url($upload_url . 'page_63_img_01.webp'); ?>" alt="Maaden Saudi Mining" loading="lazy"></div>
      <div class="an-client-item" title="Hitachi"><img src="<?php echo esc_url($upload_url . 'page_63_img_02.webp'); ?>" alt="Hitachi" loading="lazy"></div>
      <div class="an-client-item" title="CACC"><img src="<?php echo esc_url($upload_url . 'page_64_img_01.webp'); ?>" alt="China Airport Construction Group" loading="lazy"></div>
      <div class="an-client-item" title="PowerChina"><img src="<?php echo esc_url($upload_url . 'page_65_img_01.webp'); ?>" alt="PowerChina" loading="lazy"></div>
      <div class="an-client-item" title="Sinopec"><img src="<?php echo esc_url($upload_url . 'page_66_img_01.webp'); ?>" alt="Sinopec" loading="lazy"></div>
      <div class="an-client-item" title="Almabani"><img src="<?php echo esc_url($upload_url . 'page_67_img_01.webp'); ?>" alt="Almabani General Contractors" loading="lazy"></div>
      <div class="an-client-item" title="Riyadh Airports"><img src="<?php echo esc_url($upload_url . 'page_67_img_02.webp'); ?>" alt="Riyadh Airports" loading="lazy"></div>
      <div class="an-client-item" title="GACA"><img src="<?php echo esc_url($upload_url . 'page_68_img_01.webp'); ?>" alt="General Authority of Civil Aviation" loading="lazy"></div>
      <div class="an-client-item" title="Dar"><img src="<?php echo esc_url($upload_url . 'page_68_img_02.webp'); ?>" alt="Dar Al-Handasah" loading="lazy"></div>
      <div class="an-client-item" title="Johnson Controls"><img src="<?php echo esc_url($upload_url . 'page_68_img_03.webp'); ?>" alt="Johnson Controls" loading="lazy"></div>
      <div class="an-client-item" title="Qiddiya"><img src="<?php echo esc_url($upload_url . 'page_69_img_01.webp'); ?>" alt="Qiddiya Investment Company" loading="lazy"></div>
    </div>
  </div>
</section>

<!-- 10. Latest News & Insights -->
<section class="an-projects-section" style="background: var(--an-grey);">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'المركز الإعلامي' : 'Media & News'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'آخر الأخبار والإنجازات الهندسية' : 'Latest Insights & Engineering Milestones'; ?></h2>
      <p><?php echo $is_ar ? 'تابع أحدث مشاريعنا المنجزة ومقالاتنا الهندسية المتخصصة في المملكة.' : 'Stay informed on our recent project handovers, technology adoptions, and safety achievements.'; ?></p>
    </div>

    <div class="an-project-grid">
      <article class="an-project-card">
        <div class="an-project-img">
          <img src="<?php echo esc_url($upload_url . 'page_14_img_01.webp'); ?>" alt="Jet A-1 Fuel Hydrant System Testing" loading="lazy">
        </div>
        <div class="an-project-body">
          <div class="an-project-meta"><span><?php echo $is_ar ? 'أكتوبر 2026' : 'October 2026'; ?></span> · <span><?php echo $is_ar ? 'إنجاز فني' : 'Technical Milestone'; ?></span></div>
          <h3 class="an-project-title">
            <?php echo $is_ar ? 'تسليم ناجح لمشعب اختبار شبكة هيدرانت وقود Jet A-1' : 'ApexNova Successfully Hands Over Jet A-1 Hydrant Testing Manifold'; ?>
          </h3>
          <p style="font-size: 14.5px; color: var(--an-ink-light);">
            <?php echo $is_ar ? 'إنجاز عمليات أخذ عينات وغسيل خطوط الوقود واختبار الضغط بما يطابق أدق المعايير الدولية لهيئات الطيران المدني.' : 'Advanced fuel line sampling, flushing, and pressure acceptance completed meeting strict international civil aviation criteria.'; ?>
          </p>
          <a href="<?php echo esc_url($media_url); ?>" class="an-service-card-link"><?php echo $is_ar ? 'قراءة المقال كاملاً ←' : 'Read Full Article →'; ?></a>
        </div>
      </article>

      <article class="an-project-card">
        <div class="an-project-img">
          <img src="<?php echo esc_url($upload_url . 'page_46_img_02.webp'); ?>" alt="Mobile Transformer Oil Filtration" loading="lazy">
        </div>
        <div class="an-project-body">
          <div class="an-project-meta"><span><?php echo $is_ar ? 'سبتمبر 2026' : 'September 2026'; ?></span> · <span><?php echo $is_ar ? 'عمليات ميدانية' : 'Field Operations'; ?></span></div>
          <h3 class="an-project-title">
            <?php echo $is_ar ? 'تشغيل وحدات متنقلة لمعالجة وفلترة زيت المحولات عالية التفريغ' : 'Deploying Mobile High-Vacuum Transformer Oil Filtration in KSA'; ?>
          </h3>
          <p style="font-size: 14.5px; color: var(--an-ink-light);">
            <?php echo $is_ar ? 'استعادة جهد الانهيار الكهربائي للزيت (BDV) وتحليل الغازات الذائبة (DGA) ميدانياً لإطالة عمر أصول شبكة الكهرباء.' : 'On-site dielectric breakdown voltage (BDV) restoration and dissolved gas analysis (DGA) extending critical power grid asset lifespans.'; ?>
          </p>
          <a href="<?php echo esc_url($media_url); ?>" class="an-service-card-link"><?php echo $is_ar ? 'قراءة المقال كاملاً ←' : 'Read Full Article →'; ?></a>
        </div>
      </article>

      <article class="an-project-card">
        <div class="an-project-img">
          <img src="<?php echo esc_url($upload_url . 'page_33_img_02.webp'); ?>" alt="Live Hot Tapping and Pipe Freezing" loading="lazy">
        </div>
        <div class="an-project-body">
          <div class="an-project-meta"><span><?php echo $is_ar ? 'أغسطس 2026' : 'August 2026'; ?></span> · <span><?php echo $is_ar ? 'ابتكار هندسي' : 'Innovation'; ?></span></div>
          <h3 class="an-project-title">
            <?php echo $is_ar ? 'صيانة بدون توقف: القطع البارد وتجميد الأنابيب بالتبريد العميق' : 'Zero-Downtime Maintenance: Cold Cutting and Cryogenic Pipe Freezing'; ?>
          </h3>
          <p style="font-size: 14.5px; color: var(--an-ink-light);">
            <?php echo $is_ar ? 'كيف تنجح أيبكس نوفا في عزل أنابيب المرافق الصناعية باستخدام سترات التجميد النيتروجيني دون الحاجة لإيقاف المصانع.' : 'How ApexNova isolates industrial utility pipes using cryogenic freezing jackets without requiring full plant shutdowns.'; ?>
          </p>
          <a href="<?php echo esc_url($media_url); ?>" class="an-service-card-link"><?php echo $is_ar ? 'قراءة المقال كاملاً ←' : 'Read Full Article →'; ?></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- 11. CTA Band -->
<section class="an-cta-band" aria-label="<?php echo $is_ar ? 'طلب عرض أسعار' : 'Request Proposal'; ?>">
  <div class="container">
    <h2>
      <?php echo $is_ar ? 'هل لديك مشروع بنية تحتية أو مناقصة كهروميكانيكية قادمة؟' : 'Need a Technical Proposal for Your Infrastructure Project?'; ?>
    </h2>
    <p>
      <?php if ($is_ar) : ?>
        فريقنا الهندسي وإدارة المناقصات بمقرنا في الرياض جاهزون لتقييم متطلباتكم ودراسة نطاق الأعمال وتقديم مقترح فني ومالي تفصيلي.
      <?php else : ?>
        Our engineering leads and project estimators in Riyadh are ready to evaluate your tender requirements, site surveys, or specialized service scopes.
      <?php endif; ?>
    </p>
    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url($contact_url); ?>" class="an-btn an-btn-primary" style="background: var(--an-white); color: var(--an-navy) !important; font-weight: 700;">
        <?php echo $is_ar ? 'طلب عرض أسعار الآن' : 'Request a Proposal Now'; ?>
      </a>
      <a href="https://wa.me/966110000000" target="_blank" rel="noopener noreferrer" class="an-btn an-btn-outline">
        <?php echo $is_ar ? 'محادثة مع الدعم الهندسي' : 'Chat with Engineering Support'; ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
