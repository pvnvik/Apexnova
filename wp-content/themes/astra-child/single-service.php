<?php
/**
 * Single Service Template - ApexNova Child Theme
 * Conforms to Brief Section 6.3:
 * page hero -> intro -> alternating sub-service blocks -> photo gallery -> standards chips -> related services -> RFQ CTA
 * Bilingual (EN / AR RTL)
 */

get_header();

require_once get_stylesheet_directory() . '/inc/services-data.php';
$services_data = apexnova_get_services_data();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$home_url     = $is_ar ? home_url('/ar/home-ar/') : home_url('/');
$services_url = $is_ar ? home_url('/ar/services-ar/') : home_url('/services/');
$contact_url  = $is_ar ? home_url('/ar/contact-us-ar/') : home_url('/contact-us/');

// Detect current slug
$current_slug = get_post_field('post_name', get_the_ID());
if (!isset($services_data[$current_slug])) {
    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    $parts = explode('/', $path);
    $slug_candidate = end($parts);
    if (isset($services_data[$slug_candidate])) {
        $current_slug = $slug_candidate;
    } else {
        $current_slug = 'aviation-fuel-systems';
    }
}

$s = $services_data[$current_slug];
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> التفاصيل الهندسية والقدرات التشغيلية لخدمة <?php echo esc_html($s['title']); ?> – شركة أيبكس نوفا القابضة.
  </div>
</div>
<?php endif; ?>

<!-- 1. Page Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-teal); position: relative; overflow: hidden;">
  <div style="position: absolute; inset: 0; background: url('<?php echo esc_url($upload_url . $s['hero_img']); ?>') center/cover no-repeat; opacity: 0.18; filter: grayscale(50%);"></div>
  <div class="container" style="position: relative; z-index: 2;">
    <div style="font-size: 13.5px; color: var(--an-teal); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; 
      <a href="<?php echo esc_url($services_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'خدماتنا' : 'Services'; ?></a> &nbsp;/&nbsp; 
      <span><?php echo esc_html($s['category']); ?></span>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.2rem, 3.8vw, 3.2rem); font-weight: 800; margin-bottom: 12px;"><?php echo esc_html($s['title']); ?></h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 820px; line-height: 1.6; margin: 0;">
      <?php echo esc_html($s['tagline']); ?>
    </p>
  </div>
</section>

<!-- 2. Intro Section -->
<section style="padding: 70px 0 40px 0; background: var(--an-white);">
  <div class="container">
    <div style="max-width: 900px; margin: 0 auto; text-align: center;">
      <span class="an-split-badge"><?php echo $is_ar ? 'نظرة عامة على الخدمة' : 'Division Overview'; ?></span>
      <div class="an-accent-line"></div>
      <p style="font-size: 1.25rem; color: var(--an-ink); line-height: 1.75; font-weight: 500;">
        <?php echo esc_html($s['intro']); ?>
      </p>
    </div>
  </div>
</section>

<!-- 3. Sub-Service Blocks (Alternating Layout) -->
<section style="padding: 30px 0 70px 0; background: var(--an-white);">
  <div class="container">
    <div style="display: flex; flex-direction: column; gap: 70px;">
      <?php foreach ($s['sections'] as $idx => $sec) : 
        $is_even = ($idx % 2 === 1);
      ?>
        <div class="an-split-grid <?php echo $is_even ? 'reverse' : ''; ?>" style="align-items: center;">
          <div class="an-split-content">
            <span class="an-split-badge" style="color: var(--an-teal);">
              <?php echo $is_ar ? 'القدرة التشغيلية ' . sprintf('%02d', $idx + 1) : 'Capability ' . sprintf('%02d', $idx + 1); ?>
            </span>
            <h2 style="font-size: 26px; margin-bottom: 14px; color: var(--an-navy);"><?php echo esc_html($sec['title']); ?></h2>
            <p style="font-size: 15.5px; color: var(--an-ink-light); line-height: 1.75; margin-bottom: 20px;">
              <?php echo esc_html($sec['text']); ?>
            </p>
            <?php if (!empty($sec['bullets'])) : ?>
              <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 8px;">
                <?php foreach ($sec['bullets'] as $bullet) : ?>
                  <li style="display: flex; gap: 10px; align-items: flex-start; font-size: 14.5px; color: var(--an-ink);">
                    <span style="color: var(--an-teal); font-weight: 800;">✓</span>
                    <span><?php echo esc_html($bullet); ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>
          <div class="an-split-image">
            <img src="<?php echo esc_url($upload_url . $sec['image']); ?>" alt="<?php echo esc_attr($sec['title']); ?>" loading="lazy">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Specific Section: 9-Step Process Timeline for Transformer Testing -->
