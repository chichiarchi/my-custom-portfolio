// ═══════════════════════════════════════
// PDF Preview Modal
// ═══════════════════════════════════════
(function () {
    const modal     = document.getElementById('pdfModal');
    const openBtn   = document.getElementById('btnPreview');
    const closeBtn  = document.getElementById('pdfClose');
    const backdrop  = document.getElementById('pdfBackdrop');

    if (!modal || !openBtn) return;

    function openModal() {
        modal.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('open');
        document.body.style.overflow = '';
    }

    openBtn.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    backdrop.addEventListener('click', closeModal);

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && modal.classList.contains('open')) closeModal();
    });
})();

// ═══════════════════════════════════════
// Zero-G Carousel — Drag + 3D Tilt
// ═══════════════════════════════════════
(function () {
    const track = document.getElementById('zerogTrack');
    const prevBtn = document.getElementById('zerogPrev');
    const nextBtn = document.getElementById('zerogNext');
    const dotsContainer = document.getElementById('zerogDots');

    if (!track) return;

    const slides = Array.from(track.querySelectorAll('.zerog-slide'));
    let current = 0;
    let isDragging = false;
    let startX = 0;
    let dragDelta = 0;

    // Build dots
    slides.forEach((_, i) => {
        const dot = document.createElement('button');
        dot.className = 'zerog-dot' + (i === 0 ? ' active' : '');
        dot.setAttribute('aria-label', 'Slide ' + (i + 1));
        dot.addEventListener('click', () => goTo(i));
        dotsContainer.appendChild(dot);
    });

    function goTo(index) {
        current = Math.max(0, Math.min(index, slides.length - 1));
        track.style.transform = `translateX(-${current * 100}%)`;
        document.querySelectorAll('.zerog-dot').forEach((d, i) =>
            d.classList.toggle('active', i === current));
    }

    prevBtn.addEventListener('click', () => goTo(current - 1));
    nextBtn.addEventListener('click', () => goTo(current + 1));

    // Drag support (mouse + touch)
    track.addEventListener('mousedown', e => { isDragging = true; startX = e.clientX; });
    track.addEventListener('touchstart', e => { isDragging = true; startX = e.touches[0].clientX; }, { passive: true });

    window.addEventListener('mousemove', e => {
        if (!isDragging) return;
        dragDelta = e.clientX - startX;
    });
    window.addEventListener('touchmove', e => {
        if (!isDragging) return;
        dragDelta = e.touches[0].clientX - startX;
    }, { passive: true });

    window.addEventListener('mouseup', () => {
        if (!isDragging) return;
        isDragging = false;
        if (dragDelta < -60) goTo(current + 1);
        else if (dragDelta > 60) goTo(current - 1);
        dragDelta = 0;
    });
    window.addEventListener('touchend', () => {
        if (!isDragging) return;
        isDragging = false;
        if (dragDelta < -60) goTo(current + 1);
        else if (dragDelta > 60) goTo(current - 1);
        dragDelta = 0;
    });

    // 3D Tilt effect on each card
    document.querySelectorAll('.zerog-card').forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const cx = rect.left + rect.width / 2;
            const cy = rect.top + rect.height / 2;
            const rx = ((e.clientY - cy) / (rect.height / 2)) * -12;
            const ry = ((e.clientX - cx) / (rect.width / 2)) * 12;
            card.style.transform = `perspective(800px) rotateX(${rx}deg) rotateY(${ry}deg) translateY(-6px)`;
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(800px) rotateX(0) rotateY(0) translateY(0)';
        });
    });

    // Auto-advance
    setInterval(() => { if (!isDragging) goTo((current + 1) % slides.length); }, 5000);
})();

// ═══════════════════════════════════════
// Floating orbs — y = A*sin(bt + c)
// ═══════════════════════════════════════
(function () {
    const orbs = document.querySelectorAll('.tech-orb');
    const A = 10; // amplitude px
    orbs.forEach((orb, i) => {
        const b = 0.8 + i * 0.15;
        const c = i * 0.9;
        let t = 0;
        function drift() {
            t += 0.02;
            const y = A * Math.sin(b * t + c);
            orb.style.transform = `translateY(${y}px)`;
            requestAnimationFrame(drift);
        }
        drift();
    });
})();

// ═══════════════════════════════════════
// Scroll reveal (shared with main.js)
// ═══════════════════════════════════════
(function () {
    const els = document.querySelectorAll('.scroll-reveal');
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
    }, { threshold: 0.1 });
    els.forEach(el => obs.observe(el));
})();
