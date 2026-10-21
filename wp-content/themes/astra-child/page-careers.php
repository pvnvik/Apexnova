<?php
/**
 * Template Name: Careers Page
 * Template for /careers/ and /ar/careers-ar/ - Careers at ApexNova
 * Bilingual (EN / AR RTL)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';

$home_url = $is_ar ? home_url('/ar/home-ar/') : home_url('/');

// Process application form
$app_submitted = false;
$app_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['an_career_nonce']) && wp_verify_nonce($_POST['an_career_nonce'], 'an_career_action')) {
    $a_name     = sanitize_text_field($_POST['a_name'] ?? '');
    $a_email    = sanitize_email($_POST['a_email'] ?? '');
    $a_phone    = sanitize_text_field($_POST['a_phone'] ?? '');
    $a_position = sanitize_text_field($_POST['a_position'] ?? '');
    $a_linkedin = sanitize_url($_POST['a_linkedin'] ?? '');
    $a_notes    = sanitize_textarea_field($_POST['a_notes'] ?? '');

    // Handle CV upload if present
    $cv_file_name = '';
    if (!empty($_FILES['a_cv']['name'])) {
        $allowed = array('pdf', 'doc', 'docx');
        $ext = strtolower(pathinfo($_FILES['a_cv']['name'], PATHINFO_EXTENSION));
        if (in_array($ext, $allowed) && $_FILES['a_cv']['size'] <= 5 * 1024 * 1024) {
            $upload_overrides = array('test_form' => false);
            $movefile = wp_handle_upload($_FILES['a_cv'], $upload_overrides);
            if ($movefile && !isset($movefile['error'])) {
                $cv_file_name = $movefile['url'];
            }
        }
    }

    $to = get_option('admin_email');
    $subject = "Job Application: $a_position - $a_name";
    $body = "Applicant Name: $a_name\nEmail: $a_email\nPhone: $a_phone\nPosition: $a_position\nLinkedIn: $a_linkedin\nCV URL: $cv_file_name\n\nNotes:\n$a_notes";
    wp_mail($to, $subject, $body);
    $app_submitted = true;
}

$jobs_en = array(
    array(
        'title' => 'Senior Aviation Fuel Hydrant Commissioning Engineer',
        'location' => 'Riyadh, Saudi Arabia',
        'type' => 'Full-Time · Engineering Directorate',
        'desc' => 'Lead airfield apron hydrant pipeline commissioning, level alignment, manifold testing, and acceptance inspections compliant with GACA and EI 1540 standards.',
        'reqs' => 'B.Sc. Mechanical Engineering, 7+ years aviation fuel systems experience, valid Saudi Council of Engineers (SCE) registration.'
    ),
    array(
        'title' => 'High-Voltage Transformer Testing & Relay Protection Specialist',
        'location' => 'Eastern Province, Saudi Arabia',
        'type' => 'Full-Time · Electrical Services',
        'desc' => 'Execute 9-step transformer diagnostics (TTR, Tan Delta, Winding Resistance), secondary injection testing on differential/REF relays, and on-site oil filtration.',
        'reqs' => 'B.Sc. Electrical Engineering, 5+ years high-voltage substation experience (up to 380kV), SEC authorization preferred.'
    ),
    array(
        'title' => 'Hot Tapping & Pipeline Intervention Lead Technician',
        'location' => 'Jubail Industrial City, Saudi Arabia',
        'type' => 'Full-Time · Specialized Interventions',
        'desc' => 'Operate pressurized hot tapping drilling machines, split cold cutters, and cryogenic liquid nitrogen freezing jackets on live hydrocarbon process mains.',
        'reqs' => 'Technical diploma, 5+ years field hot tapping on refineries, certified in LOTO and explosive area operations.'
    ),
    array(
        'title' => 'QA/QC Mechanical Inspector (ASME & API 570 Certified)',
        'location' => 'Yanbu, Saudi Arabia',
        'type' => 'Full-Time · Quality Assurance',
        'desc' => 'Review welding procedures (WPS/PQR), inspect internal/external 3LPE coatings, oversee hydrostatic testing, and maintain Aramco inspection dossiers.',
        'reqs' => 'API 570 or API 653 certified, CSWIP 3.1 or AWS CWI, 5+ years Saudi Aramco approved inspector experience.'
    ),
    array(
        'title' => 'HSE & Safety Field Officer (TVTC / OSHA Certified)',
        'location' => 'Riyadh, Saudi Arabia',
        'type' => 'Full-Time · HSSE Directorate',
        'desc' => 'Conduct daily morning toolbox meetings, inspect PPE compliance, conduct Job Safety Analyses (JSA), and enforce site emergency response plans.',
        'reqs' => 'NEBOSH IGC or OSHA 30-Hour certification, valid Saudi driving license, bilingual Arabic/English.'
    )
);

$jobs_ar = array(
    array(
        'title' => 'مهندس أول تشغيل واختبار شبكات هيدرانت وقود الطيران',
        'location' => 'الرياض، المملكة العربية السعودية',
        'type' => 'دوام كامل · الإدارة الهندسية',
        'desc' => 'قيادة تشغيل شبكات أنابيب وقود الطائرات بساحات المطارات، ومحاذاة المناسيب واختبارات المشعبات وفحوصات القبول المطابقة لمعايير GACA و EI 1540.',
        'reqs' => 'بكالوريوس هندسة ميكانيكية، خبرة لا تقل عن 7 سنوات في أنظمة وقود الطيران، وتسجيل ساري بالهيئة السعودية للمهندسين (SCE).'
    ),
    array(
        'title' => 'أخصائي اختبار محولات الجهد العالي ومرحلات الحماية',
        'location' => 'المنطقة الشرقية، المملكة العربية السعودية',
        'type' => 'دوام كامل · خدمات الكهرباء والطاقة',
        'desc' => 'تنفيذ الاختبارات التشغيلية للمحولات (TTR, Tan Delta, Winding Resistance)، واختبار مرحلات الحماية التفاضلية وفلترة ومعالجة الزيت ميدانياً.',
        'reqs' => 'بكالوريوس هندسة كهربائية، خبرة لا تقل عن 5 سنوات في محطات التحويل حتى 380 ك.ف، ويفضل تصريح الشركة السعودية للكهرباء (SEC).'
    ),
    array(
        'title' => 'فني أول تفريغ حي (Hot Tapping) وتدخلات الأنابيب',
        'location' => 'مدينة الجبيل الصناعية، المملكة العربية السعودية',
        'type' => 'دوام كامل · التدخلات التخصصية',
        'desc' => 'تشغيل آلات التفريغ الحي تحت الضغط وقواطع الأنابيب الباردة وسترات تجميد الأنابيب بالنيتروجين السائل على خطوط الهيدروكربون الحية.',
        'reqs' => 'دبلوم فني متخصص، خبرة 5+ سنوات في مصافي النفط، وشهادات معتمدة في إجراءات العزل (LOTO) والعمل في المناطق الخطرة.'
    ),
    array(
        'title' => 'مفتش جودة ميكانيكية QA/QC (معتمد ASME و API 570)',
        'location' => 'ينبع الصناعية، المملكة العربية السعودية',
        'type' => 'دوام كامل · إدارة توكيد الجودة',
        'desc' => 'مراجعة مواصفات اللحام (WPS/PQR)، وفحص طلاء الأنابيب 3LPE، والإشراف على الاختبار الهيدروستاتيكي وإعداد ملفات الفحص لأرامكو السعودية.',
        'reqs' => 'شهادة API 570 أو API 653، مع CSWIP 3.1 أو AWS CWI، وخبرة 5+ سنوات كمفتش معتمد لدى أرامكو السعودية.'
    ),
    array(
        'title' => 'مسؤول سلامة وصحة مهنية ميداني HSE (معتمد OSHA / TVTC)',
        'location' => 'الرياض، المملكة العربية السعودية',
        'type' => 'دوام كامل · إدارة السلامة والبيئة',
        'desc' => 'إدارة اجتماعات السلامة الصباحية (Toolbox)، وفحص معدات الوقاية الشخصية PPE، وإجراء تحليل سلامة العمل (JSA)، وتطبيق خطط الطوارئ.',
        'reqs' => 'شهادة NEBOSH IGC أو OSHA 30 ساعة، رخصة قيادة سعودية سارية، وإتقان اللغتين العربية والإنجليزية.'
    )
);

$jobs = $is_ar ? $jobs_ar : $jobs_en;
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> بوابة التوظيف والفرص المهنية بشركة أيبكس نوفا القابضة – المملكة العربية السعودية.
  </div>
</div>
<?php endif; ?>

<!-- Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-teal);">
  <div class="container">
    <div style="font-size: 14px; color: var(--an-teal); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; <?php echo $is_ar ? 'الوظائف' : 'Careers'; ?>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 800; margin-bottom: 12px;">
      <?php echo $is_ar ? 'اصنع مستقبلك المهني مع أيبكس نوفا' : 'Build Your Career with ApexNova'; ?>
    </h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 820px; line-height: 1.6;">
      <?php if ($is_ar) : ?>
        انضم إلى نخبة من المهندسين والفنيين ومديري المشاريع في تنفيذ أضخم مشاريع البنية التحتية الوطنية في المملكة العربية السعودية.
      <?php else : ?>
        Join an elite team of engineers, technicians, and project managers driving the Kingdom’s most critical infrastructure projects.
      <?php endif; ?>
    </p>
  </div>
</section>

<!-- Life at ApexNova -->
<section style="padding: 80px 0; background: var(--an-white);">
  <div class="container">
    <div class="an-split-grid">
      <div class="an-split-content">
        <span class="an-split-badge"><?php echo $is_ar ? 'بيئة العمل في أيبكس نوفا' : 'Life at ApexNova'; ?></span>
        <div class="an-accent-line"></div>
        <h2>
          <?php echo $is_ar ? 'تطور مهني يرتكز على التميز الهندسي المستمر' : 'Engineering Career Growth Rooted in Technical Excellence'; ?>
        </h2>
        <p>
          <?php if ($is_ar) : ?>
            في شركة أيبكس نوفا القابضة، يمثل فريق العمل ميزتنا التنافسية الكبرى. نوفر بيئة عمل تحتفي بالاحترام المتبادل، والتأهيل والشهادات الميدانية المستمرة، وثقافة السلامة الصارمة، والمشاركة المباشرة في مشاريع رؤية المملكة 2030 العملاقة.
          <?php else : ?>
            At ApexNova Holding Company, our people are our primary competitive advantage. We provide an environment built on professional respect, ongoing technical certification, safety leadership, and direct participation in landmark Saudi Vision 2030 developments.
          <?php endif; ?>
        </p>
        <p>
          <?php if ($is_ar) : ?>
            ستعمل جنباً إلى جنب مع كبار الخبراء والمهندسين في مجالات وقود الطيران والمحولات الكهربائية والتفريغ الحي.
          <?php else : ?>
            Whether commissioning airport fuel hydrants, testing high-voltage transformers, or fabricating specialized bowsers, you will work alongside academically qualified and field-tested engineering leaders.
          <?php endif; ?>
        </p>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 24px;">
          <div style="background: var(--an-grey); padding: 18px; border-radius: var(--an-radius-sm); border-right: 3px solid var(--an-teal);">
            <h4 style="font-size: 15px; margin-bottom: 4px;"><?php echo $is_ar ? 'تدريب وتأهيل مستمر' : 'Continuous Training'; ?></h4>
            <p style="font-size: 13.5px; margin: 0; color: var(--an-ink-light);">
              <?php echo $is_ar ? 'شهادات مهنية ممولة (NEBOSH, OSHA, IEEE, ASME) عبر مركز أيبكس نوفا للتدريب.' : 'Sponsored certifications (NEBOSH, OSHA, IEEE, ASME) through our in-house Training Center.'; ?>
            </p>
          </div>
          <div style="background: var(--an-grey); padding: 18px; border-radius: var(--an-radius-sm); border-right: 3px solid var(--an-navy);">
            <h4 style="font-size: 15px; margin-bottom: 4px;"><?php echo $is_ar ? 'مشاريع وطنية كبرى' : 'Tier-1 Projects'; ?></h4>
            <p style="font-size: 13.5px; margin: 0; color: var(--an-ink-light);">
              <?php echo $is_ar ? 'مشاركة مباشرة في مشاريع أرامكو، والكهرباء، والطيران المدني، والقدية.' : 'Direct involvement on national infrastructure for Saudi Aramco, SEC, GACA, and Qiddiya.'; ?>
            </p>
          </div>
        </div>
      </div>
      <div class="an-split-image">
        <img src="<?php echo esc_url($upload_url . 'page_52_img_02.webp'); ?>" alt="ApexNova Engineering Team On Site" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Open Roles List -->
<section style="background: var(--an-grey); padding: 80px 0;" id="openings">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'الفرص الوظيفية الحالية' : 'Current Opportunities'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'وظائف هندسية شاغرة في مختلف مناطق المملكة' : 'Open Positions Across Saudi Arabia'; ?></h2>
      <p>
        <?php echo $is_ar ? 'نستقطب حالياً نخبة الكفاءات الهندسية والفنية ومسؤولي السلامة للمشاريع الجارية.' : 'We are actively hiring qualified engineering, testing, and HSSE talent for ongoing projects.'; ?>
      </p>
    </div>

    <div style="max-width: 960px; margin: 0 auto; display: flex; flex-direction: column; gap: 20px;">
      <?php foreach ($jobs as $idx => $job) : ?>
        <div style="background: #fff; border: 1px solid var(--an-border); border-radius: var(--an-radius-md); padding: 28px; box-shadow: var(--an-shadow-sm); transition: var(--an-transition);">
          <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 12px; margin-bottom: 12px;">
            <div>
              <h3 style="font-size: 20px; color: var(--an-navy); margin-bottom: 6px;"><?php echo esc_html($job['title']); ?></h3>
              <div style="display: flex; gap: 16px; font-size: 13.5px; color: var(--an-teal); font-weight: 600;">
                <span>📍 <?php echo esc_html($job['location']); ?></span>
                <span>💼 <?php echo esc_html($job['type']); ?></span>
              </div>
            </div>
            <a href="#apply" class="an-btn an-btn-primary" style="padding: 8px 18px; font-size: 13.5px;" onclick="document.getElementById('a_position').value = '<?php echo esc_js($job['title']); ?>';">
              <?php echo $is_ar ? 'التقديم على الوظيفة ←' : 'Apply for Role →'; ?>
            </a>
          </div>
          <p style="font-size: 14.5px; color: var(--an-ink-light); line-height: 1.6; margin-bottom: 10px;">
            <?php echo esc_html($job['desc']); ?>
          </p>
          <div style="font-size: 13px; color: var(--an-ink-muted); background: var(--an-grey); padding: 8px 14px; border-radius: 4px;">
            <strong><?php echo $is_ar ? 'المتطلبات:' : 'Requirements:'; ?></strong> <?php echo esc_html($job['reqs']); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Application Form with CV Upload -->
<section style="padding: 80px 0; background: var(--an-white);" id="apply">
  <div class="container">
    <div style="max-width: 780px; margin: 0 auto; background: #fff; padding: 40px; border-radius: var(--an-radius-lg); border: 1px solid var(--an-border); box-shadow: var(--an-shadow-md);">
      <h3 style="font-size: 24px; color: var(--an-navy); margin-bottom: 8px; text-align: center;">
        <?php echo $is_ar ? 'تقديم طلب التوظيف' : 'Submit Your Application'; ?>
      </h3>
      <p style="text-align: center; color: var(--an-ink-light); margin-bottom: 28px; font-size: 14.5px;">
        <?php echo $is_ar ? 'يرجى إرفاق سيرتكم الذاتية (بصيغة PDF أو DOCX، بحد أقصى 5 ميجابايت) وسيقوم فريق الموارد البشرية بالاطلاع عليها.' : 'Upload your resume (PDF or DOCX, max 5MB) and our human resources team will review your credentials.'; ?>
      </p>

      <?php if ($app_submitted) : ?>
        <div style="background: #E8F8EE; border: 1px solid #A3E6B6; color: #1E6B39; padding: 18px; border-radius: 6px; margin-bottom: 24px;">
          <?php echo $is_ar ? '✓ شكراً لاهتمامكم! تم استلام طلبكم بنجاح من قِبل إدارة استقطاب الكفاءات في أيبكس نوفا. سيتم التواصل مع المرشحين المؤهلين لإجراء المقابلات.' : '✓ Thank you for applying! Your application has been received by ApexNova Talent Acquisition. Shortlisted candidates will be contacted for interviews.'; ?>
        </div>
      <?php endif; ?>

      <form method="POST" action="#apply" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 18px;">
        <?php wp_nonce_field('an_career_action', 'an_career_nonce'); ?>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="a_name">
              <?php echo $is_ar ? 'الاسم الكامل *' : 'Full Name *'; ?>
            </label>
            <input type="text" id="a_name" name="a_name" required placeholder="<?php echo $is_ar ? 'المهندس / أحمد الزهراني' : 'Eng. Ahmed Al-Zahrani'; ?>" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;">
          </div>
          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="a_email">
              <?php echo $is_ar ? 'البريد الإلكتروني *' : 'Email Address *'; ?>
            </label>
            <input type="email" id="a_email" name="a_email" required placeholder="ahmed@email.com" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;">
          </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="a_phone">
              <?php echo $is_ar ? 'رقم الجوال *' : 'Mobile Number *'; ?>
            </label>
            <input type="tel" id="a_phone" name="a_phone" required placeholder="+966 5X XXX XXXX" dir="ltr" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;">
          </div>
          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="a_position">
              <?php echo $is_ar ? 'الوظيفة المتقدم لها *' : 'Position Applied For *'; ?>
            </label>
            <input type="text" id="a_position" name="a_position" required placeholder="<?php echo $is_ar ? 'حدد أو اكتب المسمى الوظيفي' : 'Select or type position'; ?>" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;">
          </div>
        </div>

        <div>
          <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="a_linkedin">
            <?php echo $is_ar ? 'رابط الملف الشخصي على لينكد إن (LinkedIn)' : 'LinkedIn Profile URL'; ?>
          </label>
          <input type="url" id="a_linkedin" name="a_linkedin" placeholder="https://www.linkedin.com/in/..." dir="ltr" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;">
        </div>

        <div>
          <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="a_cv">
            <?php echo $is_ar ? 'إرفاق السيرة الذاتية (PDF أو DOCX، أقصى حد 5MB) *' : 'Upload Resume / CV (PDF or DOCX, max 5MB) *'; ?>
          </label>
          <input type="file" id="a_cv" name="a_cv" accept=".pdf,.doc,.docx" required style="width: 100%; padding: 10px; border: 1px dashed var(--an-border); border-radius: 4px; background: var(--an-grey);">
        </div>

        <div>
          <label style="display: block; font-size: 13.5px; font-weight: 600; margin-bottom: 6px;" for="a_notes">
            <?php echo $is_ar ? 'نبذة عن الخبرات والشهادات المهنية' : 'Cover Letter / Professional Summary'; ?>
          </label>
          <textarea id="a_notes" name="a_notes" rows="4" placeholder="<?php echo $is_ar ? 'وضح بإيجاز خبراتك في المشاريع السعودية وسنوات الخبرة والشهادات المهنية المعتمدة...' : 'Briefly highlight relevant Saudi project experience, certifications, and availability...'; ?>" style="width: 100%; padding: 12px; border: 1px solid var(--an-border); border-radius: 4px;"></textarea>
        </div>

        <button type="submit" class="an-btn an-btn-primary" style="width: 100%; font-size: 16px; padding: 14px;">
          <?php echo $is_ar ? 'إرسال طلب التوظيف ←' : 'Submit Job Application →'; ?>
        </button>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
