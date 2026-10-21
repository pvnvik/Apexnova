<?php
/**
 * Template Name: About Us Page
 * Template for /about-us/ and /ar/about-us-ar/
 * Bilingual (EN / AR RTL)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';

$home_url    = $is_ar ? home_url('/ar/home-ar/') : home_url('/');
$contact_url = $is_ar ? home_url('/ar/contact-us-ar/') : home_url('/contact-us/');
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> نبذة عن شركة أيبكس نوفا القابضة (ApexNova Holding Company) – المملكة العربية السعودية.
  </div>
</div>
<?php endif; ?>

<!-- About Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-teal);">
  <div class="container">
    <div style="font-size: 14px; color: var(--an-teal); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; <?php echo $is_ar ? 'من نحن' : 'Who We Are'; ?>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 800; margin-bottom: 12px;">
      <?php echo $is_ar ? 'عن شركة أيبكس نوفا القابضة' : 'About ApexNova Holding Company'; ?>
    </h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 800px; line-height: 1.6;">
      <?php if ($is_ar) : ?>
        تأسست شركة أيبكس نوفا القابضة عام 1997 كشركة سعودية رائدة في تقديم خدمات المقاولات الكهروميكانيكية، وأنظمة وقود الطيران، وصيانة المحطات والمحولات الكهربائية في المملكة العربية السعودية.
      <?php else : ?>
        Founded in 1997, ApexNova is a leading Saudi electro-mechanical and industrial services group powering the Kingdom's critical aviation, power, oil & gas, and infrastructure networks.
      <?php endif; ?>
    </p>
  </div>
</section>

<!-- Overview Split Section -->
<section class="an-split-section" id="history">
  <div class="container">
    <div class="an-split-grid">
      <div class="an-split-content">
        <span class="an-split-badge"><?php echo $is_ar ? 'مسيرتنا التشغيلية' : 'Our Legacy & Operations'; ?></span>
        <div class="an-accent-line"></div>
        <h2><?php echo $is_ar ? 'هندسة متميزة لخدمة قطاعات المملكة الحيوية' : 'Engineered for Excellence Across Saudi Arabia'; ?></h2>
        <?php if ($is_ar) : ?>
          <p>تأسست <strong>شركة أيبكس نوفا القابضة</strong> عام 1997 كمزود سعودي متخصص في خدمات المقاولات الكهروميكانيكية والهندسية الشاملة. وعلى مدى ما يقرب من ثلاثة عقود، بنينا سجلاً حافلاً في تنفيذ المشاريع الكبرى المعقدة، بما في ذلك شبكات هيدرانت وقود الطائرات، وتركيب المعدات الثابتة والدوارة، والتصنيع الدقيق، وأنابيب الموقع وخارجه، والهياكل الحديدية، وأنظمة التكييف HVAC، وشبكات مكافحة الحرائق، وصهاريج التخزين، والتفريغ الحي (Hot Tapping)، والمبادلات الحرارية وأوعية الضغط المطابقة لمواصفات ASME.</p>
          <p>يتخصص <strong>قطاع الكهرباء</strong> لدينا في أعمال الهندسة والتركيب والاختبار والتشغيل الميداني لمحولات الجهد العالي، والأنظمة المساعدة لمحطات التوليد، ومحطات التوزيع الرئيسية والفرعية للقطاعات الصناعية والتجارية والسكنية عبر شبكات الجهد المنخفض والمتوسط والعالي.</p>
          <p>واليوم تقدم أيبكس نوفا خدمات الفحص والاختبار المعتمدة لقطاعات النفط والغاز والبنية التحتية الوطنية في المملكة، متخذة من الرياض مقراً رئيسياً لها لتظل شريكاً موثوقاً لأضخم مشاريع التنمية والبنية التحتية.</p>
        <?php else : ?>
          <p><strong>ApexNova Holding Company</strong> was founded in 1997 as a Saudi-based provider of comprehensive MEP and electro-mechanical services. Over nearly three decades of dedicated service, we have established an exceptional track record in delivering complex projects including aviation fuel hydrant systems, static and rotating equipment installation, precision fabrication, on-plot and off-plot piping networks, structural steel, HVAC, advanced fire-fighting systems, bulk storage tanks, live hot & cold tapping, heat exchangers, and ASME pressure vessels.</p>
          <p>Our dedicated <strong>Electrical Division</strong> specializes in engineering, installation, testing, and commissioning of high-voltage transformers, power plant auxiliary systems, and primary/secondary distribution substations serving industrial, commercial, and residential sectors across low, medium, and high voltage regimes.</p>
          <p>Today, ApexNova delivers third-party and specialized inspection services across the Kingdom’s oil & gas and critical infrastructure sectors. Headquartered in Al Riyadh, our group combines decades of field-tested engineering rigor with innovative technologies to remain one of the most admired electro-mechanical contractors in the Middle East.</p>
        <?php endif; ?>
      </div>
      <div class="an-split-image">
        <img src="<?php echo esc_url($upload_url . 'page_01_img_02.webp'); ?>" alt="Kingdom Tower and ApexNova Operations" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Vision, Mission & Values -->
<section style="background: var(--an-grey); padding: 80px 0;">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'المبادئ التوجيهية' : 'Guiding Principles'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'رؤيتنا، رسالتنا وقيمنا الجوهرية' : 'Our Vision, Mission & Core Values'; ?></h2>
      <p><?php echo $is_ar ? 'المعايير التي تحكم كل مخطط هندسي، واختبار تشغيل، واجتماع سلامة عبر كافة مواقعنا في المملكة.' : 'Guiding every blueprint, weld, voltage test, and safety briefing across our Kingdom-wide operations.'; ?></p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 28px;">
      <!-- Vision -->
      <div style="background: var(--an-white); padding: 36px; border-radius: var(--an-radius-md); box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-teal);">
        <div style="font-size: 28px; margin-bottom: 12px;">🎯</div>
        <h3 style="color: var(--an-navy); font-size: 20px; font-weight: 700; margin-bottom: 12px;"><?php echo $is_ar ? 'رؤيتنا' : 'Our Vision'; ?></h3>
        <p style="color: var(--an-ink-light); font-size: 15px; line-height: 1.6;">
          <?php if ($is_ar) : ?>
            أن نكون الشريك الكهروميكانيكي الأكثر موثوقية وتطوراً تقنياً في الشرق الأوسط، والمساهمة الفاعلة في تحقيق مستهدفات رؤية المملكة 2030 في تطوير البنية التحتية المستدامة.
          <?php else : ?>
            To be the Middle East's most trusted and technologically advanced electro-mechanical partner, driving sustainable national development and empowering Saudi Arabia’s Vision 2030 giga-infrastructure goals.
          <?php endif; ?>
        </p>
      </div>

      <!-- Mission -->
      <div style="background: var(--an-white); padding: 36px; border-radius: var(--an-radius-md); box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-navy);">
        <div style="font-size: 28px; margin-bottom: 12px;">🚀</div>
        <h3 style="color: var(--an-navy); font-size: 20px; font-weight: 700; margin-bottom: 12px;"><?php echo $is_ar ? 'رسالتنا' : 'Our Mission'; ?></h3>
        <p style="color: var(--an-ink-light); font-size: 15px; line-height: 1.6;">
          <?php if ($is_ar) : ?>
            تقديم حلول كهروميكانيكية وأنظمة وقود واختبارات تشغيلية شاملة تنفذ بأعلى درجات الدقة الهندسية، وثقافة سلامة تهدف لصفر حوادث، وموثوقية مستدامة لكافة شركائنا.
          <?php else : ?>
            To deliver turnkey electro-mechanical, aviation fuel, and testing solutions executed with unyielding precision, zero-incident safety culture, and complete lifecycle reliability for our partners.
          <?php endif; ?>
        </p>
      </div>

      <!-- Values -->
      <div style="background: var(--an-white); padding: 36px; border-radius: var(--an-radius-md); box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-red);">
        <div style="font-size: 28px; margin-bottom: 12px;">🛡</div>
        <h3 style="color: var(--an-navy); font-size: 20px; font-weight: 700; margin-bottom: 12px;"><?php echo $is_ar ? 'قيمنا الجوهرية' : 'Core Values'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; color: var(--an-ink-light); font-size: 14.5px; line-height: 1.8;">
          <?php if ($is_ar) : ?>
            <li><strong>• السلامة أولاً:</strong> لا تهاون في حماية الأرواح البشرية والمحافظة على البيئة.</li>
            <li><strong>• الدقة الهندسية:</strong> الالتزام بمواصفات ASME و API و IEC واشتراطات أرامكو.</li>
            <li><strong>• استمرارية التشغيل:</strong> منع توقف المنشآت الصناعية عبر تقنيات التفريغ الحي المتقدمة.</li>
            <li><strong>• النزاهة والشفافية:</strong> شراكات طويلة الأمد مبنية على النتائج الملموسة والمصداقية.</li>
          <?php else : ?>
            <li><strong>• Safety First:</strong> Zero compromise on human life and environmental protection.</li>
            <li><strong>• Precision Engineering:</strong> Adherence to ASME, API, and IEC specifications.</li>
            <li><strong>• Operational Continuity:</strong> Preventing client shutdown through live technology.</li>
            <li><strong>• Integrity & Transparency:</strong> Trusted partnerships built on delivered results.</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Why ApexNova (5 Pillars) -->
<section style="padding: 90px 0;">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'لماذا تختارنا' : 'Why Partner With Us'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'خمس ركائز لقدرات أيبكس نوفا الهندسية' : 'Five Pillars of ApexNova Engineering Capability'; ?></h2>
      <p><?php echo $is_ar ? 'عقود من الخبرة الميدانية مدعومة بمعدات متطورة وفرق عمل معتمدة.' : 'Decades of field experience combined with proprietary equipment and certified engineering talent.'; ?></p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
      <div style="border: 1px solid var(--an-border); border-radius: var(--an-radius-md); padding: 28px; background: #fff;">
        <span style="font-size: 22px; font-weight: 800; color: var(--an-teal); display: block; margin-bottom: 8px;">01</span>
        <h4 style="font-size: 18px; color: var(--an-navy); margin-bottom: 10px;">
          <?php echo $is_ar ? '29 عاماً من الإنجاز الميداني الموثوق' : '29 Years of Proven Field Delivery'; ?>
        </h4>
        <p style="font-size: 14.5px; color: var(--an-ink-light);">
          <?php echo $is_ar ? 'منذ تأسيسنا في عام 1997، يعكس استمرارنا وريادتنا في السوق السعودي ثقة العملاء العميقة وجودة التنفيذ المستمرة.' : 'Founded in 1997, our longevity in the Saudi industrial landscape reflects deep client trust, proven execution, and consistent quality.'; ?>
        </p>
      </div>

      <div style="border: 1px solid var(--an-border); border-radius: var(--an-radius-md); padding: 28px; background: #fff;">
        <span style="font-size: 22px; font-weight: 800; color: var(--an-teal); display: block; margin-bottom: 8px;">02</span>
        <h4 style="font-size: 18px; color: var(--an-navy); margin-bottom: 10px;">
          <?php echo $is_ar ? 'تقنيات متخصصة بدون إيقاف تشغيل' : 'Zero-Downtime Specialized Tech'; ?>
        </h4>
        <p style="font-size: 14.5px; color: var(--an-ink-light);">
          <?php echo $is_ar ? 'تقنيات التفريغ الحي (Hot Tapping) والقطع البارد وتجميد الأنابيب تتيح إجراء التعديلات والصيانة دون توقف المصانع.' : 'Proprietary hot tapping, split cold cutting, and cryogenic pipe freezing technologies allow modifications on live systems without shutting down.'; ?>
        </p>
      </div>

      <div style="border: 1px solid var(--an-border); border-radius: var(--an-radius-md); padding: 28px; background: #fff;">
        <span style="font-size: 22px; font-weight: 800; color: var(--an-teal); display: block; margin-bottom: 8px;">03</span>
        <h4 style="font-size: 18px; color: var(--an-navy); margin-bottom: 10px;">
          <?php echo $is_ar ? 'معايير أرامكو السعودية والمواصفات العالمية' : 'Saudi Aramco & Global Standards'; ?>
        </h4>
        <p style="font-size: 14.5px; color: var(--an-ink-light);">
          <?php echo $is_ar ? 'تطابق كامل مع معايير أرامكو، ومواصفات API 570/653، و ASME، ومعايير السلامة NFPA واختبارات الجهد العالي IEC.' : 'Strict alignment with Saudi Aramco specifications, API 570/653, ASME, NFPA fire standards, and IEC high-voltage testing standards.'; ?>
        </p>
      </div>

      <div style="border: 1px solid var(--an-border); border-radius: var(--an-radius-md); padding: 28px; background: #fff;">
        <span style="font-size: 22px; font-weight: 800; color: var(--an-teal); display: block; margin-bottom: 8px;">04</span>
        <h4 style="font-size: 18px; color: var(--an-navy); margin-bottom: 10px;">
          <?php echo $is_ar ? 'تصنيع محلي وأسطول معدات متكامل' : 'In-House Manufacturing & Fleet'; ?>
        </h4>
        <p style="font-size: 14.5px; color: var(--an-ink-light);">
          <?php echo $is_ar ? 'تصنيع مباشر لصهاريج وقود الطائرات وشاحنات التزويد، ووحدات متنقلة لمعالجة وتفريغ زيت المحولات ومشعبات الاختبار.' : 'Direct manufacturing of specialized aviation fuel bowsers, refueler trucks, mobile vacuum oil filtration units, and testing manifolds.'; ?>
        </p>
      </div>

      <div style="border: 1px solid var(--an-border); border-radius: var(--an-radius-md); padding: 28px; background: #fff;">
        <span style="font-size: 22px; font-weight: 800; color: var(--an-teal); display: block; margin-bottom: 8px;">05</span>
        <h4 style="font-size: 18px; color: var(--an-navy); margin-bottom: 10px;">
          <?php echo $is_ar ? 'مركز تدريب متخصص وكوادر معتمدة' : 'Integrated Workforce & Training'; ?>
        </h4>
        <p style="font-size: 14.5px; color: var(--an-ink-light);">
          <?php echo $is_ar ? 'مركز أيبكس نوفا للتدريب يضمن حصول كوادرنا وفرق عمل عملائنا على شهادات TVTC و OSHA وجمعية القلب السعودية.' : 'Our proprietary ApexNova Training Center ensures our crews and client engineers maintain TVTC, OSHA, and Saudi Heart Association certifications.'; ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Standards & Accreditations (Section 6.2) -->
<section style="background: var(--an-grey); padding: 70px 0;" id="certifications">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'الجودة والامتثال' : 'Regulatory & Quality Assurance'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'إطار الامتثال والاعتمادات الرسمية' : 'Compliance Framework & Accreditations'; ?></h2>
      <p><?php echo $is_ar ? 'نعمل في التزام تام باللوائح والأنظمة المعمول بها في المملكة العربية السعودية وأعلى المعايير الصناعية الدولية.' : 'We work in full compliance with Saudi Arabian statutory regulations and internationally recognized industry standards.'; ?></p>
    </div>

    <div class="an-standards-badges" style="max-width: 900px; margin: 0 auto;">
      <div class="an-standard-chip">ASME Boiler & Pressure Vessel</div>
      <div class="an-standard-chip">API 570 Piping Inspection</div>
      <div class="an-standard-chip">API 653 Tank Inspection</div>
      <div class="an-standard-chip">NFPA Fire Life-Safety</div>
      <div class="an-standard-chip">ISO 9001:2015 Quality Management</div>
      <div class="an-standard-chip">ISO 14001:2015 Environmental System</div>
      <div class="an-standard-chip">ISO 45001:2018 Occupational Health & Safety</div>
      <div class="an-standard-chip">IEC & IEEE Electrical Standards</div>
      <div class="an-standard-chip">SASO & Civil Defense Saudi Arabia</div>
      <div class="an-standard-chip">Saudi Aramco Engineering Specifications</div>
    </div>
  </div>
</section>

<!-- Leadership & Governance Placeholder (Brief Section 6.2) -->
<section style="padding: 80px 0;" id="leadership">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'القيادة' : 'Leadership'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'القيادة التنفيذية والحوكمة الفنية' : 'Executive Leadership & Technical Governance'; ?></h2>
      <p><?php echo $is_ar ? 'يتمتع فريق الإدارة العليا بخبرة عقود في قيادة المشاريع الهندسية والصناعية الكبرى في الشرق الأوسط.' : 'Our management team brings decades of seasoned leadership across Middle Eastern engineering, defense, and industrial sectors.'; ?></p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px; max-width: 1000px; margin: 0 auto;">
      <div style="background: #fff; border: 1px solid var(--an-border); border-radius: var(--an-radius-md); overflow: hidden; text-align: center; padding: 32px 24px; box-shadow: var(--an-shadow-sm);">
        <div style="width: 110px; height: 110px; border-radius: 50%; background: var(--an-grey); margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center; font-size: 36px; color: var(--an-navy);">👔</div>
        <h4 style="font-size: 20px; margin-bottom: 6px;"><?php echo $is_ar ? 'الإدارة التنفيذية' : 'Executive Management'; ?></h4>
        <span style="color: var(--an-teal); font-weight: 600; font-size: 13.5px; text-transform: uppercase;"><?php echo $is_ar ? 'مكتب الرئيس التنفيذي' : 'Office of the Chief Executive'; ?></span>
        <p style="font-size: 14px; color: var(--an-ink-muted); margin-top: 12px;">
          <?php echo $is_ar ? 'قيادة التوسع الاستراتيجي، والحوكمة المؤسسية، وشراكات المشتريات والمناقصات الكبرى في المملكة.' : 'Steering strategic expansion, corporate governance, and Tier-1 procurement partnerships across the Kingdom.'; ?>
        </p>
      </div>

      <div style="background: #fff; border: 1px solid var(--an-border); border-radius: var(--an-radius-md); overflow: hidden; text-align: center; padding: 32px 24px; box-shadow: var(--an-shadow-sm);">
        <div style="width: 110px; height: 110px; border-radius: 50%; background: var(--an-grey); margin: 0 auto 18px auto; display: flex; align-items: center; justify-content: center; font-size: 36px; color: var(--an-navy);">⚙</div>
        <h4 style="font-size: 20px; margin-bottom: 6px;"><?php echo $is_ar ? 'الإدارة العامة للعمليات الفنية' : 'Technical Operations Directorate'; ?></h4>
        <span style="color: var(--an-teal); font-weight: 600; font-size: 13.5px; text-transform: uppercase;"><?php echo $is_ar ? 'الهندسة والاختبار والتشغيل' : 'Engineering & Commissioning'; ?></span>
        <p style="font-size: 14px; color: var(--an-ink-muted); margin-top: 12px;">
          <?php echo $is_ar ? 'الإشراف على فرق العمل الميدانية المتخصصة في شبكات وقود الطيران، ومحولات الكهرباء، والتفريغ الحي والصيانة الصناعية.' : 'Directing specialized field teams in aviation fuel hydrants, power transformers, hot tapping, and plant maintenance.'; ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Band -->
<section class="an-cta-band">
  <div class="container">
    <h2><?php echo $is_ar ? 'جاهزون للشراكة معكم في مشروعكم القادم' : 'Ready to Partner with ApexNova on Your Next Project?'; ?></h2>
    <p>
      <?php if ($is_ar) : ?>
        تواصل مع فريق الهندسة والمناقصات في الرياض لمناقشة المواصفات الفنية أو طلب عروض الأسعار والتقييم الميداني.
      <?php else : ?>
        Contact our engineering and procurement team in Riyadh to discuss specifications, tender proposals, or site evaluations.
      <?php endif; ?>
    </p>
    <a href="<?php echo esc_url($contact_url); ?>" class="an-btn an-btn-primary" style="background: var(--an-white); color: var(--an-navy) !important; font-weight: 700;">
      <?php echo $is_ar ? 'طلب مقترح هندسي ←' : 'Request an Engineering Proposal →'; ?>
    </a>
  </div>
</section>

<?php get_footer(); ?>