<?php if (!empty($s['timeline_steps'])) : ?>
<section style="background: var(--an-grey); padding: 80px 0;">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'منهجية العمل والتشغيل' : 'Systematic Methodology'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? '9 خطوات منهجية لاختبار وتشغيل المحولات الكهربائية' : '9-Step Transformer Commissioning & Testing Process'; ?></h2>
      <p><?php echo $is_ar ? 'بروتوكول قياسي معتمد يضمن السلامة الكهربائية وجودة عزل المحول ومطابقة المواصفات قبل إطلاق الجهد الكهربائي.' : 'Our standardized protocol ensures electrical integrity, verified insulation condition, and full regulatory compliance before energization.'; ?></p>
    </div>

    <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 24px;">
      <?php foreach ($s['timeline_steps'] as $step) : ?>
        <div style="background: #fff; border: 1px solid var(--an-border); border-radius: var(--an-radius-md); padding: 24px; display: flex; gap: 20px; align-items: flex-start; box-shadow: var(--an-shadow-sm);">
          <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--an-teal); color: #fff; font-weight: 800; display: flex; align-items: center; justify-content: center; font-size: 18px; flex-shrink: 0;">
            <?php echo esc_html($step['num']); ?>
          </div>
          <div>
            <h3 style="font-size: 18px; color: var(--an-navy); margin-bottom: 6px;"><?php echo esc_html($step['title']); ?></h3>
            <p style="margin: 0; font-size: 14.5px; color: var(--an-ink-light); line-height: 1.6;"><?php echo esc_html($step['desc']); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 4. Photo Gallery (Lightbox-ready) -->
<?php if (!empty($s['gallery'])) : ?>
<section style="background: <?php echo empty($s['timeline_steps']) ? 'var(--an-grey)' : 'var(--an-white)'; ?>; padding: 80px 0;">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'معرض الأعمال الميدانية' : 'Field Gallery'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'صور توثيقية من مواقع المشاريع والعمليات' : 'Project & Operational Visuals'; ?></h2>
      <p><?php echo $is_ar ? 'توثيق فوتوغرافي للعمليات الميدانية الحقيقية والمعدات المعتمدة ونتائج الفحص.' : 'Photographic evidence of real field operations, certified equipment, and technical inspections.'; ?></p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
      <?php foreach ($s['gallery'] as $item) : ?>
        <div style="background: #fff; border-radius: var(--an-radius-md); overflow: hidden; box-shadow: var(--an-shadow-sm); border: 1px solid var(--an-border);">
          <div style="height: 220px; overflow: hidden;">
            <img src="<?php echo esc_url($upload_url . $item['img']); ?>" alt="<?php echo esc_attr($item['caption']); ?>" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s ease;" loading="lazy">
          </div>
          <div style="padding: 14px 18px; font-size: 13.5px; color: var(--an-navy); font-weight: 600;">
            <?php echo esc_html($item['caption']); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 5. Standards & Compliance Chips -->
