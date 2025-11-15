// Dark mode toggle (persists across sessions)
const toggle = document.getElementById('dark-mode-toggle');
const body = document.body;
const savedMode = localStorage.getItem('darkMode');
if (savedMode === 'true') {
    body.classList.add('dark-mode');
    toggle.textContent = '☀️';
} else {
    toggle.textContent = '🌙';
}
toggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    const isDark = body.classList.contains('dark-mode');
    toggle.textContent = isDark ? '☀️' : '🌙';
    localStorage.setItem('darkMode', isDark);
});

// Interactive puzzle
const puzzle = document.getElementById('puzzle');
puzzle.addEventListener('click', () => {
    puzzle.style.transform = 'translateY(-50%) rotate(360deg)';
    setTimeout(() => {
        puzzle.style.transform = 'translateY(-50%) rotate(0deg)';
    }, 500);
});

// Smooth scrolling for nav links
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
    });
});

// Scroll-to-top button functionality
const scrollToTopBtn = document.getElementById('scroll-to-top');
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        scrollToTopBtn.classList.add('show');
    } else {
        scrollToTopBtn.classList.remove('show');
    }
});
scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});