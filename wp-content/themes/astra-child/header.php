<?php
/**
 * Header template for ApexNova Child Theme
 * Bilingual (EN / AR RTL)
 */
$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();

$home_url     = $is_ar ? home_url('/ar/home-ar/') : home_url('/');
$about_url    = $is_ar ? home_url('/ar/about-us-ar/') : home_url('/about-us/');
$services_url = $is_ar ? home_url('/ar/services-ar/') : home_url('/services/');
$training_url = $is_ar ? home_url('/ar/training-ar/') : home_url('/training/');
$safety_url   = $is_ar ? home_url('/ar/safety-ar/') : home_url('/safety/');
$projects_url = $is_ar ? home_url('/ar/projects-ar/') : home_url('/projects/');
$clients_url  = $is_ar ? home_url('/ar/clients-ar/') : home_url('/clients/');
$media_url    = $is_ar ? home_url('/ar/media-ar/') : home_url('/media/');
$careers_url  = $is_ar ? home_url('/ar/careers-ar/') : home_url('/careers/');
$contact_url  = $is_ar ? home_url('/ar/contact-us-ar/') : home_url('/contact-us/');

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">
  
  <!-- Favicon & Touch Icons -->
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-192.png">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon-192.png">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Accessible Skip-to-Content Link -->
<a class="skip-link screen-reader-text" href="#main-content">
  <?php echo $is_ar ? 'انتقل إلى المحتوى الرئيسي' : 'Skip to main content'; ?>
</a>

