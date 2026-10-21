<?php
/**
 * Template Name: Contact Us Page
 * Template for /contact-us/ and /ar/contact-us-ar/
 * Bilingual (EN / AR RTL)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$home_url = $is_ar ? home_url('/ar/home-ar/') : home_url('/');

// Process contact form submission if sent directly
$form_submitted = false;
$form_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['an_contact_nonce']) && wp_verify_nonce($_POST['an_contact_nonce'], 'an_contact_action')) {
    $name    = sanitize_text_field($_POST['an_name'] ?? '');
    $email   = sanitize_email($_POST['an_email'] ?? '');
    $phone   = sanitize_text_field($_POST['an_phone'] ?? '');
    $company = sanitize_text_field($_POST['an_company'] ?? '');
    $service = sanitize_text_field($_POST['an_service'] ?? '');
    $message = sanitize_textarea_field($_POST['an_message'] ?? '');

    if (empty($name) || empty($email) || empty($message)) {
        $form_error = $is_ar 
            ? 'يرجى تعبئة كافة الحقول المطلوبة (الاسم الكامل، البريد الإلكتروني، وتفاصيل المشروع).'
            : 'Please fill in all required fields (Name, Email, and Message).';
    } else {
        $to = get_option('admin_email');
        $subject = "New RFP / Contact from ApexNova Website: $name ($company)";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nCompany: $company\nService Division: $service\n\nMessage:\n$message";
        $headers = array('Content-Type: text/plain; charset=UTF-8', "Reply-To: $name <$email>");
        
        wp_mail($to, $subject, $body, $headers);
        $form_submitted = true;
    }
}
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> صفحة الاتصال وطلب عروض الأسعار لشركة أيبكس نوفا القابضة – الرياض.
  </div>
</div>
<?php endif; ?>

<!-- Contact Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-teal);">
  <div class="container">
    <div style="font-size: 14px; color: var(--an-teal); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; <?php echo $is_ar ? 'اتصل بنا' : 'Contact Us'; ?>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 800; margin-bottom: 12px;">
      <?php echo $is_ar ? 'اتصل بشركة أيبكس نوفا القابضة' : 'Contact ApexNova Holding Company'; ?>
    </h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 800px; line-height: 1.6;">
      <?php if ($is_ar) : ?>
        تواصل مع الفريق الهندسي وإدارة المناقصات بمقرنا الرئيسي في الرياض لمناقشة المشاريع وطلب العروض الفنية والمالية وجدولة الزيارات الميدانية.
      <?php else : ?>
        Get in touch with our engineering and procurement team in Riyadh to discuss project tenders, request technical proposals, or schedule site evaluations.
      <?php endif; ?>
    </p>
  </div>
</section>

<!-- Main Contact Section -->
<section style="padding: 90px 0;">
  <div class="container">
    <div style="display: grid; grid-template-columns: 1fr 1.3fr; gap: 64px;">
      
      <!-- Left Column: Contact Details & Map Card -->
      <div>
        <span class="an-split-badge"><?php echo $is_ar ? 'المقر الرئيسي والاستفسارات' : 'Headquarters & Inquiries'; ?></span>
        <div class="an-accent-line"></div>
        <h2 style="font-size: 28px; margin-bottom: 20px;">
          <?php echo $is_ar ? 'نحن هنا لتطوير وتنفيذ حلولكم الهندسية' : 'We\'re Here to Engineer Your Solutions'; ?>
        </h2>
        <p style="color: var(--an-ink-light); font-size: 15px; margin-bottom: 32px; line-height: 1.7;">
          <?php if ($is_ar) : ?>
            يقع المقر الرئيسي لشركة أيبكس نوفا القابضة في قلب العاصمة الرياض. يمكنكم التواصل المباشر مع مكتب خدمة العملاء أو إدارة المناقصات والمشاريع.
          <?php else : ?>
            ApexNova Holding Company is centrally headquartered in Riyadh, Kingdom of Saudi Arabia. Reach out to our customer service desk, tender office, or engineering directors directly.
          <?php endif; ?>
        </p>

        <!-- Info Boxes -->
        <div style="display: flex; flex-direction: column; gap: 24px; margin-bottom: 36px;">
          <!-- Address -->
          <div style="display: flex; gap: 16px; align-items: flex-start;">
            <div style="width: 48px; height: 48px; border-radius: var(--an-radius-sm); background: var(--an-teal-light); color: var(--an-teal); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">📍</div>
            <div>
              <h4 style="font-size: 16px; margin-bottom: 4px;"><?php echo $is_ar ? 'عنوان المقر الرئيسي' : 'Head Office Address'; ?></h4>
              <p style="margin: 0; color: var(--an-ink-light); font-size: 14.5px;">
                <?php echo $is_ar ? 'المملكة العربية السعودية، الرياض، حي الملز، شارع جرير' : 'Al-Malaz, Jareer Street, Kingdom of Saudi Arabia'; ?>
              </p>
              <span style="font-size: 13px; color: var(--an-ink-muted);"><?php echo $is_ar ? 'الرياض، المملكة العربية السعودية' : 'Riyadh, KSA'; ?></span>
            </div>
          </div>

          <!-- Phone -->
          <div style="display: flex; gap: 16px; align-items: flex-start;">
            <div style="width: 48px; height: 48px; border-radius: var(--an-radius-sm); background: var(--an-teal-light); color: var(--an-teal); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">📞</div>
            <div>
              <h4 style="font-size: 16px; margin-bottom: 4px;"><?php echo $is_ar ? 'الهاتف والاستفسارات' : 'Telephone & Inquiries'; ?></h4>
              <p style="margin: 0; font-size: 14.5px;"><a href="tel:+966110000000" style="color: var(--an-navy); font-weight: 600;" dir="ltr">+966 11 000 0000</a></p>
              <span style="font-size: 13px; color: var(--an-ink-muted);">
                <?php echo $is_ar ? 'الأحد – الخميس: 8:00 صباحاً – 5:00 مساءً (بتوقيت مكة)' : 'Sunday – Thursday: 8:00 AM – 5:00 PM (AST)'; ?>
              </span>
            </div>
          </div>

          <!-- Email -->
          <div style="display: flex; gap: 16px; align-items: flex-start;">
            <div style="width: 48px; height: 48px; border-radius: var(--an-radius-sm); background: var(--an-teal-light); color: var(--an-teal); display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">✉</div>
            <div>
              <h4 style="font-size: 16px; margin-bottom: 4px;"><?php echo $is_ar ? 'البريد الإلكتروني الرسمي' : 'Official Email'; ?></h4>
              <p style="margin: 0; font-size: 14.5px;"><a href="mailto:info@apexnova.com.sa" style="color: var(--an-navy); font-weight: 600;">info@apexnova.com.sa</a></p>
              <span style="font-size: 13px; color: var(--an-ink-muted);">
                <?php echo $is_ar ? 'استفسارات المناقصات، طلبات عروض الأسعار وتأهيل الموردين' : 'General inquiries, RFQs, & subcontractor submissions'; ?>
              </span>
            </div>
          </div>

          <!-- WhatsApp -->
          <div style="display: flex; gap: 16px; align-items: flex-start;">
            <div style="width: 48px; height: 48px; border-radius: var(--an-radius-sm); background: #E8F8EE; color: #25D366; display: flex; align-items: center; justify-content: center; font-size: 20px; flex-shrink: 0;">💬</div>
            <div>
              <h4 style="font-size: 16px; margin-bottom: 4px;"><?php echo $is_ar ? 'واتساب المباشر' : 'WhatsApp Direct'; ?></h4>
              <p style="margin: 0; font-size: 14.5px;">
                <a href="https://wa.me/966110000000" target="_blank" rel="noopener noreferrer" style="color: #25D366; font-weight: 600;">
                  <?php echo $is_ar ? 'محادثة فورية عبر واتساب ←' : 'Chat with Us on WhatsApp →'; ?>
                </a>
              </p>
              <span style="font-size: 13px; color: var(--an-ink-muted);">
                <?php echo $is_ar ? 'تواصل فوري مع فريق المتابعة الفنية' : 'Instant messaging for technical inquiries'; ?>
              </span>
            </div>
          </div>
        </div>

        <!-- Styled Map Card -->
        <div style="background: var(--an-grey); border: 1px solid var(--an-border); border-radius: var(--an-radius-md); padding: 24px; text-align: center;">
          <div style="font-size: 36px; margin-bottom: 8px;">🗺</div>
          <h4 style="margin-bottom: 6px;"><?php echo $is_ar ? 'موقع استراتيجي في قلب الرياض' : 'Strategic Riyadh Location'; ?></h4>
          <p style="font-size: 13.5px; color: var(--an-ink-muted); margin-bottom: 16px;">
            <?php if ($is_ar) : ?>
              يقع مقرنا بحي الملز بمدينة الرياض، مما يوفر وصولاً سريعاً لكافة المناطق الصناعية والمطارات ومواقع المشاريع في المملكة.
            <?php else : ?>
              Centrally situated in Al-Malaz district, providing rapid logistics access to industrial corridors and airport zones across the Kingdom.
            <?php endif; ?>
          </p>
          <a href="https://www.google.com/maps/search/Al-Malaz+Jareer+Street+Riyadh+Saudi+Arabia" target="_blank" rel="noopener noreferrer" class="an-btn an-btn-navy" style="font-size: 13px; padding: 8px 18px;">
            <?php echo $is_ar ? 'فتح في خرائط جوجل ↗' : 'Open in Google Maps ↗'; ?>
          </a>
        </div>
      </div>

      <!-- Right Column: RFQ & Contact Form -->
      <div style="background: var(--an-white); border: 1px solid var(--an-border); border-radius: var(--an-radius-lg); padding: 40px; box-shadow: var(--an-shadow-md);">
        <h3 style="font-size: 24px; color: var(--an-navy); margin-bottom: 8px;">
          <?php echo $is_ar ? 'طلب عرض أسعار فني ومالي (RFQ)' : 'Request a Technical Proposal (RFQ)'; ?>
        </h3>
        <p style="color: var(--an-ink-light); font-size: 14.5px; margin-bottom: 24px;">
          <?php if ($is_ar) : ?>
            يرجى تعبئة النموذج أدناه وسيقوم مهندس المشاريع المختص بمراجعة متطلباتكم والتواصل معكم خلال 24 ساعة عمل.
          <?php else : ?>
            Complete the form below and an ApexNova project manager will review your scope and respond within 24 hours.
          <?php endif; ?>
        </p>

        <?php if ($form_submitted) : ?>
          <div style="background: #E8F8EE; border: 1px solid #A3E6B6; color: #1E6B39; padding: 20px; border-radius: var(--an-radius-md); margin-bottom: 24px;">
            <h4 style="color: #1E6B39; margin-bottom: 6px; font-size: 18px;">
              <?php echo $is_ar ? '✓ شكراً لكم! تم استلام طلبكم بنجاح.' : '✓ Thank You! Your Request Has Been Received.'; ?>
            </h4>
            <p style="margin: 0; font-size: 14px;">
              <?php echo $is_ar ? 'سيقوم فريقنا الهندسي بالرياض بدراسة المتطلبات والمواصفات والتواصل معكم قريباً.' : 'Our engineering team in Riyadh will review your requirements and contact you shortly.'; ?>
            </p>
          </div>
        <?php endif; ?>

        <?php if ($form_error) : ?>
          <div style="background: #FDEDEE; border: 1px solid #F5B5BA; color: var(--an-red); padding: 16px; border-radius: var(--an-radius-md); margin-bottom: 24px; font-size: 14px;">
            <?php echo esc_html($form_error); ?>
          </div>
        <?php endif; ?>

        <form method="POST" action="" style="display: flex; flex-direction: column; gap: 20px;">
          <?php wp_nonce_field('an_contact_action', 'an_contact_nonce'); ?>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div>
              <label style="display: block; font-size: 13.5px; font-weight: 600; color: var(--an-navy); margin-bottom: 6px;" for="an_name">
                <?php echo $is_ar ? 'الاسم الكامل *' : 'Full Name *'; ?>
              </label>
              <input type="text" id="an_name" name="an_name" required placeholder="<?php echo $is_ar ? 'م. محمد العتيبي' : 'Eng. Mohammed Al-Otaibi'; ?>" style="width: 100%; padding: 12px 14px; border: 1px solid var(--an-border); border-radius: var(--an-radius-sm); font-size: 14.5px;">
            </div>

            <div>
              <label style="display: block; font-size: 13.5px; font-weight: 600; color: var(--an-navy); margin-bottom: 6px;" for="an_email">
                <?php echo $is_ar ? 'البريد الإلكتروني للشركة *' : 'Corporate Email *'; ?>
              </label>
              <input type="email" id="an_email" name="an_email" required placeholder="m.alotaibi@company.com" style="width: 100%; padding: 12px 14px; border: 1px solid var(--an-border); border-radius: var(--an-radius-sm); font-size: 14.5px;">
            </div>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px;">
            <div>
              <label style="display: block; font-size: 13.5px; font-weight: 600; color: var(--an-navy); margin-bottom: 6px;" for="an_phone">
                <?php echo $is_ar ? 'رقم الجوال / واتساب' : 'Mobile / WhatsApp Number'; ?>
              </label>
              <input type="tel" id="an_phone" name="an_phone" placeholder="+966 5X XXX XXXX" dir="ltr" style="width: 100%; padding: 12px 14px; border: 1px solid var(--an-border); border-radius: var(--an-radius-sm); font-size: 14.5px;">
            </div>

            <div>
              <label style="display: block; font-size: 13.5px; font-weight: 600; color: var(--an-navy); margin-bottom: 6px;" for="an_company">
                <?php echo $is_ar ? 'اسم الشركة / الجهة' : 'Company / Client Name'; ?>
              </label>
              <input type="text" id="an_company" name="an_company" placeholder="<?php echo $is_ar ? 'مثال: شركة مقاولات / قطاع هندسي' : 'e.g. Contracting / EPC Firm'; ?>" style="width: 100%; padding: 12px 14px; border: 1px solid var(--an-border); border-radius: var(--an-radius-sm); font-size: 14.5px;">
            </div>
          </div>

          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; color: var(--an-navy); margin-bottom: 6px;" for="an_service">
              <?php echo $is_ar ? 'قطاع الخدمة المطلوب *' : 'Service Division of Interest *'; ?>
            </label>
            <select id="an_service" name="an_service" style="width: 100%; padding: 12px 14px; border: 1px solid var(--an-border); border-radius: var(--an-radius-sm); font-size: 14.5px; background: #fff;">
              <?php if ($is_ar) : ?>
                <option value="Aviation Fuel Systems">أنظمة وقود الطيران وشبكات الهيدرانت</option>
                <option value="Pipeline Coating & Cathodic Protection">طلاء الأنابيب والحماية الكاثودية (الآبار العميقة)</option>
                <option value="Transformer Testing & Commissioning">اختبار وتشغيل محولات الجهد العالي وفلترة الزيت</option>
                <option value="Mechanical Solutions & Hot Tapping">التفريغ الحي (Hot Tapping) وتجميد الأنابيب</option>
                <option value="Fire Fighting Systems & FADS">أنظمة مكافحة الحريق والإنذار FADS والرشاشات</option>
                <option value="Building MEP (HVAC & Plumbing)">الخدمات الكهروميكانيكية للمباني (التكييف والسباكة)</option>
                <option value="Electrical Power Distribution">توزيع الطاقة الكهربائية ومحطات التحويل (HV/MV/LV)</option>
                <option value="Fiber Optic & Telecom">شبكات الألياف البصرية والاتصالات</option>
                <option value="Civil & Structural Works">الأعمال المدنية والإنشائية</option>
                <option value="ApexNova Training Center">دورات السلامة والصحة المهنية بمركز أيبكس نوفا للتدريب</option>
                <option value="Other Inquiries">تأهيل الموردين واستفسارات المشتريات العامة</option>
              <?php else : ?>
                <option value="Aviation Fuel Systems">Aviation Fuel Systems & Hydrant Networks</option>
                <option value="Pipeline Coating & Cathodic Protection">Pipeline Coating & Cathodic Protection (Deep-Well CP)</option>
                <option value="Transformer Testing & Commissioning">High-Voltage Transformer Testing & Oil Filtration</option>
                <option value="Mechanical Solutions & Hot Tapping">Live Hot Tapping, Cold Cutting & Pipe Freezing</option>
                <option value="Fire Fighting Systems & FADS">Fire Fighting Systems, FADS & Sprinklers</option>
                <option value="Building MEP (HVAC & Plumbing)">Building MEP (HVAC & Plumbing Contracting)</option>
                <option value="Electrical Power Distribution">Electrical Power Distribution (HV/MV/LV Substations)</option>
                <option value="Fiber Optic & Telecom">Fiber Optic Infrastructure & Telecom</option>
                <option value="Civil & Structural Works">Civil & Structural Works</option>
                <option value="ApexNova Training Center">ApexNova Safety & QHSE Training Courses</option>
                <option value="Other Inquiries">General Procurement / Vendor Registration</option>
              <?php endif; ?>
            </select>
          </div>

          <div>
            <label style="display: block; font-size: 13.5px; font-weight: 600; color: var(--an-navy); margin-bottom: 6px;" for="an_message">
              <?php echo $is_ar ? 'نطاق وتفاصيل المشروع *' : 'Project Scope / Scope of Work *'; ?>
            </label>
            <textarea id="an_message" name="an_message" required rows="5" placeholder="<?php echo $is_ar ? 'يرجى توضيح موقع المشروع، المواصفات المطلوبة، المواعيد الزمنية للمناقصة...' : 'Please outline project location, specifications, tender deadlines, or technical scopes...'; ?>" style="width: 100%; padding: 12px 14px; border: 1px solid var(--an-border); border-radius: var(--an-radius-sm); font-size: 14.5px;"></textarea>
          </div>

          <div style="display: flex; align-items: flex-start; gap: 10px;">
            <input type="checkbox" id="an_consent" name="an_consent" required style="margin-top: 4px;">
            <label for="an_consent" style="font-size: 13px; color: var(--an-ink-muted); line-height: 1.5;">
              <?php if ($is_ar) : ?>
                أوافق على قيام شركة أيبكس نوفا القابضة بمعالجة هذه البيانات بما يتوافق مع نظام حماية البيانات الشخصية السعودي (PDPL) وسياسة الخصوصية للموقع.
              <?php else : ?>
                I consent to ApexNova Holding Company processing this information in accordance with the Kingdom of Saudi Arabia Personal Data Protection Law (PDPL) and Privacy Policy.
              <?php endif; ?>
            </label>
          </div>

          <button type="submit" class="an-btn an-btn-primary" style="padding: 14px 28px; font-size: 16px; width: 100%;">
            <?php echo $is_ar ? 'إرسال طلب العرض الفني ←' : 'Submit Technical Proposal Request →'; ?>
          </button>
        </form>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
