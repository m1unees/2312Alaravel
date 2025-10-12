/**
* Template Name: Medicio
* Updated: Oct 2025
*/

(function () {
  "use strict";

  // Toggle 'scrolled' class on body when page is scrolled
  function toggleScrolled() {
    const body = document.querySelector('body');
    const header = document.querySelector('#header');
    if (!header.classList.contains('scroll-up-sticky') && 
        !header.classList.contains('sticky-top') && 
        !header.classList.contains('fixed-top')) return;
    
    window.scrollY > 100 
      ? body.classList.add('scrolled') 
      : body.classList.remove('scrolled');
  }

  document.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  // Mobile nav toggle
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function mobileNavToggle() {
    document.body.classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }

  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', mobileNavToggle);
  }

  // Hide mobile nav on same-page/hash links
  document.querySelectorAll('#navbar a').forEach(link => {
    link.addEventListener('click', () => {
      if (document.body.classList.contains('mobile-nav-active')) {
        mobileNavToggle();
      }
    });
  });

  // Dropdown toggle in mobile nav
  document.querySelectorAll('#navbar .toggle-dropdown').forEach(drop => {
    drop.addEventListener('click', function (e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  // Preloader removal
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  // Scroll to top button
  const scrollTopBtn = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTopBtn) {
      window.scrollY > 100 
        ? scrollTopBtn.classList.add('active') 
        : scrollTopBtn.classList.remove('active');
    }
  }

  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  // AOS (Animate On Scroll) init
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  // Auto-generate carousel indicators
  document.querySelectorAll('.carousel-indicators').forEach((indicators) => {
    const carousel = indicators.closest('.carousel');
    carousel.querySelectorAll('.carousel-item').forEach((item, index) => {
      indicators.innerHTML += `
        <li data-bs-target="#${carousel.id}" data-bs-slide-to="${index}" class="${index === 0 ? 'active' : ''}"></li>
      `;
    });
  });

  // Init GLightbox
  const glightbox = GLightbox({ selector: '.glightbox' });

  // Init PureCounter
  new PureCounter();

  // Init Swiper sliders
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(swiperEl => {
      const configEl = swiperEl.querySelector(".swiper-config");
      if (!configEl) return;

      const config = JSON.parse(configEl.innerHTML.trim());

      if (swiperEl.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperEl, config); // Assuming this function is defined elsewhere
      } else {
        new Swiper(swiperEl, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  // FAQ toggle
  document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
    faqItem.addEventListener('click', () => {
      faqItem.parentNode.classList.toggle('faq-active');
    });
  });

  // Fix hash scroll on load
  window.addEventListener('load', () => {
    if (window.location.hash && document.querySelector(window.location.hash)) {
      setTimeout(() => {
        const target = document.querySelector(window.location.hash);
        const marginTop = parseInt(getComputedStyle(target).scrollMarginTop || 0);
        window.scrollTo({
          top: target.offsetTop - marginTop,
          behavior: 'smooth'
        });
      }, 100);
    }
  });

  // Scrollspy on nav menu links
  const navLinks = document.querySelectorAll('#navbar a');

  function navScrollspy() {
    navLinks.forEach(link => {
      if (!link.hash) return;
      const section = document.querySelector(link.hash);
      if (!section) return;
      const pos = window.scrollY + 200;
      if (pos >= section.offsetTop && pos <= section.offsetTop + section.offsetHeight) {
        navLinks.forEach(el => el.classList.remove('active'));
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  window.addEventListener('load', navScrollspy);
  document.addEventListener('scroll', navScrollspy);

})();
