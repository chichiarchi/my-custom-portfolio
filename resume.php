<?php include 'includes/header.php'; ?>

<!-- SVG Icon Defs (hidden) -->
<svg xmlns="http://www.w3.org/2000/svg" style="display:none">
    <symbol id="icon-code" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
    </symbol>
    <symbol id="icon-trophy" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/>
        <path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/>
        <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/>
        <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/>
    </symbol>
    <symbol id="icon-server" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/>
        <line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/>
    </symbol>
    <symbol id="icon-globe" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="12" r="10"/>
        <line x1="2" y1="12" x2="22" y2="12"/>
        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
    </symbol>
    <symbol id="icon-brain" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M9.5 2A2.5 2.5 0 0 1 12 4.5V5"/>
        <path d="M12 5a5 5 0 0 1 5 5v1a5 5 0 0 1-5 5 5 5 0 0 1-5-5v-1a5 5 0 0 1 5-5z"/>
        <path d="M12 15v4"/><path d="M8 19h8"/>
        <path d="M7 10H4a2 2 0 0 0 0 4h3"/><path d="M17 10h3a2 2 0 0 1 0 4h-3"/>
    </symbol>
    <symbol id="icon-download" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
        <polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/>
    </symbol>
    <symbol id="icon-eye" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
        <circle cx="12" cy="12" r="3"/>
    </symbol>
    <symbol id="icon-briefcase" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <rect x="2" y="7" width="20" height="14" rx="2"/>
        <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
        <line x1="12" y1="12" x2="12" y2="12"/><line x1="2" y1="12" x2="22" y2="12"/>
    </symbol>
    <symbol id="icon-intern" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M20 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
        <path d="M16 3H8a1 1 0 0 0-1 1v3h10V4a1 1 0 0 0-1-1z"/>
        <line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/>
    </symbol>
    <symbol id="icon-shop" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
        <line x1="3" y1="6" x2="21" y2="6"/>
        <path d="M16 10a4 4 0 0 1-8 0"/>
    </symbol>
    <symbol id="icon-grad" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
        <path d="M6 12v5c3 3 9 3 12 0v-5"/>
    </symbol>
    <symbol id="icon-cert" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/>
    </symbol>
    <symbol id="icon-mail" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
        <polyline points="22,6 12,13 2,6"/>
    </symbol>
    <symbol id="icon-phone" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.35 2 2 0 0 1 3.6 1.17h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.82a16 16 0 0 0 6.29 6.29l.97-.96a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
    </symbol>
    <symbol id="icon-pin" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
        <circle cx="12" cy="10" r="3"/>
    </symbol>
</svg>