<section style="background: var(--an-navy-dark); color: #fff; padding: 60px 0;">
  <div class="container" style="text-align: center;">
    <span class="an-split-badge" style="color: var(--an-teal);"><?php echo $is_ar ? 'ضمان الامتثال والجودة' : 'Compliance Assurance'; ?></span>
    <h2 style="color: #fff; font-size: 24px; margin-bottom: 24px;">
      <?php echo $is_ar ? 'تنفيذ هندسي في التزام صارم بالمعايير' : 'Engineered in Strict Adherence to Standards'; ?>
    </h2>
    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 14px; max-width: 860px; margin: 0 auto;">
      <?php foreach ($s['standards'] as $std) : ?>
        <div style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); padding: 8px 18px; border-radius: 24px; font-size: 14px; font-weight: 600; color: #fff; display: flex; align-items: center; gap: 8px;">
          <span style="color: var(--an-teal);">✓</span> <?php echo esc_html($std); ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- 6. Related Services -->
<?php if (!empty($s['related'])) : ?>
<section style="padding: 80px 0; background: var(--an-grey);">
  <div class="container">
    <div class="an-section-header">
      <span class="an-split-badge"><?php echo $is_ar ? 'القدرات المتكاملة' : 'Integrated Capabilities'; ?></span>
      <div class="an-accent-line"></div>
      <h2><?php echo $is_ar ? 'خدمات هندسية ذات صلة' : 'Related Service Divisions'; ?></h2>
      <p><?php echo $is_ar ? 'تخصصات هندسية مكملة يتم دمجها دورياً في عقود المقاولات الكبرى وتسليم المفتاح.' : 'Complementary engineering disciplines frequently combined on major turnkey contracts.'; ?></p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 28px;">
      <?php foreach ($s['related'] as $rel_slug) : 
        if (!isset($services_data[$rel_slug])) continue;
        $rel = $services_data[$rel_slug];
      ?>
        <article class="an-service-card" style="background: #fff;">
          <div class="an-service-card-img">
            <img src="<?php echo esc_url($upload_url . $rel['hero_img']); ?>" alt="<?php echo esc_attr($rel['title']); ?>" loading="lazy">
          </div>
          <div class="an-service-card-body">
            <h3 class="an-service-card-title"><?php echo esc_html($rel['title']); ?></h3>
            <p class="an-service-card-text"><?php echo esc_html($rel['tagline']); ?></p>
            <a href="<?php echo esc_url(home_url('/services/' . $rel_slug . '/')); ?>" class="an-service-card-link">
              <?php echo $is_ar ? 'عرض تفاصيل الخدمة ←' : 'View Service Details →'; ?>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- 7. RFQ CTA Band -->
<section class="an-cta-band">
  <div class="container">
    <h2>
      <?php echo $is_ar ? 'طلب مقترح فني وعرض أسعار لخدمة ' . esc_html($s['title']) : 'Request a Technical Proposal for ' . esc_html($s['title']); ?>
    </h2>
    <p>
      <?php if ($is_ar) : ?>
        فريقنا الهندسي في الرياض على أتم الاستعداد لدراسة متطلبات مشروعكم وتقديم التقديرات الفنية أو إجراء المعاينات الميدانية.
      <?php else : ?>
        Our engineering managers are available to review project requirements, provide BOQ estimates, or conduct site audits.
      <?php endif; ?>
    </p>
    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
      <a href="<?php echo esc_url($contact_url); ?>" class="an-btn an-btn-primary" style="background: var(--an-white); color: var(--an-navy) !important; font-weight: 700;">
        <?php echo $is_ar ? 'طلب عرض أسعار لهذه الخدمة ←' : 'Request a Proposal for This Service →'; ?>
      </a>
      <a href="https://wa.me/966110000000" target="_blank" rel="noopener noreferrer" class="an-btn an-btn-outline">
        <?php echo $is_ar ? 'محادثة مع المهندس المختص' : 'Chat with a Technical Specialist'; ?>
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
