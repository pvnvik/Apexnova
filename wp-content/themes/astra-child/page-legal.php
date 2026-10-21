<?php
/**
 * Template Name: Legal Policy Template
 * Used for Privacy Policy, Terms of Use, Cookie Policy (Bilingual EN / AR)
 */

get_header();

$is_ar = (function_exists('pll_current_language') && pll_current_language() === 'ar') || is_rtl();
$post_slug = get_post_field('post_name', get_post());
$clean_slug = str_replace('-ar', '', $post_slug);

// Translation links
$privacy_url = $is_ar ? home_url('/privacy-policy-ar/') : home_url('/privacy-policy/');
$terms_url   = $is_ar ? home_url('/terms-of-use-ar/') : home_url('/terms-of-use/');
$cookie_url  = $is_ar ? home_url('/cookie-policy-ar/') : home_url('/cookie-policy/');

// Fallback content if post_content is empty
$title = get_the_title();
$content = get_the_content();

if (empty(trim($content))) {
    if ($clean_slug === 'privacy-policy') {
        if ($is_ar) {
            $content = '
            <h2>1. النطاق والالتزام بنظام حماية البيانات الشخصية السعودي (PDPL)</h2>
            <p>تلتزم شركة أوج النجم القابضة ("الشركة"، "نحن") بحماية خصوصية وأمن البيانات الشخصية لعملائها، ومقاوليها، ومورديها، وزوار موقعها الإلكتروني، وذلك وفقاً لأحكام نظام حماية البيانات الشخصية الصادر بالمرسوم الملكي رقم (م/19) وتعديلاته بالمرسوم الملكي رقم (م/148) ولوائحه التنفيذية الصادرة عن الهيئة السعودية للبيانات والذكاء الاصطناعي (سدايا).</p>

            <h2>2. البيانات التي نقوم بجمعها</h2>
            <p>نقوم بجمع البيانات الشخصية والمهنية اللازمة لأغراض تقديم الخدمات الهندسية والكهروميكانيكية والتعاقدية، وتشمل:</p>
            <ul>
                <li><strong>بيانات الهوية والتواصل:</strong> الاسم الكامل، المسمى الوظيفي، اسم الشركة أو الجهة، البريد الإلكتروني المهني، رقم الهاتف، والمدينة.</li>
                <li><strong>بيانات طلبات العروض والمناقصات:</strong> تفاصيل المشاريع الهندسية، المخططات، نطاق العمل، والمراسلات الفنية.</li>
                <li><strong>بيانات التوظيف:</strong> السيرة الذاتية، الخبرات المهنية، والشهادات الأكاديمية والفنية عند التقديم عبر بوابة التوظيف.</li>
                <li><strong>بيانات التصفح الفنية:</strong> عنوان بروتوكول الإنترنت (IP)، نوع المتصفح، ومعلومات الجلسة عبر ملفات تعريف الارتباط الأساسية.</li>
            </ul>

            <h2>3. الأساس النظامي وأغراض المعالجة</h2>
            <p>تتم معالجة بياناتك وفقاً للأسس النظامية المعتمدة نظاماً، وللأغراض التالية:</p>
            <ul>
                <li>تنفيذ العقود ومذكرات التفاهم ودراسة طلبات عروض الأسعار (RFQs).</li>
                <li>التحقق من المؤهلات وتصاريح الدخول للمواقع الإنشائية والصناعية ومنشآت أرامكو السعودية وهيئة الطيران المدني.</li>
                <li>الرد على الاستفسارات الفنية وخدمة العملاء.</li>
                <li>الامتثال للأنظمة واللوائح والتعليمات الحكومية السارية في المملكة العربية السعودية.</li>
            </ul>

            <h2>4. حماية ومشاركة البيانات</h2>
            <p>نطبق أعلى المعايير الفنية والتنظيمية والأمنية لحماية بياناتك من الوصول غير المصرح به أو التغيير أو الإفصاح أو الإتلاف. لا نقوم ببيع أو تأجير بياناتك لأي طرف ثالث، ولا تتم مشاركة بياناتك إلا مع الجهات الحكومية والتنظيمية المصرح لها نظاماً أو المقاولين المعتمدين الخاضعين لاتفاقيات سرية صارمة.</p>

            <h2>5. حقوق صاحب البيانات الشخصية</h2>
            <p>بموجب نظام حماية البيانات الشخصية السعودي، يحق لك ممارسة الحقوق التالية:</p>
            <ul>
                <li><strong>حق العلم:</strong> معرفة الأساس النظامي والغرض من جمع بياناتك.</li>
                <li><strong>حق الوصول:</strong> طلب نسخة من بياناتك الشخصية المتاحة لدينا.</li>
                <li><strong>حق التصحيح والإتلاف:</strong> طلب تحديث بياناتك غير الدقيقة أو إتلاف البيانات بعد انتهاء الغرض منها.</li>
            </ul>

            <h2>6. التواصل مع مسؤول حماية البيانات</h2>
            <p>لأي استفسار أو لممارسة حقوقك النظامية، يُرجى التواصل مع فريق الخصوصية لدينا عبر:</p>
            <p><strong>البريد الإلكتروني:</strong> privacy@apexnova.com.sa<br>
            <strong>العنوان:</strong> شركة أوج النجم القابضة، حي الملز، شارع جرير، ص.ب 11451، الرياض، المملكة العربية السعودية.<br>
            <strong>الهاتف:</strong> +966 11 000 0000</p>';
        } else {
            $content = '
            <h2>1. Scope & Compliance with Saudi PDPL</h2>
            <p>ApexNova Holding Company ("ApexNova", "we", "our") is dedicated to safeguarding the privacy and integrity of personal data entrusted to us by clients, engineering partners, vendors, job applicants, and website visitors. This policy complies with the Kingdom of Saudi Arabia Personal Data Protection Law (PDPL) enacted under Royal Decree No. M/19, as amended by Royal Decree No. M/148, and regulatory standards issued by the Saudi Data & AI Authority (SDAIA).</p>

            <h2>2. Information We Collect</h2>
            <p>We collect technical, commercial, and contact data necessary to deliver specialized MEP, industrial, and infrastructure contracting services:</p>
            <ul>
                <li><strong>Contact & Professional Identifiers:</strong> Full name, professional title, organization name, corporate email address, contact telephone, and geographic location.</li>
                <li><strong>Procurement & RFQ Data:</strong> Engineering project specifications, technical inquiries, tender documentation, and bill of quantities.</li>
                <li><strong>Employment Information:</strong> Resumes, credentials, licensing records, and certifications submitted via our Careers portal.</li>
                <li><strong>Technical Telemetry:</strong> Anonymized browser type, IP address, and essential operational cookies required for site performance and security.</li>
            </ul>

            <h2>3. Legal Basis & Processing Purposes</h2>
            <p>Personal data is processed strictly under legitimate contractual, operational, and regulatory bases:</p>
            <ul>
                <li>Evaluating project proposals, preparing engineering tenders, and executing contractual agreements.</li>
                <li>Complying with statutory security vetting and site access permits (e.g., Saudi Aramco, GACA, and industrial zones).</li>
                <li>Responding to commercial inquiries, client communications, and emergency safety notifications.</li>
                <li>Fulfilling statutory governance, tax, and audit obligations under Saudi Arabian law.</li>
            </ul>

            <h2>4. Data Storage & Security Measures</h2>
            <p>We deploy robust enterprise cybersecurity controls, encrypted protocols (SSL/TLS), and restricted role-based administrative access to protect personal data against unauthorized access, loss, or alteration. We do not sell, rent, or lease personal data to external commercial entities.</p>

            <h2>5. Data Subject Rights</h2>
            <p>Under the Saudi PDPL and international standards, you hold specific statutory rights:</p>
            <ul>
                <li><strong>Right to be Informed:</strong> Transparent disclosure of processing purposes and legal justification.</li>
                <li><strong>Right of Access & Correction:</strong> Access your personal data and request immediate correction of inaccurate records.</li>
                <li><strong>Right of Erasure:</strong> Request data deletion when statutory retention obligations expire.</li>
            </ul>

            <h2>6. Data Protection Inquiries</h2>
            <p>For inquiries regarding data privacy or to exercise your rights, please contact our Data Governance Officer:</p>
            <p><strong>Email:</strong> privacy@apexnova.com.sa<br>
            <strong>Address:</strong> ApexNova Holding Company, Al-Malaz, Jareer Street, P.O. Box 11451, Riyadh, Kingdom of Saudi Arabia.<br>
            <strong>Phone:</strong> +966 11 000 0000</p>';
        }
    } elseif ($clean_slug === 'terms-of-use') {
        if ($is_ar) {
            $content = '
            <h2>1. الموافقة على الشروط</h2>
            <p>يخضع الدخول إلى هذا الموقع الإلكتروني واستخدامه للشروط والأحكام التالية، بالإضافة إلى الأنظمة واللوائح المعمول بها في المملكة العربية السعودية. يعد استخدامك لهذا الموقع موافقة صريحة وغير مشروطة على هذه الشروط.</p>

            <h2>2. حقوق الملكية الفكرية</h2>
            <p>جميع حقوق النشر، والعلامات التجارية، والتصاميم، والنصوص الهندسية، والمخططات، والصور، والشعارات المعروضة على هذا الموقع هي ملك حصري لشركة أوج النجم القابضة أو مرخصة لها. يُحظر تماماً نسخ أو إعادة إنتاج أو نشر أو توزيع أي مادة دون إذن خطي مسبق.</p>

            <h2>3. الاستخدام المشروع</h2>
            <p>يلتزم المستخدم باستخدام الموقع للأغراض المشروعة والمصرح بها فقط، ويحظر محاولة اختراق الموقع، أو إدخال برمجيات خبيثة، أو استخدام أدوات استخراج البيانات الآلية دون موافقة خطية صريحة.</p>

            <h2>4. إخلاء المسؤولية الهندسية</h2>
            <p>المعلومات الفنية والبيانات والمواصفات المعروضة على هذا الموقع مقدمة لأغراض التعريف العام بقدرات الشركة، ولا تشكل عرضاً تعاقدياً ملزماً أو استشارة هندسية معتمدة ما لم يتم النص على ذلك في عقد هندسي رسمي موقع بين الطرفين.</p>

            <h2>5. النظام واجب التطبيق والاختصاص القضائي</h2>
            <p>تخضع هذه الشروط وتفسر وفقاً للأنظمة واللوائح السارية في المملكة العربية السعودية، وتختص محاكم مدينة الرياض حصرياً بالفصل في أي نزاع ينشأ عنها.</p>';
        } else {
            $content = '
            <h2>1. Acceptance of Terms</h2>
            <p>By accessing and utilizing the official website of ApexNova Holding Company ("ApexNova"), you acknowledge and agree to be legally bound by these Terms of Use and all applicable laws and regulations of the Kingdom of Saudi Arabia.</p>

            <h2>2. Intellectual Property Rights</h2>
            <p>All content, technical diagrams, engineering descriptions, brand marks, and multimedia assets published on this site are the exclusive intellectual property of ApexNova Holding Company or its authorized licensors, protected by Saudi and international copyright and trademark conventions.</p>

            <h2>3. Permitted & Prohibited Use</h2>
            <p>Users must utilize this portal solely for legitimate commercial, engineering evaluation, and informational purposes. Unauthorized penetration testing, reverse engineering, scrapers, or distribution of malicious code is strictly prohibited.</p>

            <h2>4. Engineering Disclaimer</h2>
            <p>The technical overviews, standards citations, and service summaries published herein are for informational reference. They do not constitute formal engineering consultancy or contractual warranties unless explicitly executed in signed commercial tenders and bilateral engineering agreements.</p>

            <h2>5. Governing Law & Jurisdiction</h2>
            <p>These terms shall be governed by, construed, and enforced in accordance with the laws of the Kingdom of Saudi Arabia. The competent commercial courts of Riyadh shall have exclusive jurisdiction over any disputes arising hereunder.</p>';
        }
    } else { // cookie-policy
        if ($is_ar) {
            $content = '
            <h2>1. ما هي ملفات تعريف الارتباط؟</h2>
            <p>ملفات تعريف الارتباط (Cookies) هي ملفات نصية صغيرة يتم حفظها على جهازك عند زيارة الموقع لتسهيل التصفح وتخصيص تجربة المستخدم وضمان كفاءة وأمان الأداء.</p>

            <h2>2. أنواع ملفات تعريف الارتباط التي نستخدمها</h2>
            <ul>
                <li><strong>الملفات الضرورية للغاية:</strong> ضرورية لتمكين التنقل الأساسي في الموقع، وضمان استقرار الجلسات وتطبيق إعدادات اللغة (العربية / الإنجليزية).</li>
                <li><strong>ملفات الأداء والتحليل:</strong> تساعدنا على فهم كيفية تفاعل الزوار مع أقسام الموقع ومعدلات التصفح لتحسين تجربة المستخدم وأداء الصفحات.</li>
                <li><strong>ملفات التفضيلات:</strong> تحفظ خياراتك المفضلة مثل تفضيل اللغة وإعدادات العرض.</li>
            </ul>

            <h2>3. التحكم في ملفات تعريف الارتباط</h2>
            <p>يمكنك في أي وقت ضبط إعدادات متصفحك لرفض ملفات تعريف الارتباط أو تنبيهك عند إرسالها. يرجى ملاحظة أن تعطيل بعض الملفات قد يؤثر على عمل بعض وظائف الموقع بكفاءة كاملة.</p>';
        } else {
            $content = '
            <h2>1. What are Cookies?</h2>
            <p>Cookies are compact text files placed on your device during website navigation to preserve session stability, record user preferences, and guarantee optimal portal performance.</p>

            <h2>2. Categories of Cookies We Deploy</h2>
            <ul>
                <li><strong>Strictly Necessary Cookies:</strong> Essential for secure routing, session integrity, language selection (English / Arabic), and security verification.</li>
                <li><strong>Performance & Analytics Cookies:</strong> Allow us to monitor traffic aggregate statistics and evaluate technical load to continuously refine user navigation.</li>
                <li><strong>Functionality Cookies:</strong> Retain localized preferences, such as selected viewport configurations and interface settings.</li>
            </ul>

            <h2>3. Managing Your Cookie Preferences</h2>
            <p>You can adjust your web browser settings at any time to block or delete cookies. Note that disabling strictly necessary cookies may impair portal functionality and session persistence.</p>';
        }
    }
}
?>