<header id="masthead" class="site-header" role="banner">
  <!-- Utility Bar -->
  <div class="an-topbar">
    <div class="container">
      <div class="an-topbar-left">
        <?php if ($is_ar) : ?>
          <span>📍 المملكة العربية السعودية، الرياض، حي الملز، شارع جرير</span>
          <a href="mailto:info@apexnova.com.sa" aria-label="البريد الإلكتروني">✉ info@apexnova.com.sa</a>
          <a href="tel:+966110000000" dir="ltr" aria-label="رقم الهاتف">📞 +966 11 000 0000</a>
        <?php else : ?>
          <span>📍 Al-Malaz, Jareer Street, Riyadh, KSA</span>
          <a href="mailto:info@apexnova.com.sa" aria-label="Corporate Email">✉ info@apexnova.com.sa</a>
          <a href="tel:+966110000000" aria-label="Telephone">📞 +966 11 000 0000</a>
        <?php endif; ?>
      </div>
      <div class="an-topbar-right">
        <div class="an-lang-switch">
          <?php if (function_exists('pll_the_languages')) : ?>
            <?php pll_the_languages(array('show_flags' => 0, 'show_names' => 1, 'display_names_as' => 'name')); ?>
          <?php else : ?>
            <a href="<?php echo home_url('/'); ?>" class="<?php echo !$is_ar ? 'active' : ''; ?>">English</a> | 
            <a href="<?php echo home_url('/ar/home-ar/'); ?>" class="<?php echo $is_ar ? 'active' : ''; ?>">عربي</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Navigation -->
  <div class="an-header">
    <div class="an-header-inner">
      <a href="<?php echo esc_url($home_url); ?>" class="an-brand-logo" rel="home" aria-label="<?php bloginfo('name'); ?>">
        <div style="display: flex; align-items: center; gap: 12px;">
          <img src="<?php echo home_url('/wp-content/uploads/extracted/page_01_img_01.webp'); ?>" 
               alt="ApexNova Logo" 
               width="42" 
               height="42" 
               style="height: 42px; width: auto; object-fit: contain;" 
               loading="eager" 
               decoding="async">
          <div class="an-brand-text">
            <span class="an-brand-title">ApexNova</span>
            <span class="an-brand-sub"><?php echo $is_ar ? 'شركة أوج النجم القابضة' : 'Holding Company'; ?></span>
          </div>
        </div>
      </a>

      <!-- Desktop & Mobile Navigation Menu -->
      <nav id="site-navigation" class="an-navigation" role="navigation" aria-label="<?php echo $is_ar ? 'القائمة الرئيسية' : 'Primary Navigation'; ?>">
        <button class="an-menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php echo $is_ar ? 'فتح القائمة الرئيسية' : 'Open Navigation Menu'; ?>">☰</button>
        <ul id="primary-menu" class="an-nav-menu">
          <!-- 1. Who We Are -->
          <li class="an-nav-item an-nav-item-rel">
            <a href="<?php echo esc_url($about_url); ?>" class="an-nav-link">
              <?php echo $is_ar ? 'من نحن' : 'Who We Are'; ?> <span class="an-arrow">▾</span>
            </a>
            <ul class="an-dropdown">
              <?php if ($is_ar) : ?>
                <li><a href="<?php echo esc_url($about_url); ?>">عن أيبكس نوفا</a></li>
                <li><a href="<?php echo esc_url($about_url . '#history'); ?>">تاريخنا (منذ 1997)</a></li>
                <li><a href="<?php echo esc_url($about_url . '#leadership'); ?>">القيادة التنفيذية</a></li>
                <li><a href="<?php echo esc_url($about_url . '#principles'); ?>">قيمنا ومبادئنا</a></li>
                <li><a href="<?php echo esc_url($about_url . '#certifications'); ?>">الجودة والاعتمادات</a></li>
              <?php else : ?>
                <li><a href="<?php echo esc_url($about_url); ?>">About ApexNova</a></li>
                <li><a href="<?php echo esc_url($about_url . '#history'); ?>">Our History (Since 1997)</a></li>
                <li><a href="<?php echo esc_url($about_url . '#leadership'); ?>">Leadership</a></li>
                <li><a href="<?php echo esc_url($about_url . '#principles'); ?>">Our Principles</a></li>
                <li><a href="<?php echo esc_url($about_url . '#certifications'); ?>">Quality & Certifications</a></li>
              <?php endif; ?>
            </ul>
          </li>

          <!-- 2. What We Do (Mega Menu) -->
          <li class="an-nav-item">
            <a href="<?php echo esc_url($services_url); ?>" class="an-nav-link">
              <?php echo $is_ar ? 'خدماتنا' : 'What We Do'; ?> <span class="an-arrow">▾</span>
            </a>
            <div class="an-mega-dropdown">
              <div class="an-mega-container">
                <!-- Group 1: Aviation & Fuel Systems -->
                <div class="an-mega-col">
                  <h4><?php echo $is_ar ? '✈ وقود الطيران' : '✈ Aviation & Fuel'; ?></h4>
                  <ul>
                    <li><a href="<?php echo esc_url(home_url('/services/aviation-fuel-systems/')); ?>"><?php echo $is_ar ? 'أنظمة وقود الطيران' : 'Aviation Fuel Systems'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/pipeline-coating/')); ?>"><?php echo $is_ar ? 'طلاء خطوط الأنابيب (3LPE)' : 'Pipeline Coating (3LPE / Epoxy)'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/cathodic-protection/')); ?>"><?php echo $is_ar ? 'الحماية الكاثودية (CP)' : 'Cathodic Protection (CP)'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/efso-system/')); ?>"><?php echo $is_ar ? 'نظام الإغلاق الطارئ (EFSO)' : 'Emergency Shut-Off (EFSO)'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/scada-automation/')); ?>"><?php echo $is_ar ? 'أنظمة سكادا والتحكم' : 'SCADA & Control Systems'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/leak-detection/')); ?>"><?php echo $is_ar ? 'كشف تسربات الأنابيب' : 'Pipeline Leak Detection'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/jet-a1-testing-commissioning/')); ?>"><?php echo $is_ar ? 'تشغيل خطوط Jet A-1' : 'Jet A-1 Commissioning'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/fuel-bowsers-tankers/')); ?>"><?php echo $is_ar ? 'تصنيع صهاريج الوقود' : 'Bowsers & Tankers Mfg'; ?></a></li>
                  </ul>
                </div>

                <!-- Group 2: Mechanical & Industrial -->
                <div class="an-mega-col">
                  <h4><?php echo $is_ar ? '⚙ الحلول الميكانيكية' : '⚙ Mechanical & Industrial'; ?></h4>
                  <ul>
                    <li><a href="<?php echo esc_url(home_url('/services/mechanical-industrial-solutions/')); ?>"><?php echo $is_ar ? 'الحلول الميكانيكية والصناعية' : 'Mechanical Solutions'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/hot-tapping-cold-cutting/')); ?>"><?php echo $is_ar ? 'التفريغ الحي والقطع وتجميد الأنابيب' : 'Hot Tapping & Pipe Freezing'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/horizontal-directional-drilling/')); ?>"><?php echo $is_ar ? 'الحفر الأفقي الموجه (HDD)' : 'HDD & Trenchless Drilling'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/mechanical-industrial-solutions/#piping')); ?>"><?php echo $is_ar ? 'الأنابيب والهياكل الحديدية' : 'Piping & Steel Structures'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/mechanical-industrial-solutions/#pressure-vessels')); ?>"><?php echo $is_ar ? 'أوعية الضغط والخزانات' : 'Pressure Vessels & Tanks'; ?></a></li>
                  </ul>
                </div>

                <!-- Group 3: Building Services (MEP) -->
                <div class="an-mega-col">
                  <h4><?php echo $is_ar ? '🏢 الكهروميكانيكية (MEP)' : '🏢 MEP Services'; ?></h4>
                  <ul>
                    <li><a href="<?php echo esc_url(home_url('/services/hvac-technical-services/')); ?>"><?php echo $is_ar ? 'خدمات التكييف والتهوية (HVAC)' : 'HVAC Technical Services'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/plumbing-services/')); ?>"><?php echo $is_ar ? 'مقاولات السباكة والصرف' : 'Plumbing Contracting'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/fire-fighting-systems/')); ?>"><?php echo $is_ar ? 'أنظمة مكافحة الحريق والإنذار' : 'Fire Fighting & FADS'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/fire-fighting-systems/#sprinklers')); ?>"><?php echo $is_ar ? 'شبكات الرشاشات ومآخذ الإطفاء' : 'Sprinkler & Hydrant Systems'; ?></a></li>
                  </ul>
                </div>

                <!-- Group 4: Electrical & Power -->
                <div class="an-mega-col">
                  <h4><?php echo $is_ar ? '⚡ الكهرباء والطاقة' : '⚡ Electrical & Power'; ?></h4>
                  <ul>
                    <li><a href="<?php echo esc_url(home_url('/services/electrical-services/')); ?>"><?php echo $is_ar ? 'توزيع الطاقة والشبكات الكهربائية' : 'Electrical Power Distribution'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/transformer-testing-commissioning/')); ?>"><?php echo $is_ar ? 'اختبار وتشغيل المحولات' : 'Transformer Commissioning'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/transformer-testing-commissioning/#oil-filtration')); ?>"><?php echo $is_ar ? 'معالجة وفلترة زيت المحولات' : 'Transformer Oil Filtration'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/fiber-optic-telecommunication/')); ?>"><?php echo $is_ar ? 'الألياف البصرية والاتصالات' : 'Fiber Optic & Telecom'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/solar-renewable-energy/')); ?>"><?php echo $is_ar ? 'الطاقة الشمسية والمتجددة' : 'Solar & Renewable Energy'; ?></a></li>
                  </ul>
                </div>

                <!-- Group 5: Civil & Structural -->
                <div class="an-mega-col">
                  <h4><?php echo $is_ar ? '🏗 الأعمال المدنية' : '🏗 Civil & Structural'; ?></h4>
                  <ul>
                    <li><a href="<?php echo esc_url(home_url('/services/civil-structural-works/')); ?>"><?php echo $is_ar ? 'الأعمال المدنية والإنشائية' : 'Civil & Structural Works'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/civil-structural-works/#commercial')); ?>"><?php echo $is_ar ? 'المشاريع التجارية' : 'Commercial Projects'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/civil-structural-works/#hospitality')); ?>"><?php echo $is_ar ? 'فنادق ومنشآت الضيافة' : 'Five-Star Hospitality'; ?></a></li>
                    <li><a href="<?php echo esc_url(home_url('/services/civil-structural-works/#industrial')); ?>"><?php echo $is_ar ? 'المستودعات والمباني الصناعية' : 'Industrial & Warehousing'; ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>

          <!-- 3. Training -->
          <li class="an-nav-item an-nav-item-rel">
            <a href="<?php echo esc_url($training_url); ?>" class="an-nav-link">
              <?php echo $is_ar ? 'التدريب' : 'Training'; ?> <span class="an-arrow">▾</span>
            </a>
            <ul class="an-dropdown">
              <?php if ($is_ar) : ?>
                <li><a href="<?php echo esc_url($training_url); ?>">مركز أيبكس نوفا للتدريب</a></li>
                <li><a href="<?php echo esc_url($training_url . '#courses'); ?>">دورات السلامة والصحة المهنية (HSE)</a></li>
                <li><a href="<?php echo esc_url($training_url . '#certifications'); ?>">اعتمادات OSHA و IOSH و NEBOSH</a></li>
                <li><a href="<?php echo esc_url($training_url . '#iso'); ?>">استشارات أنظمة الجودة والآيزو</a></li>
              <?php else : ?>
                <li><a href="<?php echo esc_url($training_url); ?>">ApexNova Training Center</a></li>
                <li><a href="<?php echo esc_url($training_url . '#courses'); ?>">HSE & Safety Courses</a></li>
                <li><a href="<?php echo esc_url($training_url . '#certifications'); ?>">OSHA, IOSH & NEBOSH</a></li>
                <li><a href="<?php echo esc_url($training_url . '#iso'); ?>">ISO Consultation</a></li>
              <?php endif; ?>
            </ul>
          </li>

          <!-- 4. Safety (HSSE) -->
          <li class="an-nav-item an-nav-item-rel">
            <a href="<?php echo esc_url($safety_url); ?>" class="an-nav-link">
              <?php echo $is_ar ? 'السلامة (HSSE)' : 'Safety (HSSE)'; ?> <span class="an-arrow">▾</span>
            </a>
            <ul class="an-dropdown">
              <?php if ($is_ar) : ?>
                <li><a href="<?php echo esc_url($safety_url); ?>">سياسة السلامة في أيبكس نوفا</a></li>
                <li><a href="<?php echo esc_url($safety_url . '#electrical-precautions'); ?>">قائمة السلامة الكهربائية (15 بنداً)</a></li>
                <li><a href="<?php echo esc_url($safety_url . '#toolbox-talks'); ?>">اجتماعات السلامة اليومية (Toolbox)</a></li>
              <?php else : ?>
                <li><a href="<?php echo esc_url($safety_url); ?>">ApexNova Safety Policy</a></li>
                <li><a href="<?php echo esc_url($safety_url . '#electrical-precautions'); ?>">Electrical Safety Checklist</a></li>
                <li><a href="<?php echo esc_url($safety_url . '#toolbox-talks'); ?>">Daily Toolbox Meetings</a></li>
              <?php endif; ?>
            </ul>
          </li>

          <!-- 5. Projects -->
          <li class="an-nav-item">
            <a href="<?php echo esc_url($projects_url); ?>" class="an-nav-link"><?php echo $is_ar ? 'المشاريع' : 'Projects'; ?></a>
          </li>

          <!-- 6. Clients -->
          <li class="an-nav-item">
            <a href="<?php echo esc_url($clients_url); ?>" class="an-nav-link"><?php echo $is_ar ? 'العملاء' : 'Clients'; ?></a>
          </li>

          <!-- 7. Media -->
          <li class="an-nav-item">
            <a href="<?php echo esc_url($media_url); ?>" class="an-nav-link"><?php echo $is_ar ? 'المركز الإعلامي' : 'Media'; ?></a>
          </li>

          <!-- 8. Careers -->
          <li class="an-nav-item">
            <a href="<?php echo esc_url($careers_url); ?>" class="an-nav-link"><?php echo $is_ar ? 'الوظائف' : 'Careers'; ?></a>
          </li>

          <!-- 9. Contact Us CTA Button -->
          <li class="an-nav-item">
            <a href="<?php echo esc_url($contact_url); ?>" class="an-btn an-btn-primary">
              <?php echo $is_ar ? 'اتصل بنا' : 'Contact Us'; ?>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<main id="primary" class="site-main">
