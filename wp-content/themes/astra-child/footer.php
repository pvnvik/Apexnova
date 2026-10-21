<?php
/**
 * Footer template for ApexNova Child Theme
 * Bilingual (EN / AR RTL)
 */
$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();

$contact_url  = $is_ar ? home_url('/ar/contact-us-ar/') : home_url('/contact-us/');
$training_url = $is_ar ? home_url('/ar/training-ar/') : home_url('/training/');
$safety_url   = $is_ar ? home_url('/ar/safety-ar/') : home_url('/safety/');
?>
</main><!-- #primary -->

<footer id="colophon" class="an-footer" role="contentinfo">
  <div class="container">
    <div class="an-footer-grid">
      <!-- Col 1: About & Info -->
      <div class="an-footer-col">
        <div class="an-footer-brand" style="margin-bottom: 18px;">
          <h3 style="color: #fff; margin-bottom: 4px;">ApexNova</h3>
          <span style="color: var(--an-teal); font-size: 13px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px;">
            <?php echo $is_ar ? 'شركة قابضة' : 'Holding Company'; ?>
          </span>
        </div>
        <p style="color: #CAD5E2; font-size: 14px; margin-bottom: 20px; line-height: 1.6;">
          <?php if ($is_ar) : ?>
            هندسة البنية التحتية للمملكة: الحلول الميكانيكية والكهربائية والسلامة عبر المملكة العربية السعودية منذ 1997.
          <?php else : ?>
            Engineering the Kingdom's Infrastructure: Mechanical, Electrical, and Safety Solutions across Saudi Arabia since 1997.
          <?php endif; ?>
        </p>
        <div class="an-footer-contact-item">
          <span>📍</span>
          <span><?php echo $is_ar ? 'المملكة العربية السعودية، الرياض، حي الملز، شارع جرير' : 'Al-Malaz, Jareer Street, Kingdom of Saudi Arabia'; ?></span>
        </div>
        <div class="an-footer-contact-item">
          <span>✉</span>
          <a href="mailto:info@apexnova.com.sa" style="color: #CAD5E2;">info@apexnova.com.sa</a>
        </div>
        <div class="an-footer-contact-item">
          <span>📞</span>
          <a href="tel:+966110000000" style="color: #CAD5E2;" dir="ltr">+966 11 000 0000</a>
        </div>
      </div>

      <!-- Col 2: Services -->
      <div class="an-footer-col">
        <h4><?php echo $is_ar ? 'خدماتنا الرئيسية' : 'Our Core Services'; ?></h4>
        <ul>
          <?php if ($is_ar) : ?>
            <li><a href="<?php echo esc_url(home_url('/services/aviation-fuel-systems/')); ?>">أنظمة وقود الطيران</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/pipeline-coating/')); ?>">طلاء خطوط الأنابيب (3LPE / Epoxy)</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/cathodic-protection/')); ?>">الحماية الكاثودية (CP)</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/transformer-testing-commissioning/')); ?>">اختبار وتشغيل المحولات الكهربائية</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/electrical-services/')); ?>">توزيع الطاقة والشبكات الكهربائية</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/fire-fighting-systems/')); ?>">أنظمة مكافحة الحريق والإنذار (FADS)</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/civil-structural-works/')); ?>">الأعمال المدنية والإنشائية</a></li>
          <?php else : ?>
            <li><a href="<?php echo esc_url(home_url('/services/aviation-fuel-systems/')); ?>">Aviation Fuel Systems</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/pipeline-coating/')); ?>">Pipeline Coating (3LPE / Epoxy)</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/cathodic-protection/')); ?>">Cathodic Protection (CP)</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/transformer-testing-commissioning/')); ?>">Transformer Commissioning</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/electrical-services/')); ?>">Electrical & Power Distribution</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/fire-fighting-systems/')); ?>">Fire Fighting & FADS</a></li>
            <li><a href="<?php echo esc_url(home_url('/services/civil-structural-works/')); ?>">Civil & Structural Works</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Col 3: Training & HSSE -->
      <div class="an-footer-col">
        <h4><?php echo $is_ar ? 'التدريب والسلامة' : 'Training & Safety'; ?></h4>
        <ul>
          <?php if ($is_ar) : ?>
            <li><a href="<?php echo esc_url($training_url); ?>">مركز أيبكس نوفا للتدريب</a></li>
            <li><a href="<?php echo esc_url($training_url . '#courses'); ?>">دورات السلامة والصحة المهنية (HSE)</a></li>
            <li><a href="<?php echo esc_url($training_url . '#certifications'); ?>">شهادات OSHA و IOSH و NEBOSH</a></li>
            <li><a href="<?php echo esc_url($training_url . '#iso'); ?>">استشارات أنظمة الجودة والآيزو</a></li>
            <li><a href="<?php echo esc_url($safety_url); ?>">سياسة السلامة المهنية</a></li>
            <li><a href="<?php echo esc_url($safety_url . '#electrical-precautions'); ?>">قائمة السلامة الكهربائية (15 بنداً)</a></li>
          <?php else : ?>
            <li><a href="<?php echo esc_url($training_url); ?>">ApexNova Training Center</a></li>
            <li><a href="<?php echo esc_url($training_url . '#courses'); ?>">HSE & Basic Safety Courses</a></li>
            <li><a href="<?php echo esc_url($training_url . '#certifications'); ?>">OSHA, IOSH & NEBOSH</a></li>
            <li><a href="<?php echo esc_url($training_url . '#iso'); ?>">ISO Consultation (9001/14001/45001)</a></li>
            <li><a href="<?php echo esc_url($safety_url); ?>">ApexNova Safety Policy</a></li>
            <li><a href="<?php echo esc_url($safety_url . '#electrical-precautions'); ?>">Electrical Safety Checklist</a></li>
          <?php endif; ?>
        </ul>
      </div>

      <!-- Col 4: Quick Contact & Newsletter -->
      <div class="an-footer-col">
        <h4><?php echo $is_ar ? 'تواصل واطلب عرضاً' : 'Connect & Propose'; ?></h4>
        <p style="color: #CAD5E2; font-size: 13.5px; margin-bottom: 16px; line-height: 1.5;">
          <?php if ($is_ar) : ?>
            هل لديك مناقصة أو مشروع صناعي أو كهروميكانيكي قادم؟ اطلب استشارة فنية متخصصة ومقترحاً تفصيلياً.
          <?php else : ?>
            Have an upcoming industrial, MEP, or infrastructure tender? Request a technical consultation.
          <?php endif; ?>
        </p>
        <a href="<?php echo esc_url($contact_url); ?>" class="an-btn an-btn-primary" style="width: 100%; margin-bottom: 14px;">
          <?php echo $is_ar ? 'طلب عرض أسعار' : 'Request a Proposal'; ?>
        </a>
        <a href="https://wa.me/966110000000" target="_blank" rel="noopener noreferrer" class="an-btn" style="width: 100%; background: #25D366; color: #fff;">
          <?php echo $is_ar ? 'محادثة عبر واتساب' : 'Chat on WhatsApp'; ?>
        </a>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="an-footer-bottom">
      <div>
        <?php if ($is_ar) : ?>
          © <?php echo date('Y'); ?> شركة أيبكس نوفا القابضة. جميع الحقوق محفوظة.
        <?php else : ?>
          © <?php echo date('Y'); ?> ApexNova Holding Company. All rights reserved.
        <?php endif; ?>
      </div>
      <div class="an-footer-legal">
        <?php if ($is_ar) : ?>
          <a href="<?php echo esc_url(home_url('/ar/privacy-policy-ar/')); ?>">سياسة الخصوصية</a>
          <a href="<?php echo esc_url(home_url('/ar/terms-of-use-ar/')); ?>">شروط الاستخدام</a>
          <a href="<?php echo esc_url(home_url('/ar/cookie-policy-ar/')); ?>">سياسة ملفات تعريف الارتباط</a>
        <?php else : ?>
          <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy Policy</a>
          <a href="<?php echo esc_url(home_url('/terms-of-use/')); ?>">Terms of Use</a>
          <a href="<?php echo esc_url(home_url('/cookie-policy/')); ?>">Cookie Policy</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<!-- PDPL & GDPR Cookie Consent Banner -->
