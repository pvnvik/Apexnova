<?php
/**
 * Template Name: Training Page
 * Template for /training/ and /ar/training-ar/ - ApexNova Training Center
 * Bilingual (EN / AR RTL)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';
$home_url = $is_ar ? home_url('/ar/home-ar/') : home_url('/');

// Process course inquiry form
$course_submitted = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['an_course_nonce']) && wp_verify_nonce($_POST['an_course_nonce'], 'an_course_action')) {
    $c_name    = sanitize_text_field($_POST['c_name'] ?? '');
    $c_email   = sanitize_email($_POST['c_email'] ?? '');
    $c_phone   = sanitize_text_field($_POST['c_phone'] ?? '');
    $c_course  = sanitize_text_field($_POST['c_course'] ?? '');
    $c_company = sanitize_text_field($_POST['c_company'] ?? '');
    $c_message = sanitize_textarea_field($_POST['c_message'] ?? '');

    $to = get_option('admin_email');
    $subject = "Course Inquiry from ApexNova Website: $c_course - $c_name";
    $body = "Name: $c_name\nEmail: $c_email\nPhone: $c_phone\nCompany: $c_company\nCourse: $c_course\nMessage:\n$c_message";
    wp_mail($to, $subject, $body);
    $course_submitted = true;
}
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> مركز أيبكس نوفا للتدريب – برامج السلامة والصحة المهنية والشهادات المعتمدة في المملكة العربية السعودية.
  </div>
</div>
<?php endif; ?>

<!-- Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-teal);">
  <div class="container">
    <div style="font-size: 14px; color: var(--an-teal); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; <?php echo $is_ar ? 'التدريب' : 'Training'; ?>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 800; margin-bottom: 12px;">
      <?php echo $is_ar ? 'مركز أيبكس نوفا للتدريب' : 'ApexNova Training Center'; ?>
    </h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 820px; line-height: 1.6;">
      <?php if ($is_ar) : ?>
        دورات الصحة والسلامة المهنية (HSE)، والشهادات الدولية المعتمدة، واستشارات أنظمة الجودة والآيزو في المملكة العربية السعودية.
      <?php else : ?>
        Occupational Health & Safety (OHS) Trainings, International Certifications & Management System Consultations in Saudi Arabia.
      <?php endif; ?>
    </p>
  </div>
</section>

<!-- Who We Are & Why Choose Us -->
<section style="padding: 80px 0; background: var(--an-white);">
  <div class="container">
    <div class="an-split-grid">
      <div class="an-split-content">
        <span class="an-split-badge"><?php echo $is_ar ? 'من نحن في المملكة' : 'Who We Are in Saudi Arabia'; ?></span>
        <div class="an-accent-line"></div>
        <h2>
          <?php echo $is_ar ? 'تمكين الشركات عبر تأهيل الكوادر البشرية وتطبيق أنظمة الجودة' : 'Empowering Companies Through Human Capital & Top-Tier Management Systems'; ?>
        </h2>
        <p>
          <?php if ($is_ar) : ?>
            في <strong>مركز أيبكس نوفا للتدريب</strong>، نُمكّن المؤسسات من خلال رفع مستوى السلامة المهنية والانضباط الفني والامتثال لاشتراطات أرامكو السعودية والدفاع المدني ونظام العمل السعودي.
          <?php else : ?>
            At <strong>ApexNova Training Center</strong>, we empower enterprises by enhancing workforce safety, operational hygiene, and technical compliance. Our seasoned trainers and management consultants bring deep industry experience and analytical rigor to deliver real measurable value to every corporate client.
          <?php endif; ?>
        </p>
        <p>
          <?php if ($is_ar) : ?>
            احمِ فريقك ومنشأتك بالالتزام الصارم بالمعايير والحد من المخاطر التشغيلية في بيئات العمل الحيوية.
          <?php else : ?>
            Protect your team and business by staying compliant with Saudi labor law, Saudi Civil Defense, and Saudi Aramco safety regulations while mitigating workplace risk.
          <?php endif; ?>
        </p>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 24px;">
          <div style="background: var(--an-grey); padding: 18px; border-radius: var(--an-radius-sm); border-right: 3px solid var(--an-teal);">
            <h4 style="font-size: 15px; margin-bottom: 4px; color: var(--an-navy);"><?php echo $is_ar ? 'مدربون خبراء ومعتمدون' : 'Expert Instructors'; ?></h4>
            <p style="font-size: 13.5px; margin: 0; color: var(--an-ink-light);">
              <?php echo $is_ar ? 'مدربون حاصلون على أعلى الشهادات الميدانية في قطاعات البتروكيماويات والطيران والإنشاءات.' : 'Certified trainers with extensive field experience across petrochemical, aviation, and construction sites.'; ?>
            </p>
          </div>
          <div style="background: var(--an-grey); padding: 18px; border-radius: var(--an-radius-sm); border-right: 3px solid var(--an-red);">
            <h4 style="font-size: 15px; margin-bottom: 4px; color: var(--an-navy);"><?php echo $is_ar ? 'دعم مستمر ومتابعة' : 'Continued Support'; ?></h4>
            <p style="font-size: 13.5px; margin: 0; color: var(--an-ink-light);">
              <?php echo $is_ar ? 'تحديثات دورية ومتابعة تقييم الأثر الميداني لضمان تطبيق المتدربين للممارسات الآمنة بالموقع.' : 'Ongoing refresher resources and audit support to ensure participants apply their learning on site.'; ?>
            </p>
          </div>
        </div>
      </div>
      <div class="an-split-image">
        <img src="<?php echo esc_url($upload_url . 'page_55_img_02.webp'); ?>" alt="ISO & Quality Training Consultation" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Course Categories Grid -->
<section style="background: var(--an-grey); padding: 80px 0;" id="courses">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'البرامج والمسارات التدريبية' : 'Curriculum & Programs'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'دورات السلامة والصحة المهنية والجودة الشاملة' : 'Comprehensive QHSE & Specialized Training Courses'; ?></h2>
      <p>
        <?php if ($is_ar) : ?>
          كافة البرامج متوافقة بدقة مع معايير السلامة لأرامكو السعودية واشتراطات OSHA والبروتوكولات الدولية.
        <?php else : ?>
          All programs strictly comply with Saudi Aramco Safety Standards, OSHA Requirements, and International Safety Protocols.
        <?php endif; ?>
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 24px;">
      <!-- Category 1 -->
      <div style="background: #fff; border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-teal);">
        <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 12px;">☣ <?php echo $is_ar ? 'غاز كبريتيد الهيدروجين (H2S) وأجهزة التنفس (SCBA)' : 'H2S & Breathing Apparatus (SCBA)'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14.5px; color: var(--an-ink-light); display: flex; flex-direction: column; gap: 8px;">
          <li>• <?php echo $is_ar ? 'التوعية بغاز H2S واستخدام كواشف الغاز' : 'H2S Awareness & Gas Detection Training'; ?></li>
          <li>• <?php echo $is_ar ? 'شهادة تشغيل أجهزة التنفس المستقلة (SCBA)' : 'Self-Contained Breathing Apparatus (SCBA) Certification'; ?></li>
          <li>• <?php echo $is_ar ? 'ملاءمة واختبار أجهزة حماية الجهاز التنفسي' : 'Respiratory Protection Equipment Fitting'; ?></li>
          <li>• <?php echo $is_ar ? 'دورة فاحص الغاز المعتمد (Authorized Gas Tester)' : 'Authorized Gas Tester (AGT) Training'; ?></li>
        </ul>
      </div>

      <!-- Category 2 -->
      <div style="background: #fff; border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-red);">
        <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 12px;">🔥 <?php echo $is_ar ? 'مكافحة الحرائق والاستجابة للطوارئ' : 'Fire Fighting & Emergency Response'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14.5px; color: var(--an-ink-light); display: flex; flex-direction: column; gap: 8px;">
          <li>• <?php echo $is_ar ? 'تدريب مكافحة الحرائق الأساسي (محاكاة حية)' : 'Basic Fire Fighting Training (Live Fire Simulator)'; ?></li>
          <li>• <?php echo $is_ar ? 'قائد فريق الإطفاء وإدارة الحوادث الميدانية' : 'Fire Fighting Team Leader & Incident Command'; ?></li>
          <li>• <?php echo $is_ar ? 'قائد خطة الاستجابة لحالات الطوارئ' : 'Emergency Response Leader Training'; ?></li>
          <li>• <?php echo $is_ar ? 'مراقب الحريق المعتمد للأعمال الساخنة (Fire Watch)' : 'Certified Fire Watch Training for Hot Works'; ?></li>
        </ul>
      </div>

      <!-- Category 3 -->
      <div style="background: #fff; border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-teal);">
        <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 12px;">🩹 <?php echo $is_ar ? 'الإسعافات الأولية ودعم الحياة الأساسي (BLS)' : 'First Aid & Basic Life Support (BLS)'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14.5px; color: var(--an-ink-light); display: flex; flex-direction: column; gap: 8px;">
          <li>• <?php echo $is_ar ? 'الإسعافات الأولية الأساسية والإنعاش القلبي الرئوي (CPR)' : 'Basic First Aid & CPR Training'; ?></li>
          <li>• <?php echo $is_ar ? 'دورة BLS معتمدة من جمعية القلب السعودية' : 'Saudi Heart Association Accredited BLS Training'; ?></li>
          <li>• <?php echo $is_ar ? 'تشغيل جهاز مزيل الرجفان الآلي (AED)' : 'AED (Automated External Defibrillator) Operation'; ?></li>
          <li>• <?php echo $is_ar ? 'إدارة الإصابات وفرز الحالات الطارئة الميدانية' : 'Trauma Management & Field Triage'; ?></li>
        </ul>
      </div>

      <!-- Category 4 -->
      <div style="background: #fff; border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-navy);">
        <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 12px;">🏗 <?php echo $is_ar ? 'الأماكن المغلقة وعمليات الرفع والتثبيت' : 'Confined Space & Rigging Operations'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14.5px; color: var(--an-ink-light); display: flex; flex-direction: column; gap: 8px;">
          <li>• <?php echo $is_ar ? 'دخول الأماكن المغلقة واختبار جودة الهواء' : 'Confined Space Entry & Atmosphere Testing'; ?></li>
          <li>• <?php echo $is_ar ? 'مراقب الأماكن المغلقة وبروتوكولات الإنقاذ' : 'Confined Space Standby Man & Rescue Protocols'; ?></li>
          <li>• <?php echo $is_ar ? 'تدريب عمليات التثبيت والرفع الأساسية' : 'Basic Rigging & Lifting Training'; ?></li>
          <li>• <?php echo $is_ar ? 'برامج فني التثبيت والرفع المعتمد (المستوى 2 و 3)' : 'Certified Rigger Level 2 & Level 3 Programs'; ?></li>
        </ul>
      </div>

      <!-- Category 5 -->
      <div style="background: #fff; border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-teal);">
        <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 12px;">🪜 <?php echo $is_ar ? 'سلامة وفحص السقالات' : 'Scaffolding Safety & Inspection'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14.5px; color: var(--an-ink-light); display: flex; flex-direction: column; gap: 8px;">
          <li>• <?php echo $is_ar ? 'سلامة تركيب وتفكيك السقالات المعدنية' : 'Scaffolding Erection & Dismantling Safety'; ?></li>
          <li>• <?php echo $is_ar ? 'شهادة مفتش سقالات معتمد (Scaffolding Inspector)' : 'Scaffolding Inspector Certification'; ?></li>
          <li>• <?php echo $is_ar ? 'تدريب مشرفي ومسؤولي السقالات بالموقع' : 'Scaffolding Supervisor & Foreman Training'; ?></li>
          <li>• <?php echo $is_ar ? 'أنظمة البطاقات وحسابات أحمال السقالات' : 'Tagging Systems & Load Capacity Calculations'; ?></li>
        </ul>
      </div>

      <!-- Category 6 -->
      <div style="background: #fff; border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-red);">
        <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 12px;">🧗 <?php echo $is_ar ? 'العمل على ارتفاعات والحماية من السقوط' : 'Working at Heights & Fall Protection'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14.5px; color: var(--an-ink-light); display: flex; flex-direction: column; gap: 8px;">
          <li>• <?php echo $is_ar ? 'فحص واستخدام أنظمة إيقاف السقوط الشخصية (PFAS)' : 'Personal Fall Arrest Systems (PFAS) Inspection'; ?></li>
          <li>• <?php echo $is_ar ? 'خطة الحماية والإنقاذ من الارتفاعات العالية' : 'Fall Protection & High-Angle Rescue Plan'; ?></li>
          <li>• <?php echo $is_ar ? 'اختيار نقاط التثبيت وتركيب خطوط الحياة (Lifelines)' : 'Anchor Point Selection & Lifeline Rigging'; ?></li>
          <li>• <?php echo $is_ar ? 'التعامل مع صدمات التعليق والإخلاء السريع' : 'Suspension Trauma Mitigation'; ?></li>
        </ul>
      </div>

      <!-- Category 7 -->
      <div style="background: #fff; border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-navy);">
        <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 12px;">⚡ <?php echo $is_ar ? 'السلامة الكهربائية وعزل الطاقة (LOTO)' : 'Electrical Safety & Energy Control (LOTO)'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14.5px; color: var(--an-ink-light); display: flex; flex-direction: column; gap: 8px;">
          <li>• <?php echo $is_ar ? 'برامج عزل مصادر الطاقة والقفل والوسم (LOTO)' : 'Lockout/Tagout (LOTO) Energy Isolation Programs'; ?></li>
          <li>• <?php echo $is_ar ? 'التعرف على مخاطر الوميض القوسي (Arc Flash)' : 'Arc Flash & Electrical Hazard Recognition'; ?></li>
          <li>• <?php echo $is_ar ? 'إجراءات السلامة في معدات الضغط العالي' : 'High Pressure Equipment Safety Operations'; ?></li>
          <li>• <?php echo $is_ar ? 'معايير فحص أنظمة التأريض وقواطع GFCI' : 'Grounding & GFCI Inspection Standards'; ?></li>
        </ul>
      </div>

      <!-- Category 8 -->
      <div style="background: #fff; border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-teal);">
        <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 12px;">🚛 <?php echo $is_ar ? 'سلامة المركبات والمعدات الثقيلة' : 'Vehicle Safety & Heavy Equipment'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14.5px; color: var(--an-ink-light); display: flex; flex-direction: column; gap: 8px;">
          <li>• <?php echo $is_ar ? 'القيادة الوقائية للمركبات الخفيفة والثقيلة' : 'Defensive Driving for Light & Heavy Vehicles'; ?></li>
          <li>• <?php echo $is_ar ? 'القيادة في البيئات الصحراوية وإدارة الرحلات' : 'Desert Driving & Off-Road Journey Management'; ?></li>
          <li>• <?php echo $is_ar ? 'شهادة مشغل رافعة شوكية معتمد (Forklift Operator)' : 'Certified Forklift Operator Training'; ?></li>
          <li>• <?php echo $is_ar ? 'سلامة عمليات الرافعات ومنصات الحفر' : 'Crane Operations & Rig/Rigless Orientation'; ?></li>
        </ul>
      </div>

      <!-- Category 9 -->
      <div style="background: #fff; border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); border-top: 4px solid var(--an-red);">
        <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 12px;">🌿 <?php echo $is_ar ? 'السلامة البيئية وصحة بيئة العمل' : 'Environmental & Workplace Safety'; ?></h3>
        <ul style="list-style: none; padding: 0; margin: 0; font-size: 14.5px; color: var(--an-ink-light); display: flex; flex-direction: column; gap: 8px;">
          <li>• <?php echo $is_ar ? 'نظام الإبلاغ عن المواد الخطرة (HAZCOM)' : 'HAZCOM Hazard Communication & CHAT Training'; ?></li>
          <li>• <?php echo $is_ar ? 'الصحة المهنية وهندسة العوامل البشرية (Ergonomics)' : 'Occupational Hygiene & Industrial Ergonomics'; ?></li>
          <li>• <?php echo $is_ar ? 'التوعية بمخاطر الأسبستوس وطرق التخلص الآمن' : 'Asbestos Awareness & Safe Disposal'; ?></li>
          <li>• <?php echo $is_ar ? 'سلامة الغذاء ونظام الهاسب (HACCP) المعتمد' : 'Food Safety & HACCP Hygiene (SFDA Approved)'; ?></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- International Certifications & ISO Consultation -->
<section style="padding: 80px 0; background: var(--an-white);" id="certifications">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'الشهادات المعتمدة' : 'Accredited Qualifications'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'الشهادات المهنية العالمية واستشارات أنظمة الآيزو' : 'Global Safety Certifications & ISO Management Consulting'; ?></h2>
      <p><?php echo $is_ar ? 'مؤهلات مهنية معترف بها تعزز جاهزية الكوادر وترفع تصنيف الشركات لتأهيل الموردين.' : 'Recognized professional qualifications that empower individuals and elevate corporate vendor compliance.'; ?></p>
    </div>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
      <div>
        <h3 style="color: var(--an-navy); font-size: 22px; margin-bottom: 16px;">
          <?php echo $is_ar ? 'الشهادات الدولية للسلامة والصحة المهنية' : 'Global Safety Certifications'; ?>
        </h3>
        <ul style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 10px; font-size: 15px;">
          <li style="display: flex; gap: 10px;"><strong style="color: var(--an-teal);">✓</strong> <strong>NEBOSH:</strong> <?php echo $is_ar ? 'الشهادة العامة الدولية (IGC) في الصحة والسلامة المهنية' : 'International General Certificate (IGC) in Occupational Health & Safety'; ?></li>
          <li style="display: flex; gap: 10px;"><strong style="color: var(--an-teal);">✓</strong> <strong>IOSH:</strong> <?php echo $is_ar ? 'شهادات الإدارة بأمان والعمل بأمان (Managing / Working Safely)' : 'Managing Safely & Working Safely certifications'; ?></li>
          <li style="display: flex; gap: 10px;"><strong style="color: var(--an-teal);">✓</strong> <strong>OSHA:</strong> <?php echo $is_ar ? 'دورات OSHA 30 ساعة و 10 ساعات للصناعات العامة والإنشاءات' : '30-Hour & 10-Hour Construction / General Industry Standards'; ?></li>
          <li style="display: flex; gap: 10px;"><strong style="color: var(--an-teal);">✓</strong> <strong>TVTC:</strong> <?php echo $is_ar ? 'برامج معتمدة ضمن إطار المؤسسة العامة للتدريب التقني والمهني' : 'Basic HSE programs certified under Saudi TVTC framework'; ?></li>
        </ul>

        <h3 style="color: var(--an-navy); font-size: 22px; margin-bottom: 16px;">
          <?php echo $is_ar ? 'استشارات أنظمة الجودة والآيزو' : 'ISO Management Consultation'; ?>
        </h3>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px; font-size: 15px;">
          <li style="display: flex; gap: 10px;"><strong style="color: var(--an-navy);">✓</strong> <strong>ISO 9001:2015:</strong> <?php echo $is_ar ? 'تطبيق وتأهيل نظام إدارة الجودة الشاملة' : 'Quality Management System implementation'; ?></li>
          <li style="display: flex; gap: 10px;"><strong style="color: var(--an-navy);">✓</strong> <strong>ISO 14001:2015:</strong> <?php echo $is_ar ? 'نظام الإدارة البيئية والتوافق الاستدامـي' : 'Environmental Management Systems'; ?></li>
          <li style="display: flex; gap: 10px;"><strong style="color: var(--an-navy);">✓</strong> <strong>ISO 45001:2018:</strong> <?php echo $is_ar ? 'نظام إدارة الصحة والسلامة المهنية' : 'Occupational Health and Safety Management'; ?></li>
          <li style="display: flex; gap: 10px;"><strong style="color: var(--an-navy);">✓</strong> <strong>ISO Lead Auditor:</strong> <?php echo $is_ar ? 'دورات كبير مدققي الآيزو المعتمدة من IRCA' : 'IRCA-certified lead auditor training courses'; ?></li>
        </ul>
      </div>

      <div>
        <img src="<?php echo esc_url($upload_url . 'page_57_img_02.webp'); ?>" alt="ISO 9001 Quality Accreditations" style="border-radius: var(--an-radius-md); box-shadow: var(--an-shadow-md); margin-bottom: 20px;" loading="lazy">
        <div style="display: flex; gap: 16px; justify-content: center; align-items: center; background: var(--an-grey); padding: 16px; border-radius: var(--an-radius-sm);">
          <img src="<?php echo esc_url($upload_url . 'page_58_img_01.webp'); ?>" alt="NEBOSH Logo" style="height: 48px; object-fit: contain;">
          <img src="<?php echo esc_url($upload_url . 'page_58_img_02.webp'); ?>" alt="IOSH Logo" style="height: 48px; object-fit: contain;">
          <img src="<?php echo esc_url($upload_url . 'page_58_img_03.webp'); ?>" alt="OSHA Academy Logo" style="height: 48px; object-fit: contain;">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Course Registration & Inquiry Form -->
<section style="background: var(--an-grey); padding: 80px 0;" id="inquire">
  <div class="container">
    <div style="max-width: 760px; margin: 0 auto; background: #fff; padding: 40px; border-radius: var(--an-radius-lg); box-shadow: var(--an-shadow-md); border-top: 4px solid var(--an-teal);">
      <h3 style="font-size: 24px; color: var(--an-navy); margin-bottom: 8px; text-align: center;">
        <?php echo $is_ar ? 'استفسار وتسجيل في دورة تدريبية' : 'Enquire About a Training Course'; ?>
      </h3>
      <p style="text-align: center; color: var(--an-ink-light); margin-bottom: 28px; font-size: 14.5px;">
        <?php echo $is_ar ? 'سجّل فريق عمل شركتك أو استفسر عن الدورات المخصصة ومواعيد الانعقاد في الرياض.' : 'Register your workforce team or inquire regarding custom corporate batches and schedule dates in Riyadh.'; ?>
      </p>

      <?php if ($course_submitted) : ?>
        <div style="background: #E8F8EE; border: 1px solid #A3E6B6; color: #1E6B39; padding: 18px; border-radius: 6px; margin-bottom: 20px;">
          <?php echo $is_ar ? '✓ شكراً لكم! تم إرسال طلبكم بنجاح. سيتواصل معكم منسق التدريب بالرياض لتزويدكم بالمواعيد والرسوم.' : '✓ Thank you! Your course registration inquiry has been submitted. Our training coordinator will contact you with batch dates and fee schedules.'; ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="#inquire" style="display: flex; flex-direction: column; gap: 18px;">
        <?php wp_nonce_field('an_course_action', 'an_course_nonce'); ?>
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="c_name">
              <?php echo $is_ar ? 'اسم المتدرب / المسؤول *' : 'Participant / Lead Name *'; ?>
            </label>
            <input type="text" id="c_name" name="c_name" required placeholder="<?php echo $is_ar ? 'الاسم الكامل' : 'Full Name'; ?>" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;">
          </div>
          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="c_email">
              <?php echo $is_ar ? 'البريد الإلكتروني للعمل *' : 'Corporate Email *'; ?>
            </label>
            <input type="email" id="c_email" name="c_email" required placeholder="email@company.com" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;">
          </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="c_phone">
              <?php echo $is_ar ? 'رقم الهاتف / الجوال *' : 'Phone Number *'; ?>
            </label>
            <input type="tel" id="c_phone" name="c_phone" required placeholder="+966 5X XXX XXXX" dir="ltr" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;">
          </div>
          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="c_company">
              <?php echo $is_ar ? 'اسم الشركة / جهة العمل' : 'Company Name'; ?>
            </label>
            <input type="text" id="c_company" name="c_company" placeholder="<?php echo $is_ar ? 'اسم المنشأة' : 'Employer / Organization'; ?>" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;">
          </div>
        </div>

        <div>
          <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="c_course">
            <?php echo $is_ar ? 'اختر البرنامج التدريبي *' : 'Select Course Program *'; ?>
          </label>
          <select id="c_course" name="c_course" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px; background: #fff;">
            <?php if ($is_ar) : ?>
              <option value="H2S & SCBA Training">التوعية بغاز H2S وأجهزة التنفس SCBA</option>
              <option value="Basic & Advanced Fire Fighting">مكافحة الحرائق ومراقب الحريق (Fire Watch)</option>
              <option value="First Aid & BLS (Saudi Heart)">الإسعافات الأولية ودعم الحياة (جمعية القلب السعودية)</option>
              <option value="Confined Space Entry">دخول الأماكن المغلقة ومراقب السلامة</option>
              <option value="Rigging & Lifting Level 1-3">عمليات الرفع والتثبيت (المستويات 1، 2، 3)</option>
              <option value="Scaffolding Safety & Inspector">سلامة وتركيب وفحص السقالات المعتمد</option>
              <option value="Working at Heights">العمل على ارتفاعات والحماية من السقوط</option>
              <option value="LOTO Electrical Safety">إجراءات عزل الطاقة (LOTO) والسلامة الكهربائية</option>
              <option value="OSHA 10/30 Hours">شهادات OSHA 10 و 30 ساعة للإنشاءات والصناعة</option>
              <option value="NEBOSH IGC">شهادة نيبوش العامة الدولية (NEBOSH IGC)</option>
              <option value="IOSH Managing Safely">شهادة معهد السلامة البريطاني (IOSH Managing Safely)</option>
              <option value="ISO Lead Auditor">دورة كبير مدققي الآيزو (ISO Lead Auditor 9001/14001/45001)</option>
              <option value="Custom Corporate Training">برنامج تدريبي مخصص للشركات</option>
            <?php else : ?>
              <option value="H2S & SCBA Training">H2S Awareness & SCBA Breathing Apparatus</option>
              <option value="Basic & Advanced Fire Fighting">Basic Fire Fighting & Fire Watch Training</option>
              <option value="First Aid & BLS (Saudi Heart)">First Aid & BLS (Saudi Heart Association)</option>
              <option value="Confined Space Entry">Confined Space Entry & Standby Man</option>
              <option value="Rigging & Lifting Level 1-3">Rigging & Lifting (Level 1, 2, 3)</option>
              <option value="Scaffolding Safety & Inspector">Scaffolding Safety, Erection & Inspector</option>
              <option value="Working at Heights">Working at Heights & Fall Protection</option>
              <option value="LOTO Electrical Safety">Lockout/Tagout (LOTO) & Electrical Safety</option>
              <option value="OSHA 10/30 Hours">OSHA 10/30 Hours Construction & General</option>
              <option value="NEBOSH IGC">NEBOSH International General Certificate</option>
              <option value="IOSH Managing Safely">IOSH Managing Safely Certification</option>
              <option value="ISO Lead Auditor">ISO Lead Auditor Training (9001 / 14001 / 45001)</option>
              <option value="Custom Corporate Training">Custom Corporate Training Program</option>
            <?php endif; ?>
          </select>
        </div>

        <div>
          <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="c_message">
            <?php echo $is_ar ? 'عدد المرشحين / متطلبات خاصة' : 'Number of Candidates / Special Requirements'; ?>
          </label>
          <textarea id="c_message" name="c_message" rows="3" placeholder="<?php echo $is_ar ? 'حدد عدد المتدربين، التواريخ المفضلة، أو متطلبات التدريب بالموقع...' : 'Specify number of trainees, preferred start dates, or on-site requirements...'; ?>" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;"></textarea>
        </div>

        <button type="submit" class="an-btn an-btn-primary" style="width: 100%; font-size: 16px; padding: 14px;">
          <?php echo $is_ar ? 'إرسال طلب التسجيل في الدورة ←' : 'Submit Course Registration Inquiry →'; ?>
        </button>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
