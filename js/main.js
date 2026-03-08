/* ============================================================
   RICHARDSON — main.js
   Interactivity, animations, and UI behavior
   ============================================================ */

'use strict';

/* ---- Utility ---- */
const $ = (sel, ctx = document) => ctx.querySelector(sel);
const $$ = (sel, ctx = document) => [...ctx.querySelectorAll(sel)];
const on = (el, ev, fn, opts) => el && el.addEventListener(ev, fn, opts);

/* ============================================================
   PRELOADER
   ============================================================ */
function initPreloader() {
  const preloader = $('#preloader');
  if (!preloader) return;

  const hide = () => {
    preloader.classList.add('done');
    document.body.style.overflow = '';
  };

  document.body.style.overflow = 'hidden';

  // Remove after animation completes (1.4s bar + 0.3s fade)
  setTimeout(hide, 1800);
  on(window, 'load', () => setTimeout(hide, 400));
}

/* ============================================================
   NAVBAR — scroll state & mobile toggle
   ============================================================ */
function initNavbar() {
  const navbar  = $('#navbar');
  const toggle  = $('#navToggle');
  const links   = $('#navLinks');
  const navItems = $$('.nav-link:not(.nav-cta)', links);

  if (!navbar) return;

  // Scroll state
  const updateNav = () => {
    navbar.classList.toggle('scrolled', window.scrollY > 40);
  };
  updateNav();
  on(window, 'scroll', updateNav, { passive: true });

  // Mobile toggle
  on(toggle, 'click', () => {
    const open = toggle.classList.toggle('open');
    links.classList.toggle('open', open);
    toggle.setAttribute('aria-expanded', open);
  });

  // Close on nav link click
  navItems.forEach(link => {
    on(link, 'click', () => {
      toggle.classList.remove('open');
      links.classList.remove('open');
    });
  });

  // Active link on scroll
  const sections = $$('section[id]');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.getAttribute('id');
        navItems.forEach(link => {
          link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
        });
      }
    });
  }, { rootMargin: '-40% 0px -55% 0px' });

  sections.forEach(s => observer.observe(s));
}

/* ============================================================
   SCROLL REVEAL
   ============================================================ */
function initScrollReveal() {
  const items = $$('.reveal-up, .reveal-left, .reveal-right');
  if (!items.length) return;

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      const delay = parseInt(el.dataset.delay || '0', 10);
      setTimeout(() => el.classList.add('revealed'), delay);
      observer.unobserve(el);
    });
  }, { threshold: 0.12 });

  items.forEach(el => observer.observe(el));
}

/* ============================================================
   COUNTER ANIMATION
   ============================================================ */
function animateCounter(el, target, duration = 1800) {
  const start    = performance.now();
  const isFloat  = target % 1 !== 0;

  const step = timestamp => {
    const elapsed  = timestamp - start;
    const progress = Math.min(elapsed / duration, 1);
    // Ease out cubic
    const eased = 1 - Math.pow(1 - progress, 3);
    const current = Math.round(target * eased);
    el.textContent = current;
    if (progress < 1) requestAnimationFrame(step);
  };
  requestAnimationFrame(step);
}

function initCounters() {
  const counters = $$('.ticker-num');
  if (!counters.length) return;

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el     = entry.target;
      const target = parseInt(el.dataset.target, 10);
      animateCounter(el, target);
      observer.unobserve(el);
    });
  }, { threshold: 0.3 });

  counters.forEach(el => observer.observe(el));
}

/* ============================================================
   TESTIMONIALS SLIDER
   ============================================================ */
function initSlider() {
  const track  = $('#testimonialsTrack');
  const prev   = $('#sliderPrev');
  const next   = $('#sliderNext');
  const dotsEl = $('#sliderDots');

  if (!track) return;

  const cards = $$('.testimonial-card', track);
  let current = 0;
  let autoInterval;

  // Build dots
  cards.forEach((_, i) => {
    const dot = document.createElement('button');
    dot.className = 'slider-dot';
    dot.setAttribute('aria-label', `Go to testimonial ${i + 1}`);
    on(dot, 'click', () => goTo(i));
    dotsEl.appendChild(dot);
  });

  function updateDots() {
    $$('.slider-dot', dotsEl).forEach((d, i) => {
      d.classList.toggle('active', i === current);
    });
  }

  function goTo(index) {
    current = (index + cards.length) % cards.length;
    track.style.transform = `translateX(-${current * 100}%)`;
    updateDots();
    resetAuto();
  }

  function resetAuto() {
    clearInterval(autoInterval);
    autoInterval = setInterval(() => goTo(current + 1), 5500);
  }

  on(prev, 'click', () => goTo(current - 1));
  on(next, 'click', () => goTo(current + 1));

  // Touch swipe
  let touchStartX = 0;
  on(track, 'touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
  on(track, 'touchend', e => {
    const diff = touchStartX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 40) goTo(diff > 0 ? current + 1 : current - 1);
  });

  updateDots();
  resetAuto();
}

/* ============================================================
   FAQ ACCORDION
   ============================================================ */