<main id="main-content" class="an-legal-page" role="main">
  <!-- Page Hero -->
  <section class="an-page-hero" style="background: linear-gradient(135deg, rgba(11,45,91,0.92) 0%, rgba(20,153,138,0.88) 100%); padding: 60px 0; color: #fff;">
    <div class="container">
      <div class="an-breadcrumb" style="font-size: 14px; margin-bottom: 12px; opacity: 0.85;">
        <a href="<?php echo $is_ar ? home_url('/ar/home-ar/') : home_url('/'); ?>" style="color: #fff;"><?php echo $is_ar ? 'الرئيسية' : 'Home'; ?></a>
        <span style="margin: 0 8px;">/</span>
        <span><?php echo esc_html($title); ?></span>
      </div>
      <h1 style="font-size: 38px; font-weight: 700; margin: 0 0 10px; color: #fff;"><?php echo esc_html($title); ?></h1>
      <p style="font-size: 16px; opacity: 0.9; margin: 0; max-width: 700px;">
        <?php echo $is_ar ? 'معايير الحوكمة والامتثال القانوني لشركة أوج النجم القابضة وفقاً للأنظمة السارية في المملكة العربية السعودية.' : 'Corporate governance, statutory compliance, and data protection standards of ApexNova Holding Company.'; ?>
      </p>
    </div>
  </section>

  <!-- Legal Body Content -->
  <section class="an-legal-body" style="padding: 60px 0; background: #f8fafc;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; display: grid; grid-template-columns: 280px 1fr; gap: 40px; align-items: start;">
      
      <!-- Sticky Sidebar Navigation -->
      <aside class="an-legal-sidebar" style="background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 4px 16px rgba(0,0,0,0.04); position: sticky; top: 100px;">
        <h3 style="font-size: 18px; color: #0B2D5B; margin: 0 0 16px; border-bottom: 2px solid #14998A; padding-bottom: 8px;">
          <?php echo $is_ar ? 'الوثائق القانونية' : 'Legal Policies'; ?>
        </h3>
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 10px;">
          <li>
            <a href="<?php echo esc_url($privacy_url); ?>" style="display: block; padding: 10px 14px; border-radius: 6px; text-decoration: none; font-weight: 600; <?php echo $clean_slug === 'privacy-policy' ? 'background: #0B2D5B; color: #fff;' : 'background: #f1f5f9; color: #1e293b;'; ?>">
              <?php echo $is_ar ? '🛡 سياسة الخصوصية (PDPL)' : '🛡 Privacy Policy (PDPL)'; ?>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url($terms_url); ?>" style="display: block; padding: 10px 14px; border-radius: 6px; text-decoration: none; font-weight: 600; <?php echo $clean_slug === 'terms-of-use' ? 'background: #0B2D5B; color: #fff;' : 'background: #f1f5f9; color: #1e293b;'; ?>">
              <?php echo $is_ar ? '📜 شروط الاستخدام' : '📜 Terms of Use'; ?>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url($cookie_url); ?>" style="display: block; padding: 10px 14px; border-radius: 6px; text-decoration: none; font-weight: 600; <?php echo $clean_slug === 'cookie-policy' ? 'background: #0B2D5B; color: #fff;' : 'background: #f1f5f9; color: #1e293b;'; ?>">
              <?php echo $is_ar ? '🍪 سياسة ملفات تعريف الارتباط' : '🍪 Cookie Policy'; ?>
            </a>
          </li>
        </ul>

        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e2e8f0; font-size: 13px; color: #64748b;">
          <strong><?php echo $is_ar ? 'تاريخ التحديث:' : 'Last Updated:'; ?></strong><br>
          <?php echo $is_ar ? 'أكتوبر 2026' : 'October 2026'; ?><br><br>
          <button onclick="window.print()" style="width: 100%; padding: 8px 12px; background: #e2e8f0; border: none; border-radius: 4px; font-weight: 600; color: #0f172a; cursor: pointer;">
            <?php echo $is_ar ? '🖨 طباعة الوثيقة' : '🖨 Print Document'; ?>
          </button>
        </div>
      </aside>

      <!-- Main Legal Document Text -->
      <article class="an-legal-content" style="background: #fff; padding: 40px; border-radius: 8px; box-shadow: 0 4px 16px rgba(0,0,0,0.04); font-size: 16px; line-height: 1.8; color: #334155;">
        <?php echo $content; ?>
      </article>

    </div>
  </section>
</main>

<style>
@media (max-width: 860px) {
  .an-legal-body .container {
    grid-template-columns: 1fr !important;
  }
  .an-legal-sidebar {
    position: static !important;
  }
}
.an-legal-content h2 {
  color: #0B2D5B;
  font-size: 22px;
  font-weight: 700;
  margin-top: 32px;
  margin-bottom: 12px;
  padding-bottom: 6px;
  border-bottom: 1px solid #e2e8f0;
}
.an-legal-content h2:first-of-type {
  margin-top: 0;
}
.an-legal-content ul {
  padding-inline-start: 24px;
  margin-bottom: 20px;
}
.an-legal-content li {
  margin-bottom: 8px;
}
</style>

<?php get_footer(); ?>
