<?php
/**
 * Template Name: Safety (HSSE) Page
 * Template for /safety/ and /ar/safety-ar/ - ApexNova Health, Safety, Security & Environment
 * Bilingual (EN / AR RTL)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';

$home_url     = $is_ar ? home_url('/ar/home-ar/') : home_url('/');
$training_url = $is_ar ? home_url('/ar/training-ar/') : home_url('/training/');
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> سياسة ومعايير السلامة المهنية والصحة والبيئة (HSSE) لشركة أيبكس نوفا القابضة.
  </div>
</div>
<?php endif; ?>

<!-- Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-red);">
  <div class="container">
    <div style="font-size: 14px; color: var(--an-red); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; <?php echo $is_ar ? 'السلامة المهنية (HSSE)' : 'HSSE & Safety'; ?>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 800; margin-bottom: 12px;">
      <?php echo $is_ar ? 'سياسة وثقافة السلامة في أيبكس نوفا' : 'ApexNova Safety Policy & Culture'; ?>
    </h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 820px; line-height: 1.6;">
      <?php if ($is_ar) : ?>
        صفر حوادث، وامتثال كامل للأنظمة، ووقاية استباقية من المخاطر تحكم كافة مشاريعنا وأعمالنا الميدانية عبر المملكة العربية السعودية.
      <?php else : ?>
        Zero harm, total compliance, and proactive hazard prevention governing every project across Saudi Arabia.
      <?php endif; ?>
    </p>
  </div>
</section>

<!-- Safety Policy Statement -->
<section style="padding: 80px 0; background: var(--an-white);">
  <div class="container">
    <div class="an-split-grid">
      <div class="an-split-content">
        <span class="an-split-badge" style="color: var(--an-red);"><?php echo $is_ar ? 'التزامنا الراسخ' : 'Our Commitment'; ?></span>
        <div class="an-accent-line" style="background: var(--an-red);"></div>
        <h2><?php echo $is_ar ? 'وثيقة سياسة السلامة والصحة المهنية' : 'ApexNova Safety Policy'; ?></h2>
        <?php if ($is_ar) : ?>
          <p style="font-size: 1.15rem; font-weight: 500; color: var(--an-navy); line-height: 1.7;">
            توفر سياسة السلامة لشركة أيبكس نوفا منظومة واضحة من القواعد والمسؤوليات والإجراءات اللازمة لمنع الحوادث وحماية موظفينا ومعداتنا وممتلكاتنا والبيئة بما يتوافق تماماً مع الأنظمة واللوائح المعمول بها في المملكة العربية السعودية.
          </p>
          <p>
            نؤمن بأن سلامة العاملين هي الركيزة الأساسية لمنع الحوادث والإصابات والأمراض المهنية، مع الحفاظ على بيئة عمل آمنة وصحية ومحفزة للإنتاجية العالية.
          </p>
          <p>
            تلتزم الإدارة والمشرفون الميدانيون بجميع المعايير والبروتوكولات الدولية والمحلية، بما في ذلك متطلبات <strong>ADR، و NFPA، و API، و ISO، و IEC، واشتراطات هيئة المواصفات والمقاييس (SASO) والدفاع المدني السعودي</strong>.
          </p>
        <?php else : ?>
          <p style="font-size: 1.15rem; font-weight: 500; color: var(--an-navy); line-height: 1.7;">
            ApexNova safety policy provides a clear system of rules, responsibilities, and procedures required to prevent accidents and protect our employees, equipment, property, and the environment in full alignment with the statutory laws of Saudi Arabia.
          </p>
          <p>
            We believe that employee safety is essential to prevent accidents, injuries, fatalities, and occupational illnesses while maintaining a safe, healthy, and productive working environment.
          </p>
          <p>
            Our management and field supervisors follow all international procedures and standards in accordance with applicable global protocols and local Saudi Arabian requirements, including <strong>ADR, NFPA, API, ISO, IEC, and applicable SASO / Saudi Civil Defense</strong> directives.
          </p>
        <?php endif; ?>
      </div>
      <div class="an-split-image">
        <img src="<?php echo esc_url($upload_url . 'page_51_img_01.webp'); ?>" alt="ApexNova HSSE Inspection Team" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Daily Toolbox Meeting Section (Section 6.5) -->
<section style="background: var(--an-grey); padding: 80px 0;" id="toolbox-talks">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge" style="color: var(--an-red);"><?php echo $is_ar ? 'الانضباط التشغيلي اليومي' : 'Daily Operational Discipline'; ?></span>
      <div class="an-accent-line" style="background: var(--an-red);"></div>
      <h2><?php echo $is_ar ? '«كل يوم عمل يبدأ باجتماع السلامة الصباحي (Toolbox Meeting)»' : 'Every Single Day Starts with a Toolbox Meeting'; ?></h2>
      <p>
        <?php if ($is_ar) : ?>
          يعقد اجتماع السلامة الصباحي يومياً قبل الشروع في أي مهمة لضمان الفهم التام للمخاطر وتدابير الحماية والمسؤوليات الفردية وإجراءات العمل الآمنة.
        <?php else : ?>
          A Toolbox Meeting is conducted prior to commencing any work to ensure complete understanding of hazards, controls, individual responsibilities, and safe procedures.
        <?php endif; ?>
      </p>
    </div>

    <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 48px; align-items: center;">
      <div>
        <h3 style="font-size: 20px; color: var(--an-navy); margin-bottom: 16px;">
          <?php echo $is_ar ? 'الأهداف السبعة الرئيسية لاجتماع السلامة اليومي:' : 'Core Purposes of the Daily Briefing:'; ?>
        </h3>
        <div style="display: flex; flex-direction: column; gap: 12px;">
          <?php if ($is_ar) : ?>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-right: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>1. تحديد المخاطر وتقييمها بالموقع:</strong> مراجعة المخاطر الفيزيائية والكيميائية والكهربائية الخاصة بموقع العمل في ذلك اليوم.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-right: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>2. شرح خطة العمل وطرق التحكم الآمنة:</strong> مراجعة بيان طريقة العمل (Method Statement) وتحليل سلامة العمل (JSA).
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-right: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>3. التحقق من أدوات الوقاية الشخصية (PPE):</strong> الفحص العيني الشامل لارتداء وتطابق معدات الحماية الإلزامية ونظافتها.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-right: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>4. فحص جاهزية الأدوات والمعدات:</strong> التأكد من معايرة الأجهزة وسلامة التمديدات وخلو الآلات من أي أعطال أو شروخ.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-right: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>5. إجراءات الطوارئ ومسارات الإخلاء:</strong> التذكير بصفارات الإنذار، ونقاط التجمع، وأرقام مسؤولي الإسعافات الأولية.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-right: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>6. الدروس المستفادة والحوادث الوشيكة:</strong> مناقشة المواقف الميدانية السابقة لمنع تكرار أي خطأ محتمل.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-right: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>7. حق إيقاف العمل غير الآمن (Stop-Work Authority):</strong> تفويض وتمكين كل عامل وفني بإيقاف أي نشاط فوراً إذا ظهر خطر مفاجئ.
            </div>
          <?php else : ?>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-left: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>1. Identify Workplace Hazards & Risks:</strong> Specific site reviews of physical, chemical, and electrical risks.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-left: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>2. Safe Work Method & Controls:</strong> Thorough walkthrough of the Method Statement and Job Safety Analysis (JSA).
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-left: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>3. Confirm Correct PPE Requirements:</strong> Physical check of mandatory and task-specific Personal Protective Equipment.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-left: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>4. Tools & Equipment Readiness:</strong> Verification that calibrated, tagged, and uncompromised machinery is deployed.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-left: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>5. Emergency Procedures & Muster Points:</strong> Clear instruction on alarms, emergency egress, and first aider contacts.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-left: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>6. Lessons Learned & Near Misses:</strong> Reviewing recent industry incidents to prevent repeat occurrences.
            </div>
            <div style="background: #fff; padding: 16px 20px; border-radius: var(--an-radius-sm); border-left: 4px solid var(--an-teal); box-shadow: var(--an-shadow-sm);">
              <strong>7. Open Employee Questions & Stop-Work Authority:</strong> Empowering every team member with Stop-Work Authority if unsafe conditions arise.
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div>
        <img src="<?php echo esc_url($upload_url . 'page_16_img_01.webp'); ?>" alt="Toolbox Meeting on Field Site" style="border-radius: var(--an-radius-md); box-shadow: var(--an-shadow-lg); margin-bottom: 20px;" loading="lazy">
        <div style="background: #fff; padding: 24px; border-radius: var(--an-radius-md); border: 1px solid var(--an-border); text-align: center;">
          <img src="<?php echo esc_url($upload_url . 'page_52_img_01.webp'); ?>" alt="PPE Personal Protective Equipment Graphic" style="margin: 0 auto 12px auto; max-height: 140px; object-fit: contain;">
          <h4 style="font-size: 15px; margin-bottom: 4px; color: var(--an-navy);"><?php echo $is_ar ? 'معدات الوقاية الشخصية الإلزامية (PPE)' : 'Mandatory Personal Protective Equipment'; ?></h4>
          <p style="font-size: 13px; color: var(--an-ink-muted); margin: 0;">
            <?php echo $is_ar ? 'خوذة الرأس، نظارات الحماية، سدادات الأذن، السترة العاكسة، حذاء السلامة، والقفازات العازلة للجهد الكهربائي.' : 'Hard hats, eye protection, ear defenders, high-visibility vest, safety footwear, and specialized dielectric gloves.'; ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Electrical Safety Precautions (15 items styled checklist - Section 6.5) -->
<section style="padding: 80px 0; background: var(--an-white);" id="electrical-precautions">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'بروتوكولات إنقاذ الحياة' : 'Life-Saving Protocols'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'قائمة الاحتياطات الإلزامية للسلامة الكهربائية (15 بنداً)' : 'Electrical Safety Precautions Checklist'; ?></h2>
      <p>
        <?php if ($is_ar) : ?>
          بروتوكول صارم من 15 نقطة يتم فرضه عبر كافة عمليات محطات التحويل واختبار المحولات والشبكات الصناعية للجهد العالي والمتوسط والمنخفض.
        <?php else : ?>
          Mandatory 15-point protocol enforced across all high, medium, and low voltage substation, industrial plant, and transformer testing operations.
        <?php endif; ?>
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 16px;">
      <?php 
      $precautions_en = array(
          "Only qualified and authorized personnel shall perform electrical work.",
          "Switch OFF, isolate, and lockout/tagout (LOTO) the electrical supply before maintenance.",
          "Verify that the circuit is de-energized using calibrated multi-meters before starting work.",
          "Use properly rated, certified insulated tools and calibrated electrical PPE.",
          "Ensure all electrical equipment and test trailers are properly earthed/grounded.",
          "Use suitable RCD / GFCI protection wherever portable power tools are connected.",
          "Do not use damaged cables, cracked plugs, worn sockets, or compromised switchgear.",
          "Keep electrical equipment away from water, moisture, and damp conditions unless rated IP67+.",
          "Maintain safe physical clearance distances from overhead and energized electrical lines.",
          "Electrical panels shall remain closed, clearly identified, and accessible only to authorized staff.",
          "Do not overload electrical circuits or bypass protective relays and trip devices.",
          "Use appropriately certified ATEX/IECEx explosion-proof equipment in hazardous areas.",
          "Inspect electrical installations, cables, and earthing bonds on a regular scheduled basis.",
          "Keep fire extinguishers certified and suitable for electrical fires (CO2 / Clean Agent) readily accessible.",
          "Strictly follow applicable IEC, NFPA 70E, OSHA, and Saudi Electrical Safety requirements."
      );

      $precautions_ar = array(
          "لا يُسمح إلا للكوادر الفنية المؤهلة والمرخصة بمباشرة أي أعمال كهربائية.",
          "فصل وعزل وتطبيق إجراءات القفل والوسم (LOTO) على مصادر التغذية قبل البدء بأعمال الصيانة.",
          "التحقق القاطع من انعدام الجهد في الدائرة الكهربائية باستخدام أجهزة قياس متعددة ومعايرة.",
          "استخدام أدوات معزولة ومعتمدة وارتداء معدات الحماية الشخصية المخصصة للأعمال الكهربائية.",
          "التأكد من تأريض كافة المعدات الكهربائية ومقطورات ومختبرات الفحص الميداني بشكل سليم.",
          "استخدام قواطع الحماية من التسرب الأرضي (RCD/GFCI) مع المعدات والأدوات المحمولة.",
          "يحظر نهائياً استخدام الكابلات التالفة أو القوابس المتشققة أو المقابس المهترئة ولوحات التوزيع التالفة.",
          "حفظ المعدات الكهربائية بعيداً عن مصادر المياه والرطوبة ما لم تكن حاصلة على تصنيف IP67+ فما فوق.",
          "الالتزام الصارم بمسافات الأمان المحددة من الخطوط الهوائية وشبكات الكهرباء الحية المكهربة.",
          "إبقاء لوحات التوزيع الكهربائية مغلقة ومميزة بعلامات تحذير واضحة ولا يدخلها إلا المصرح لهم.",
          "عدم تحميل الدوائر الكهربائية فوق طاقتها التصميمية وعدم تجاوز أجهزة الحماية والمرحلات.",
          "استخدام معدات مضادة للانفجار معتمدة ومطابقة لشهادات ATEX/IECEx في المناطق الخطرة.",
          "فحص وتفتيش التمديدات الكهربائية والكابلات وشبكات التأريض بشكل دوري ومنتظم.",
          "توفير مطافئ حريق صالحة ومطابقة للحرائق الكهربائية (ثاني أكسيد الكربون CO2 والوسائط النظيفة) في متناول اليد.",
          "الالتزام الدقيق باشتراطات السلامة الكهربائية المعتمدة لدى IEC و NFPA 70E و OSHA والجهات السعودية المختصة."
      );

      $precautions = $is_ar ? $precautions_ar : $precautions_en;
      foreach ($precautions as $idx => $item) : ?>
        <div style="background: var(--an-grey); border: 1px solid var(--an-border); border-radius: var(--an-radius-sm); padding: 18px 20px; display: flex; gap: 14px; align-items: flex-start;">
          <div style="width: 28px; height: 28px; border-radius: 50%; background: var(--an-teal); color: #fff; font-size: 13px; font-weight: 700; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
            <?php echo sprintf('%02d', $idx + 1); ?>
          </div>
          <div style="font-size: 14.5px; color: var(--an-ink); line-height: 1.5; font-weight: 500;">
            <?php echo esc_html($item); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA Band -->
<section class="an-cta-band">
  <div class="container">
    <h2><?php echo $is_ar ? 'طوّر مهارات فريقك عبر دورات السلامة والصحة المهنية المعتمدة' : 'Empower Your Team with Certified HSE Training'; ?></h2>
    <p>
      <?php if ($is_ar) : ?>
        يقدم مدربو السلامة في أيبكس نوفا دورات معتمدة متوافقة مع اشتراطات أرامكو السعودية ومعايير OSHA.
      <?php else : ?>
        Our safety trainers deliver accredited courses aligned with Saudi Aramco and OSHA standards.
      <?php endif; ?>
    </p>
    <a href="<?php echo esc_url($training_url); ?>" class="an-btn an-btn-primary" style="background: var(--an-white); color: var(--an-navy) !important; font-weight: 700;">
      <?php echo $is_ar ? 'استكشف دورات مركز التدريب ←' : 'Explore Training Center Courses →'; ?>
    </a>
  </div>
</section>

<?php get_footer(); ?>