<div class="resume-page">
    <!-- Floating Background Orbs -->
    <div class="ag-orbs" aria-hidden="true">
        <div class="ag-orb ag-orb--1"></div>
        <div class="ag-orb ag-orb--2"></div>
        <div class="ag-orb ag-orb--3"></div>
        <div class="ag-orb ag-orb--4"></div>
    </div>

    <!-- ═══════════════ HERO ══════════════ -->
    <section class="resume-hero container">

        <div class="resume-hero__meta scroll-reveal">
            <h1 class="resume-name">Arvin Christopher<br><span>Latagan</span></h1>
            <p class="resume-role">Full Stack Web Developer</p>

            <div class="resume-contacts">
                <a href="mailto:aclatagan15@gmail.com" class="rc-item">
                    <svg width="14" height="14"><use href="#icon-mail"/></svg>
                    aclatagan15@gmail.com
                </a>
                <span class="rc-item">
                    <svg width="14" height="14"><use href="#icon-phone"/></svg>
                    09916680399
                </span>
                <span class="rc-item">
                    <svg width="14" height="14"><use href="#icon-pin"/></svg>
                    Bolinao, Pangasinan
                </span>
                <a href="https://github.com/chichiarchi" target="_blank" class="rc-item">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/>
                    </svg>
                    github.com/chichiarchi
                </a>
            </div>

            <div class="resume-actions">
                <a href="assets/resume.pdf" download="Arvin_Christopher_Latagan_Resume.pdf" class="btn-download">
                    <svg width="16" height="16"><use href="#icon-download"/></svg>
                    Download PDF
                </a>
                <button class="btn-preview" id="btnPreview">
                    <svg width="16" height="16"><use href="#icon-eye"/></svg>
                    Preview Resume
                </button>
            </div>
        </div>

        <div class="resume-hero__objective scroll-reveal">
            <div class="glass-card">
                <h3 class="glass-card__title">Career Objective</h3>
                <p>Highly motivated Full Stack Web Developer and IT graduate with a strong foundation in modern web architecture. Dedicated to delivering efficient, high-quality results by leveraging professional experience, technical training, and AI-driven development workflows to optimize the software development lifecycle.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════ PDF PREVIEW MODAL ══════════════ -->
    <div class="pdf-modal" id="pdfModal" role="dialog" aria-modal="true" aria-label="Resume Preview">
        <div class="pdf-modal__backdrop" id="pdfBackdrop"></div>
        <div class="pdf-modal__inner">
            <div class="pdf-modal__header">
                <span class="glass-card__title" style="margin:0">Resume Preview</span>
                <div style="display:flex;gap:1rem;align-items:center">
                    <a href="assets/resume.pdf" download="Arvin_Christopher_Latagan_Resume.pdf" class="btn-download" style="padding:0.4rem 1rem;font-size:0.8rem">
                        <svg width="13" height="13"><use href="#icon-download"/></svg> Download
                    </a>
                    <button class="pdf-modal__close" id="pdfClose" aria-label="Close">&times;</button>
                </div>
            </div>
            <iframe src="assets/resume.pdf" class="pdf-modal__frame" title="Resume PDF Preview"></iframe>
        </div>
    </div>

    <!-- ═══════════════ TECH ORBS ══════════════ -->
    <section class="tech-orbs-section container scroll-reveal">
        <h2 class="section-title">Tech_Stack</h2>
        <div class="tech-orbs">
            <div class="tech-orb" style="--delay:0s">
                <svg width="22" height="22"><use href="#icon-code"/></svg>
                <span>JavaScript</span><small>ES6+</small>
            </div>
            <div class="tech-orb" style="--delay:0.3s">
                <svg width="22" height="22"><use href="#icon-code"/></svg>
                <span>React.js</span><small>Component Arch</small>
            </div>
            <div class="tech-orb" style="--delay:0.6s">
                <svg width="22" height="22"><use href="#icon-briefcase"/></svg>
                <span>Java</span><small>Spring Ecosystem</small>
            </div>
            <div class="tech-orb" style="--delay:0.9s">
                <svg width="22" height="22"><use href="#icon-server"/></svg>
                <span>PHP</span><small>Vanilla + OOP</small>
            </div>
            <div class="tech-orb" style="--delay:1.2s">
                <svg width="22" height="22"><use href="#icon-server"/></svg>
                <span>SQL</span><small>Relational DB</small>
            </div>
            <div class="tech-orb" style="--delay:1.5s">
                <svg width="22" height="22"><use href="#icon-globe"/></svg>
                <span>Next.js</span><small>SSR / SSG</small>
            </div>
            <div class="tech-orb" style="--delay:1.8s">
                <svg width="22" height="22"><use href="#icon-server"/></svg>
                <span>Ubuntu</span><small>Server Admin</small>
            </div>
            <div class="tech-orb" style="--delay:2.1s">
                <svg width="22" height="22"><use href="#icon-brain"/></svg>
                <span>AI Tools</span><small>Workflow</small>
            </div>
        </div>
    </section>

    <!-- ═══════════════ EXPERIENCE / EDUCATION GRID ══════════════ -->
    <section class="resume-grid container">

        <!-- Left: Experience -->
        <div class="resume-col">
            <h2 class="section-title scroll-reveal">Experience</h2>

            <div class="exp-card glass-card scroll-reveal">
                <div class="exp-card__header">
                    <div class="exp-card__icon-wrap">
                        <svg width="20" height="20"><use href="#icon-briefcase"/></svg>
                    </div>
                    <div class="exp-card__meta">
                        <h3>Full Stack Web Developer</h3>
                        <p class="exp-card__company">SocialOwl LLC.</p>
                    </div>
                    <span class="exp-card__badge">2 Yrs</span>
                </div>
                <ul class="exp-card__list">
                    <li>Architecting and maintaining full-stack web applications, ensuring high performance and cross-device responsiveness.</li>
                    <li>Integrating advanced AI tools into the development workflow to increase production speed and maintain clean, scalable codebases.</li>
                    <li>Collaborating on the end-to-end development lifecycle, from database schema design to front-end implementation.</li>
                </ul>
            </div>

            <div class="exp-card glass-card scroll-reveal">
                <div class="exp-card__header">
                    <div class="exp-card__icon-wrap">
                        <svg width="20" height="20"><use href="#icon-intern"/></svg>
                    </div>
                    <div class="exp-card__meta">
                        <h3>IT Intern</h3>
                        <p class="exp-card__company">Philippine Crop Insurance Corporation</p>
                    </div>
                    <span class="exp-card__badge">Intern</span>
                </div>
                <ul class="exp-card__list">
                    <li>Digitized critical agricultural records by accurately encoding farmers' certificates of insurance.</li>
                    <li>Performed background verification of farmer details to ensure high standards of database accuracy.</li>
                    <li>Managed the professional distribution of insurance checks to policyholders.</li>
                </ul>
            </div>

            <div class="exp-card glass-card scroll-reveal">
                <div class="exp-card__header">
                    <div class="exp-card__icon-wrap">
                        <svg width="20" height="20"><use href="#icon-shop"/></svg>
                    </div>
                    <div class="exp-card__meta">
                        <h3>Salesperson</h3>
                        <p class="exp-card__company">Adoras Loading Station</p>
                    </div>
                    <span class="exp-card__badge">Part-time</span>
                </div>
                <ul class="exp-card__list">
                    <li>Conducted regular inventory counts and managed stock levels to maintain operational efficiency.</li>
                    <li>Cultivated positive customer relationships to drive repeat business and revenue growth.</li>
                </ul>
            </div>
        </div>

        <!-- Right: Education + Certs -->
        <div class="resume-col">
            <h2 class="section-title scroll-reveal">Education</h2>

            <div class="edu-card glass-card scroll-reveal">
                <div class="edu-card__icon-wrap">
                    <svg width="22" height="22"><use href="#icon-grad"/></svg>
                </div>
                <div>
                    <h3>Bachelor of Science in Information Technology</h3>
                    <p>STI College Alaminos City</p>
                </div>
            </div>

            <div class="edu-card glass-card scroll-reveal">
                <div class="edu-card__icon-wrap">
                    <svg width="22" height="22"><use href="#icon-grad"/></svg>
                </div>
                <div>
                    <h3>Information and Communication Technology</h3>
                    <p>Bolinao Integrated School &mdash; Senior High School</p>
                </div>
            </div>

            <h2 class="section-title scroll-reveal" style="margin-top:3rem">Certifications</h2>

            <div class="cert-list glass-card scroll-reveal">
                <div class="cert-item">
                    <div class="cert-icon"><svg width="14" height="14"><use href="#icon-cert"/></svg></div>
                    <span>JavaScript Algorithms &amp; Data Structures (Beta) &mdash; FreeCodeCamp</span>
                </div>
                <div class="cert-item">
                    <div class="cert-icon"><svg width="14" height="14"><use href="#icon-cert"/></svg></div>
                    <span>Responsive Web Design Certification &mdash; FreeCodeCamp</span>
                </div>
                <div class="cert-item">
                    <div class="cert-icon"><svg width="14" height="14"><use href="#icon-cert"/></svg></div>
                    <span>Java Fundamentals Course Completion</span>
                </div>
                <div class="cert-item">
                    <div class="cert-icon"><svg width="14" height="14"><use href="#icon-trophy"/></svg></div>
                    <span>Tagisan ng Talino Competitor &mdash; Cluster Level (2023–2024) &amp; Local Level (2022–2024)</span>
                </div>
                <div class="cert-item">
                    <div class="cert-icon"><svg width="14" height="14"><use href="#icon-globe"/></svg></div>
                    <span>25th STI National Youth Convention &mdash; Baguio City (June 2024)</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════ ZERO-G CAROUSEL ══════════════ -->
    <section class="carousel-section container">
        <h2 class="section-title scroll-reveal">Projects_Showcase</h2>
        <p class="carousel-subtitle scroll-reveal">A highlight of my work &mdash; swipe or drag to explore.</p>

        <div class="zerog-carousel scroll-reveal">
            <div class="zerog-track" id="zerogTrack">

                <div class="zerog-slide">
                    <div class="zerog-card glass-card">
                        <div class="zerog-card__icon">
                            <svg width="36" height="36"><use href="#icon-code"/></svg>
                        </div>
                        <h3>SocialOwl Platform Revamp</h3>
                        <p>Led full migration from legacy React/Vanilla JS to Next.js + MUI. Integrated third-party social APIs for automated content flows across the platform.</p>
                        <div class="zerog-card__tags">
                            <span>Next.js</span><span>React</span><span>MUI</span><span>REST API</span>
                        </div>
                    </div>
                </div>

                <div class="zerog-slide">
                    <div class="zerog-card glass-card">
                        <div class="zerog-card__icon">
                            <svg width="36" height="36"><use href="#icon-trophy"/></svg>
                        </div>
                        <h3>Codefest 2023 Champion</h3>
                        <p>Won 1st place in the STI College Android App Development contest. Built a high-performance mobile solution under strict time constraints.</p>
                        <div class="zerog-card__tags">
                            <span>Android</span><span>Java / Kotlin</span><span>Mobile UI</span>
                        </div>
                    </div>
                </div>

                <div class="zerog-slide">
                    <div class="zerog-card glass-card">
                        <div class="zerog-card__icon">
                            <svg width="36" height="36"><use href="#icon-server"/></svg>
                        </div>
                        <h3>Live Restaurant Platform</h3>
                        <p>High-traffic restaurant management and marketing site built with PHP and Phinx for robust database migrations on Ubuntu LTS with Apache 2.</p>
                        <div class="zerog-card__tags">
                            <span>PHP</span><span>Phinx</span><span>Apache 2</span><span>Ubuntu</span>
                        </div>
                    </div>
                </div>

                <div class="zerog-slide">
                    <div class="zerog-card glass-card">
                        <div class="zerog-card__icon">
                            <svg width="36" height="36"><use href="#icon-globe"/></svg>
                        </div>
                        <h3>Self-Hosted Portfolio</h3>
                        <p>This very site — deployed and maintained on a personal Linux server. Full-stack lifecycle from codebase to production including server hardening and DNS management.</p>
                        <div class="zerog-card__tags">
                            <span>Ubuntu</span><span>Apache 2</span><span>PHP 8</span><span>Self-hosted</span>
                        </div>
                    </div>
                </div>

                <div class="zerog-slide">
                    <div class="zerog-card glass-card">
                        <div class="zerog-card__icon">
                            <svg width="36" height="36"><use href="#icon-brain"/></svg>
                        </div>
                        <h3>Developer Tooling &amp; Workflow</h3>
                        <p>Experienced in integrating modern developer tools to accelerate build times, reduce boilerplate, and streamline UI/UX delivery across all projects.</p>
                        <div class="zerog-card__tags">
                            <span>Dev Tools</span><span>Automation</span><span>Prototyping</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="zerog-controls">
                <button class="zerog-btn" id="zerogPrev" aria-label="Previous">&#8592;</button>
                <div class="zerog-dots" id="zerogDots"></div>
                <button class="zerog-btn" id="zerogNext" aria-label="Next">&#8594;</button>
            </div>
        </div>
    </section>

</div>

<?php include 'includes/footer.php'; ?>
<script src="js/resume.js"></script>
