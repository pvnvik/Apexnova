/**
 * ApexNova Main Theme Scripts
 */
document.addEventListener('DOMContentLoaded', function () {
  // 1. Mobile Menu Toggle
  const toggleBtn = document.querySelector('.an-menu-toggle');
  const navMenu = document.querySelector('.an-nav-menu');

  if (toggleBtn && navMenu) {
    toggleBtn.addEventListener('click', function () {
      navMenu.classList.toggle('open');
      const isExpanded = navMenu.classList.contains('open');
      toggleBtn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
      toggleBtn.innerHTML = isExpanded ? '✕' : '☰';
    });
  }

  // 2. Hero Slider
  const slides = document.querySelectorAll('.an-slide');
  const dots = document.querySelectorAll('.an-dot');
  const prevBtn = document.querySelector('.an-slider-prev');
  const nextBtn = document.querySelector('.an-slider-next');
  let currentSlide = 0;
  let slideInterval = null;

  function showSlide(index) {
    if (!slides.length) return;
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
    currentSlide = index;
  }

  function nextSlide() {
    let next = (currentSlide + 1) % slides.length;
    showSlide(next);
  }

  function prevSlide() {
    let prev = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(prev);
  }

  function startAutoPlay() {
    if (!slides.length) return;
    stopAutoPlay();
    slideInterval = setInterval(nextSlide, 6000);
  }

  function stopAutoPlay() {
    if (slideInterval) {
      clearInterval(slideInterval);
      slideInterval = null;
    }
  }

  if (slides.length > 0) {
    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        nextSlide();
        startAutoPlay();
      });
    }
    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        prevSlide();
        startAutoPlay();
      });
    }

    dots.forEach((dot, idx) => {
      dot.addEventListener('click', () => {
        showSlide(idx);
        startAutoPlay();
      });
    });

    const sliderElem = document.querySelector('.an-hero-slider');
    if (sliderElem) {
      sliderElem.addEventListener('mouseenter', stopAutoPlay);
      sliderElem.addEventListener('mouseleave', startAutoPlay);
    }

    startAutoPlay();
  }

  // 3. Stats Counter Animation
  const statNumbers = document.querySelectorAll('.an-stat-count');
  if (statNumbers.length > 0 && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseInt(el.getAttribute('data-target'), 10);
          if (isNaN(target)) return;

          let start = 0;
          const duration = 2000;
          const stepTime = Math.abs(Math.floor(duration / (target || 1)));
          const timer = setInterval(() => {
            start += Math.ceil(target / 40) || 1;
            if (start >= target) {
              el.textContent = target;
              clearInterval(timer);
            } else {
              el.textContent = start;
            }
          }, 30);

          observer.unobserve(el);
        }
      });
    }, { threshold: 0.2 });

    statNumbers.forEach(num => counterObserver.observe(num));
  }

  // 4. Filterable Project Gallery
  const filterBtns = document.querySelectorAll('.an-filter-btn');
  const projectItems = document.querySelectorAll('.an-project-card');

  if (filterBtns.length > 0 && projectItems.length > 0) {
    filterBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        filterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const filter = this.getAttribute('data-filter');

        projectItems.forEach(item => {
          if (filter === 'all' || item.getAttribute('data-sector') === filter) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }

  // 5. Training Course Tabs / Accordion
  const accordionHeaders = document.querySelectorAll('.an-accordion-header');
  accordionHeaders.forEach(header => {
    header.addEventListener('click', function () {
      const parent = this.parentElement;
      const isOpen = parent.classList.contains('active');
      document.querySelectorAll('.an-accordion-item').forEach(item => item.classList.remove('active'));
      if (!isOpen) {
        parent.classList.add('active');
      }
    });
  });
});
