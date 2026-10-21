<?php
/**
 * Template Name: Services Hub Page
 * Template for /services/ and /ar/services-ar/
 * Bilingual (EN / AR RTL)
 */

get_header();

require_once get_stylesheet_directory() . '/inc/services-data.php';
$services_data = apexnova_get_services_data();
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$home_url    = $is_ar ? home_url('/ar/home-ar/') : home_url('/');
$contact_url = $is_ar ? home_url('/ar/contact-us-ar/') : home_url('/contact-us/');

// Group services by category
$categories = array(
    ($is_ar ? '✈ أنظمة وقود الطيران وشبكات الهيدرانت' : 'Aviation & Fuel Systems') => array(
        'aviation-fuel-systems',
        'pipeline-coating',
        'cathodic-protection',
        'efso-system',
        'scada-automation',
        'leak-detection',
        'jet-a1-testing-commissioning',
        'fuel-bowsers-tankers'
    ),
    ($is_ar ? '⚙ الحلول الميكانيكية والصناعية' : 'Mechanical & Industrial') => array(
        'mechanical-industrial-solutions',
        'hot-tapping-cold-cutting',
        'horizontal-directional-drilling'
    ),
    ($is_ar ? '🏢 الخدمات الكهروميكانيكية للمباني (MEP)' : 'Building Services (MEP)') => array(
        'fire-fighting-systems',
        'plumbing-services',
        'hvac-technical-services'
    ),
    ($is_ar ? '⚡ شبكات الكهرباء ومحطات الطاقة' : 'Electrical & Power') => array(
        'transformer-testing-commissioning',
        'electrical-services',
        'fiber-optic-telecommunication',
        'solar-renewable-energy'
    ),
    ($is_ar ? '🏗 الأعمال المدنية والإنشائية' : 'Civil & Construction') => array(
        'civil-structural-works'
    )
);
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> دليل الخدمات والقدرات الهندسية لشركة أيبكس نوفا القابضة – المملكة العربية السعودية.
  </div>
</div>
<?php endif; ?>

<!-- Services Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-teal);">
  <div class="container">
    <div style="font-size: 14px; color: var(--an-teal); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; <?php echo $is_ar ? 'خدماتنا' : 'What We Do'; ?>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 800; margin-bottom: 12px;">
      <?php echo $is_ar ? 'خدماتنا وقدراتنا الهندسية المتكاملة' : 'Our Engineered Services & Capabilities'; ?>
    </h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 820px; line-height: 1.6;">
      <?php if ($is_ar) : ?>
        حلول متخصصة في المقاولات الكهروميكانيكية، وأنظمة وقود الطيران، واختبارات الجهد العالي، والأعمال الإنشائية عبر المملكة العربية السعودية.
      <?php else : ?>
        Specialized electro-mechanical, aviation fuel, high-voltage testing, and civil engineering infrastructure solutions delivered across the Kingdom of Saudi Arabia.
      <?php endif; ?>
    </p>
  </div>
</section>

<!-- Services by Category -->
<section style="padding: 80px 0; background: var(--an-white);">
  <div class="container">
    <?php foreach ($categories as $cat_title => $slugs) : ?>
      <div style="margin-bottom: 70px;">
        <div style="margin-bottom: 30px;">
          <span class="an-split-badge"><?php echo esc_html($cat_title); ?></span>
          <div class="an-accent-line"></div>
          <h2 style="font-size: 28px;"><?php echo esc_html($cat_title); ?></h2>
        </div>

        <div class="an-service-grid">
          <?php foreach ($slugs as $slug) : 
            if (!isset($services_data[$slug])) continue;
            $s = $services_data[$slug];
          ?>
            <article class="an-service-card">
              <div class="an-service-card-img">
                <img src="<?php echo esc_url($upload_url . $s['hero_img']); ?>" alt="<?php echo esc_attr($s['title']); ?>" loading="lazy">
              </div>
              <div class="an-service-card-body">
                <h3 class="an-service-card-title"><?php echo esc_html($s['title']); ?></h3>
                <p class="an-service-card-text"><?php echo esc_html($s['tagline']); ?></p>
                <div style="margin-top: auto;">
                  <a href="<?php echo esc_url(home_url('/services/' . $slug . '/')); ?>" class="an-service-card-link">
                    <?php echo $is_ar ? 'استعراض تفاصيل الخدمة ←' : 'Explore Division Details →'; ?>
                  </a>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA Band -->
<section class="an-cta-band">
  <div class="container">
    <h2>
      <?php echo $is_ar ? 'هل تحتاج إلى تنفيذ هندسي متعدد التخصصات في موقعكم؟' : 'Need Multi-Disciplinary Engineering for Your Site?'; ?>
    </h2>
    <p>
      <?php if ($is_ar) : ?>
        نجمع بين قدرات الهندسة الكهربائية والميكانيكية وأنظمة الوقود والأعمال المدنية تحت مظلة إدارة تنفيذية موحدة وموثوقة.
      <?php else : ?>
        We combine electrical, mechanical, fuel, and civil capabilities under single-source project accountability.
      <?php endif; ?>
    </p>
    <a href="<?php echo esc_url($contact_url); ?>" class="an-btn an-btn-primary" style="background: var(--an-white); color: var(--an-navy) !important; font-weight: 700;">
      <?php echo $is_ar ? 'طلب استشارة ومقترح فني ←' : 'Request a Proposal from Our Engineering Team →'; ?>
    </a>
  </div>
</section>

<?php get_footer(); ?>
