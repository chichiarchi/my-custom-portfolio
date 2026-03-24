// Theme Toggle Logic
const themeToggleBtn = document.getElementById('theme-toggle');
const rootElement = document.documentElement;

// Dynamic Image Update
function updateThemeImage(theme) {
    const profilePhoto = document.getElementById('dynamic-photo');
    if (profilePhoto) {
        if (theme === 'dark') {
            profilePhoto.src = 'assets/photo-dark.png';
        } else {
            profilePhoto.src = 'assets/photo-light.jpg';
        }
    }
}

// Check for saved theme in localStorage
const savedTheme = localStorage.getItem('theme');
if (savedTheme) {
    rootElement.setAttribute('data-theme', savedTheme);
    updateThemeButtonText(savedTheme);
    updateThemeImage(savedTheme);
} else {
    updateThemeImage('dark'); // Default
}

themeToggleBtn.addEventListener('click', () => {
    let currentTheme = rootElement.getAttribute('data-theme') || 'dark';
    let newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    rootElement.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    updateThemeButtonText(newTheme);
    updateThemeImage(newTheme);
});

function updateThemeButtonText(theme) {
    if (themeToggleBtn) {
        themeToggleBtn.textContent = theme === 'dark' ? 'LIGHT MODE' : 'DARK MODE';
    }
}


// Intersection Observer for scroll animations
const revealElements = document.querySelectorAll('.scroll-reveal');

const revealOptions = {
    threshold: 0.15,
    rootMargin: "0px 0px -50px 0px"
};

const revealOnScroll = new IntersectionObserver(function (entries, observer) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, revealOptions);

revealElements.forEach(el => {
    revealOnScroll.observe(el);
});


// Typing Animation
const typedTextElement = document.querySelector('.typed-text');
const words = ["Logic & Design", "Full-Stack Development", "UI/UX & Performance"];
let wordIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeEffect() {
    const currentWord = words[wordIndex];

    if (isDeleting) {
        typedTextElement.textContent = currentWord.substring(0, charIndex - 1);
        charIndex--;
    } else {
        typedTextElement.textContent = currentWord.substring(0, charIndex + 1);
        charIndex++;
    }

    let typeSpeed = isDeleting ? 50 : 100;

    if (!isDeleting && charIndex === currentWord.length) {
        typeSpeed = 2000; // Pause at end
        isDeleting = true;
    } else if (isDeleting && charIndex === 0) {
        isDeleting = false;
        wordIndex = (wordIndex + 1) % words.length;
        typeSpeed = 500; // Pause before typing next word
    }

    setTimeout(typeEffect, typeSpeed);
}

// Start typing effect
if (typedTextElement) {
    setTimeout(typeEffect, 1000);
}


// Particle Background (Simple Vanilla JS Particles)
const canvas = document.getElementById('particles-canvas');
if (canvas) {
    const ctx = canvas.getContext('2d');
    let particlesArray = [];

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        initParticles();
    });

    class Particle {
        constructor() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2;
            this.speedX = (Math.random() - 0.5) * 0.5;
            this.speedY = (Math.random() - 0.5) * 0.5;
        }

        update() {
            this.x += this.speedX;
            this.y += this.speedY;

            if (this.x > canvas.width) this.x = 0;
            if (this.x < 0) this.x = canvas.width;
            if (this.y > canvas.height) this.y = 0;
            if (this.y < 0) this.y = canvas.height;
        }

        draw() {
            // Use neon accent color, default to #00ffcc
            let accentColor = getComputedStyle(document.documentElement).getPropertyValue('--accent-color').trim() || '#00ffcc';
            ctx.fillStyle = accentColor;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function initParticles() {
        particlesArray = [];
        let numberOfParticles = (canvas.height * canvas.width) / 10000; // Density
        for (let i = 0; i < numberOfParticles; i++) {
            particlesArray.push(new Particle());
        }
    }

    function animateParticles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        for (let i = 0; i < particlesArray.length; i++) {
            particlesArray[i].update();
            particlesArray[i].draw();
        }
        requestAnimationFrame(animateParticles);
    }

    initParticles();
    animateParticles();
}
