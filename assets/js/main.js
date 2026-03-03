document.addEventListener("DOMContentLoaded", function() {
    
    // --- 1. ANIMAZIONI ALLO SCROLL ---
    const elementsToFadeIn = document.querySelectorAll('.fade-in-section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target); 
            }
        });
    }, {
        threshold: 0.15
    });

    elementsToFadeIn.forEach(element => {
        observer.observe(element);
    });

    // --- 2. MENU HAMBURGER ---
    const menuBtn = document.getElementById('mobile-menu-btn');
    const navMenu = document.getElementById('nav-menu');

    if (menuBtn && navMenu) {
        // Apri/Chiudi il menu cliccando sull'icona
        menuBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Evita che il click chiuda subito il menu
            this.classList.toggle('open'); // Transizione in "X"
            navMenu.classList.toggle('active'); // Mostra il menu
        });

        // Chiudi il menu cliccando fuori
        document.addEventListener('click', (e) => {
            if (!menuBtn.contains(e.target) && !navMenu.contains(e.target)) {
                menuBtn.classList.remove('open');
                navMenu.classList.remove('active');
            }
        });
    }
});
