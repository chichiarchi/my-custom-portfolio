<?php
// PHP Logic: Highly specific professional background & tech stack
$projects = [
    [
        "title" => "Social Owl - Platform Revamp",
        "category" => "Freelance Experience: 2 Years",
        "stack" => "React, Next.js, MUI, 3rd Party Social APIs",
        "desc" => "Led a complete platform overhaul transitioning from legacy React/Vanilla JS to a modern Next.js architecture with Material UI. Integrated complex social media APIs for automated content flows.",
        "link" => "#",
        "special" => true
    ],
    [
        "title" => "🏆 Codefest 2023 Champion",
        "category" => "Achievement: Tagisan ng Talino",
        "stack" => "Android, Java/Kotlin, Mobile UI",
        "desc" => "Won 1st place in the STI College Android App Development contest. Built a high-performance mobile solution under strict time constraints.",
        "link" => "#",
        "special" => true
    ],
    [
        "title" => "Live Restaurant Platform",
        "category" => "Project: Production (Provincial)",
        "stack" => "PHP, Phinx, Ubuntu LTS, Apache 2",
        "desc" => "A high-traffic restaurant management and marketing site. Built with PHP and Phinx for robust database migrations, running on Ubuntu LTS with Apache 2.",
        "link" => "#",
        "special" => true
    ],
    [
        "title" => "Monthsary Greetings Project",
        "category" => "Project: Live Server",
        "stack" => "PHP, HTML5, CSS Animations",
        "desc" => "A personalized, interactive greeting platform. Leverages PHP for dynamic content delivery and custom CSS animations for a premium frontend feel.",
        "link" => "#",
        "special" => true
    ]
];
?>
<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section id="home" class="hero">
    <canvas id="particles-canvas"></canvas>
    <div class="hero-content">
        <h1>SYS.INIT()</h1>
        <p>I build systems with <span class="typed-text"></span></p>
    </div>
</section>

<!-- Brand Identity Section -->
<section id="brand" class="brand-identity container">
    <h2 class="section-title scroll-reveal">Brand_Identity</h2>
    <div class="brand-content scroll-reveal">
        <div class="photo-wrapper">
            <img id="dynamic-photo" src="assets/photo-dark.png" alt="Developer Portrait">
            <div class="photo-glitch-layer"></div>
        </div>
        <div class="brand-text">
            <h3>Full-Stack Engineer</h3>
            <p><strong>STI College Alaminos Graduate</strong> and <strong>2023 Tagisan ng Talino Codefest
                    Champion</strong>. I specialize in building manual, high-performance systems from the ground up.</p>
            <p>With 2 years of freelance experience at <strong>Social Owl</strong>, I bridge the gap between complex
                backend infrastructure and intuitive frontend design.</p>
        </div>
    </div>
</section>

<!-- Showcase Gallery Section -->
<section id="projects" class="gallery container">
    <h2 class="section-title scroll-reveal">Projects_&_Achievements</h2>
    <div class="gallery-grid">
        <?php foreach ($projects as $index => $project): ?>
        <div class="gallery-item scroll-reveal <?php echo $project['special'] ? 'glitch-card' : ''; ?>"
            style="transition-delay: <?php echo ($index % 2) * 0.1; ?>s">
            <div class="item-inner">
                <div class="item-header">
                    <span class="mono category">
                        <?php echo $project['category']; ?>
                    </span>
                    <h3 class="<?php echo $project['special'] ? 'glitch-text' : ''; ?>"
                        data-text="<?php echo $project['title']; ?>">
                        <?php echo $project['title']; ?>
                    </h3>
                </div>
                <div class="item-body">
                    <p>
                        <?php echo $project['desc']; ?>
                    </p>
                    <p class="stack mono">[
                        <?php echo $project['stack']; ?> ]
                    </p>
                </div>
            </div>
        </div>
        <?php
endforeach; ?>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="skills container">
    <h2 class="section-title scroll-reveal">Tech_Stack</h2>
    <div class="bento-grid">
        <div class="bento-item scroll-reveal">
            <h3>&lt;/&gt; Frontend</h3>
            <ul class="skill-list">
                <li>Vanilla JavaScript (ES6+)</li>
                <li>HTML5 & Semantic Markup</li>
                <li>Modern CSS (Grid/Flexbox)</li>
                <li>UI/UX Design Principles</li>
                <li>React.js & Component Architecture</li>
            </ul>
        </div>
        <div class="bento-item scroll-reveal">
            <h3>{;} Backend</h3>
            <ul class="skill-list">
                <li>Vanilla PHP & Architecture</li>
                <li>Java & Spring Ecosystem</li>
                <li>RESTful API Design</li>
                <li>Relational Databases (SQL)</li>
                <li>Clean Architecture & SOLID</li>
            </ul>
        </div>
        <div class="bento-item scroll-reveal">
            <h3>[~] Infrastructure</h3>
            <ul class="skill-list">
                <li>Ubuntu Server Admin</li>
                <li>Docker & Containerization</li>
                <li>Nginx & Apache Setup</li>
                <li>Git Version Control</li>
                <li>Webhook Integration</li>
            </ul>
        </div>
    </div>
</section>

<!-- Contact Section (Social Connect) -->
<section id="contact" class="contact container">
    <h2 class="section-title scroll-reveal">Social_Connect</h2>
    <div class="social-links scroll-reveal">
        <a href="https://www.facebook.com/arvinlatagan15" target="_blank" class="social-icon" aria-label="Facebook">
            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
            <span>Facebook</span>
        </a>
        <a href="https://www.linkedin.com/in/arvinlatagan/" target="_blank" class="social-icon" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                <rect x="2" y="9" width="4" height="12"></rect>
                <circle cx="4" cy="4" r="2"></circle>
            </svg>
            <span>LinkedIn</span>
        </a>
        <a href="https://www.tiktok.com/@arvin_softdev?lang=en" target="_blank" class="social-icon" aria-label="TikTok">
            <svg viewBox="0 0 24 24" width="32" height="32" stroke="currentColor" stroke-width="2" fill="none"
                stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                <path d="M9 12a4 4 0 1 0 4 4V4a5 5 0 0 0 5 5"></path>
            </svg>
            <span>TikTok</span>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>