function initFAQ() {
  $$('.faq-item').forEach(item => {
    const btn    = $('.faq-question', item);
    const answer = $('.faq-answer', item);
    if (!btn || !answer) return;

    on(btn, 'click', () => {
      const isOpen = btn.getAttribute('aria-expanded') === 'true';

      // Close all others
      $$('.faq-question[aria-expanded="true"]').forEach(other => {
        if (other === btn) return;
        other.setAttribute('aria-expanded', 'false');
        $('.faq-answer', other.closest('.faq-item')).classList.remove('open');
      });

      btn.setAttribute('aria-expanded', String(!isOpen));
      answer.classList.toggle('open', !isOpen);
    });
  });
}

/* ============================================================
   CONTACT FORM
   ============================================================ */
function initContactForm() {
  const form    = $('#contactForm');
  const success = $('#formSuccess');
  if (!form) return;

  on(form, 'submit', e => {
    e.preventDefault();

    // Basic validation
    let valid = true;
    $$('[required]', form).forEach(field => {
      const isEmpty = field.type === 'checkbox' ? !field.checked : !field.value.trim();
      field.style.borderColor = isEmpty ? '#ef4444' : '';
      if (isEmpty) valid = false;
    });

    if (!valid) return;

    // Simulate async submission
    const btn = $('[type="submit"]', form);
    const text = $('.btn-text', btn);
    text.textContent = 'Sending...';
    btn.disabled = true;

    setTimeout(() => {
      form.style.opacity = '0';
      setTimeout(() => {
        form.hidden = true;
        success.hidden = false;
        success.style.opacity = '0';
        requestAnimationFrame(() => {
          success.style.transition = 'opacity 0.4s ease';
          success.style.opacity = '1';
        });
      }, 300);
    }, 1200);
  });

  // Clear error state on input
  $$('[required]', form).forEach(field => {
    on(field, 'input', () => { field.style.borderColor = ''; });
  });
}

/* ============================================================
   NEWSLETTER FORM
   ============================================================ */
function initNewsletterForm() {
  const form = $('#newsletterForm');
  if (!form) return;

  on(form, 'submit', e => {
    e.preventDefault();
    const input = $('input', form);
    const btn   = $('button', form);
    btn.innerHTML = '<i class="fa-solid fa-check"></i>';
    btn.style.background = '#22c55e';
    input.value = '';
    input.placeholder = 'You\'re subscribed!';
    input.disabled = true;
    setTimeout(() => {
      btn.innerHTML = '<i class="fa-solid fa-arrow-right"></i>';
      btn.style.background = '';
      input.placeholder = 'your@email.com';
      input.disabled = false;
    }, 3000);
  });
}

/* ============================================================
   BACK TO TOP
   ============================================================ */
function initBackToTop() {
  const btn = $('#backToTop');
  if (!btn) return;

  on(window, 'scroll', () => {
    btn.classList.toggle('visible', window.scrollY > 500);
  }, { passive: true });

  on(btn, 'click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

/* ============================================================
   SMOOTH SCROLL for anchor links
   ============================================================ */
function initSmoothScroll() {
  on(document, 'click', e => {
    const link = e.target.closest('a[href^="#"]');
    if (!link) return;
    const target = document.getElementById(link.getAttribute('href').slice(1));
    if (!target) return;
    e.preventDefault();
    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
}

/* ============================================================
   SERVICE CARDS — staggered reveal on scroll
   ============================================================ */
function initServiceCardHover() {
  // Add subtle tilt effect on desktop
  if (window.matchMedia('(pointer: fine)').matches) {
    $$('.service-card, .result-card, .team-card').forEach(card => {
      on(card, 'mousemove', e => {
        const rect = card.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width  - 0.5) * 6;
        const y = ((e.clientY - rect.top)  / rect.height - 0.5) * 6;
        card.style.transform = `translateY(-6px) rotateX(${-y}deg) rotateY(${x}deg)`;
        card.style.transformOrigin = 'center center';
      });
      on(card, 'mouseleave', () => {
        card.style.transform = '';
      });
    });
  }
}

/* ============================================================
   PARALLAX ORBS
   ============================================================ */
function initParallax() {
  const orbs = $$('.hero-orb');
  if (!orbs.length || window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  on(window, 'mousemove', e => {
    const cx = window.innerWidth  / 2;
    const cy = window.innerHeight / 2;
    const dx = (e.clientX - cx) / cx;
    const dy = (e.clientY - cy) / cy;

    orbs.forEach((orb, i) => {
      const factor = (i + 1) * 8;
      orb.style.transform = `translate(${dx * factor}px, ${dy * factor}px)`;
    });
  }, { passive: true });
}

/* ============================================================
   INIT
   ============================================================ */
document.addEventListener('DOMContentLoaded', () => {
  initPreloader();
  initNavbar();
  initScrollReveal();
  initCounters();
  initSlider();
  initFAQ();
  initContactForm();
  initNewsletterForm();
  initBackToTop();
  initSmoothScroll();
  initServiceCardHover();
  initParallax();
});
