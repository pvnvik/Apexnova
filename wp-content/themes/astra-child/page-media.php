<?php
/**
 * Template Name: Media Page
 * Template for /media/ and /ar/media-ar/ - ApexNova Media & News Center
 * Bilingual (EN / AR RTL)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$uploads = wp_upload_dir();
$upload_url = $uploads['baseurl'] . '/extracted/';
$home_url = $is_ar ? home_url('/ar/home-ar/') : home_url('/');

$news_articles_en = array(
    array(
        'title' => 'ApexNova Successfully Hands Over Jet A-1 Hydrant Testing Manifold at International Airfield',
        'category' => 'Aviation & Fuel Systems',
        'date' => 'October 15, 2026',
        'image' => 'page_14_img_01.webp',
        'excerpt' => 'ApexNova’s aviation fuel division has completed the fabrication, installation, and rigorous testing of an apron fuel testing manifold for a major international airport project in Saudi Arabia, passing all ASTM and Civil Aviation cleanliness criteria.',
        'type' => 'Press Release & Technical Bulletin'
    ),
    array(
        'title' => 'Deploying Mobile High-Vacuum Transformer Oil Filtration Units Across Saudi Substation Network',
        'category' => 'Electrical & Power',
        'date' => 'September 28, 2026',
        'image' => 'page_46_img_02.webp',
        'excerpt' => 'To support grid stability and prevent costly asset replacements, ApexNova has deployed custom mobile oil regeneration trailers capable of on-site degassing, vacuum dehydration, and dielectric restoration exceeding 65kV.',
        'type' => 'Field Operations Report'
    ),
    array(
        'title' => 'Zero-Downtime Maintenance: Cold Cutting and Cryogenic Pipe Freezing in Hydrocarbon Facilities',
        'category' => 'Industrial Maintenance',
        'date' => 'August 19, 2026',
        'image' => 'page_33_img_02.webp',
        'excerpt' => 'ApexNova demonstrated its specialized pipeline intervention capability at a major petrochemical complex, successfully isolating and replacing isolation valves under pressure using cryogenic freeze jackets.',
        'type' => 'Engineering Milestone'
    )
);

$news_articles_ar = array(
    array(
        'title' => 'أيبكس نوفا تنجح في تسليم مشعب اختبار شبكة هيدرانت وقود Jet A-1 بمطار دولي',
        'category' => 'أنظمة وقود الطيران',
        'date' => '15 أكتوبر 2026',
        'image' => 'page_14_img_01.webp',
        'excerpt' => 'أنجز قطاع وقود الطيران بشركة أيبكس نوفا تصنيع وتركيب واختبار مشعب اختبار وقود ساحات الطائرات لمشروع مطار دولي كبرى بالمملكة، مجتازاً كافة معايير النظافة المعتمدة لدى ASTM وهيئة الطيران المدني.',
        'type' => 'بيان صحفي ونشرة فنية'
    ),
    array(
        'title' => 'تشغيل وحدات متنقلة لمعالجة وفلترة زيت المحولات عالية التفريغ بمحطات المملكة',
        'category' => 'الكهرباء والطاقة',
        'date' => '28 سبتمبر 2026',
        'image' => 'page_46_img_02.webp',
        'excerpt' => 'دعماً لاستقرار الشبكة الكهربائية وتفادياً لاستبدال الأصول المكلفة، جهزت أيبكس نوفا مقطورات متنقلة قادرة على إزالة الغازات والتجفيف بالتفريغ واستعادة العزل الكهربائي لما فوق 65 ك.ف ميدانياً.',
        'type' => 'تقرير العمليات الميدانية'
    ),
    array(
        'title' => 'صيانة بدون إيقاف تشغيل: القطع البارد وتجميد الأنابيب بالتبريد العميق بالمنشآت الهيدروكربونية',
        'category' => 'الصيانة الصناعية',
        'date' => '19 أغسطس 2026',
        'image' => 'page_33_img_02.webp',
        'excerpt' => 'أثبتت أيبكس نوفا قدراتها المتخصصة في التدخلات الحية لشبكات الأنابيب بمجمع بتروكيماويات رئيسي، حيث نجحت في عزل واستبدال صمامات العزل تحت الضغط باستخدام سترات التجميد النيتروجيني.',
        'type' => 'إنجاز هندسي وتقني'
    )
);

$news_articles = $is_ar ? $news_articles_ar : $news_articles_en;
?>

<?php if ($is_ar) : ?>
<div class="container" style="padding-top: 16px;">
  <div style="background: rgba(20, 153, 138, 0.08); border-right: 4px solid var(--an-teal); padding: 10px 18px; border-radius: 4px; font-size: 13.5px; color: var(--an-navy); margin-bottom: 12px; font-weight: 500;">
    <strong>[AR TRANSLATION PENDING - نص قيد المراجعة والاعتماد النهائي]</strong> المركز الإعلامي والأخبار لشركة أيبكس نوفا القابضة – المملكة العربية السعودية.
  </div>
</div>
<?php endif; ?>

<!-- Hero Banner -->
<section style="background: linear-gradient(135deg, var(--an-navy-dark) 0%, var(--an-navy) 100%); color: var(--an-white); padding: 70px 0 60px 0; border-bottom: 4px solid var(--an-teal);">
  <div class="container">
    <div style="font-size: 14px; color: var(--an-teal); font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 10px;">
      <a href="<?php echo esc_url($home_url); ?>" style="color: #CAD5E2;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a> &nbsp;/&nbsp; <?php echo $is_ar ? 'المركز الإعلامي' : 'Media Center'; ?>
    </div>
    <h1 style="color: var(--an-white); font-size: clamp(2.4rem, 4vw, 3.4rem); font-weight: 800; margin-bottom: 12px;">
      <?php echo $is_ar ? 'الأخبار والرؤى الهندسية' : 'News & Engineering Insights'; ?>
    </h1>
    <p style="font-size: 1.2rem; color: #E2E8F0; max-width: 820px; line-height: 1.6;">
      <?php if ($is_ar) : ?>
        تابع أحدث إنجازات المشاريع، والتقنيات الهندسية المعتمدة، وإعلانات السلامة لشركة أيبكس نوفا القابضة.
      <?php else : ?>
        Stay informed on project completions, technology deployments, and safety achievements from ApexNova Holding Company.
      <?php endif; ?>
    </p>
  </div>
</section>

<!-- News Articles Grid -->
<section style="padding: 80px 0; background: var(--an-grey);">
  <div class="container">
    <div class="an-project-grid">
      <?php foreach ($news_articles as $article) : ?>
        <article class="an-project-card" style="display: flex; flex-direction: column;">
          <div class="an-project-img" style="height: 220px;">
            <img src="<?php echo esc_url($upload_url . $article['image']); ?>" alt="<?php echo esc_attr($article['title']); ?>" loading="lazy">
            <span class="an-project-sector" style="background: var(--an-teal);"><?php echo esc_html($article['category']); ?></span>
          </div>
          <div class="an-project-body" style="display: flex; flex-direction: column; flex: 1;">
            <div class="an-project-meta">
              <span>📅 <?php echo esc_html($article['date']); ?></span>
            </div>
            <h3 class="an-project-title" style="font-size: 18px; margin-bottom: 12px;"><?php echo esc_html($article['title']); ?></h3>
            <p style="font-size: 14px; color: var(--an-ink-light); line-height: 1.6; margin-bottom: 18px; flex: 1;">
              <?php echo esc_html($article['excerpt']); ?>
            </p>
            <div style="border-top: 1px solid var(--an-border); padding-top: 12px; font-size: 13px; color: var(--an-navy); font-weight: 600;">
              <?php echo esc_html($article['type']); ?>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Newsletter Subscription Strip -->
<section style="background: var(--an-navy-dark); color: #fff; padding: 60px 0;">
  <div class="container">
    <div style="max-width: 680px; margin: 0 auto; text-align: center;">
      <h3 style="color: #fff; font-size: 22px; margin-bottom: 8px;">
        <?php echo $is_ar ? 'اشترك في النشرات الفنية لشركة أيبكس نوفا' : 'Subscribe to ApexNova Technical Bulletins'; ?>
      </h3>
      <p style="color: #CAD5E2; font-size: 14.5px; margin-bottom: 24px;">
        <?php if ($is_ar) : ?>
          احصل على أحدث الأوراق الفنية الربع سنوية وتحديثات مشاريع البنية التحتية السعودية مباشرة في بريدك الإلكتروني.
        <?php else : ?>
          Receive quarterly technical whitepapers, Saudi infrastructure updates, and industry insights directly to your inbox.
        <?php endif; ?>
      </p>
      <form style="display: flex; gap: 10px; justify-content: center; flex-wrap: wrap;" onsubmit="event.preventDefault(); alert('<?php echo $is_ar ? 'شكراً لاشتراككم في النشرات الفنية لشركة أيبكس نوفا.' : 'Thank you for subscribing to ApexNova technical bulletins.'; ?>');">
        <input type="email" required placeholder="<?php echo $is_ar ? 'أدخل بريدك الإلكتروني الرسمي' : 'Enter your corporate email'; ?>" style="padding: 12px 18px; border-radius: 4px; border: none; font-size: 14px; width: 340px; max-width: 100%;">
        <button type="submit" class="an-btn an-btn-primary" style="padding: 12px 24px;">
          <?php echo $is_ar ? 'اشتراك' : 'Subscribe'; ?>
        </button>
      </form>
    </div>
  </div>
</section>

<?php get_footer(); ?>