<div id="apexnova-cookie-banner" class="an-cookie-consent" style="display: none;" role="region" aria-label="<?php echo $is_ar ? 'إشعار ملفات تعريف الارتباط' : 'Cookie Consent Notification'; ?>">
  <div class="an-cookie-inner">
    <div class="an-cookie-text">
      <span class="an-cookie-icon" aria-hidden="true">🍪</span>
      <p>
        <?php if ($is_ar) : ?>
          نستخدم ملفات تعريف الارتباط والتقنيات المشابهة لضمان تجربة تصفح آمنة ومخصصة وتتوافق مع نظام حماية البيانات الشخصية السعودي (PDPL). يمكنك معرفة المزيد عبر قراءة <a href="<?php echo esc_url(home_url('/ar/cookie-policy-ar/')); ?>">سياسة ملفات تعريف الارتباط</a>.
        <?php else : ?>
          We use cookies and similar technologies to enhance navigation, analyze performance, and guarantee compliance with the Saudi Personal Data Protection Law (PDPL). Learn more in our <a href="<?php echo esc_url(home_url('/cookie-policy/')); ?>">Cookie Policy</a>.
        <?php endif; ?>
      </p>
    </div>
    <div class="an-cookie-actions">
      <button type="button" id="an-accept-all-cookies" class="an-btn-cookie-accept">
        <?php echo $is_ar ? 'قبول الكل' : 'Accept All'; ?>
      </button>
      <button type="button" id="an-reject-extra-cookies" class="an-btn-cookie-decl">
        <?php echo $is_ar ? 'الأساسية فقط' : 'Essential Only'; ?>
      </button>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  var banner = document.getElementById('apexnova-cookie-banner');
  var consent = localStorage.getItem('apexnova_cookie_consent');
  if (!consent && banner) {
    banner.style.display = 'block';
  }
  var acceptBtn = document.getElementById('an-accept-all-cookies');
  var rejectBtn = document.getElementById('an-reject-extra-cookies');
  if (acceptBtn) {
    acceptBtn.addEventListener('click', function() {
      localStorage.setItem('apexnova_cookie_consent', 'accepted');
      if (banner) banner.style.display = 'none';
    });
  }
  if (rejectBtn) {
    rejectBtn.addEventListener('click', function() {
      localStorage.setItem('apexnova_cookie_consent', 'essential');
      if (banner) banner.style.display = 'none';
    });
  }
});
</script>

<?php wp_footer(); ?>
</body>
</html>
