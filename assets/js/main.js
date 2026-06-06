// ── Sticky Header Shrink on Scroll ──
const header = document.getElementById('site-header');

if (header) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 80) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}

// ── Mobile Menu Toggle ──
const hamburger = document.getElementById('hamburger');
const overlay   = document.getElementById('mobile-nav-overlay');
const closeBtn  = document.getElementById('mobile-nav-close');

if (hamburger && overlay && closeBtn) {
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        overlay.classList.toggle('open');
        hamburger.setAttribute('aria-expanded', overlay.classList.contains('open'));
        document.body.style.overflow = overlay.classList.contains('open') ? 'hidden' : '';
    });

    closeBtn.addEventListener('click', () => {
        hamburger.classList.remove('active');
        overlay.classList.remove('open');
        hamburger.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    });

    document.querySelectorAll('.mobile-nav-list a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            overlay.classList.remove('open');
            document.body.style.overflow = '';
        });
    });
}

// ── Hero Rotating Text ──
const rotatingText = document.getElementById('rotating-text');
const words = ['Meta Ads', 'Google Ads', 'SEO', 'Web Design', 'Social Media'];
let currentIndex = 0;

if (rotatingText) {
    setInterval(() => {
        rotatingText.style.opacity = '0';
        rotatingText.style.transform = 'translateY(-10px)';

        setTimeout(() => {
            currentIndex = (currentIndex + 1) % words.length;
            rotatingText.textContent = words[currentIndex];
            rotatingText.style.opacity = '1';
            rotatingText.style.transform = 'translateY(0)';
        }, 300);
    }, 2000);
}

// ── Stats Counter Animation ──
const statNums = document.querySelectorAll('.stat-num[data-target]');

const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const el = entry.target;
            const target = +el.dataset.target;
            let current = 0;
            const step = Math.ceil(target / 60);
            const timer = setInterval(() => {
                current += step;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                el.textContent = current + '+';
            }, 24);
            counterObserver.unobserve(el);
        }
    });
}, { threshold: 0.5 });

statNums.forEach(el => counterObserver.observe(el));