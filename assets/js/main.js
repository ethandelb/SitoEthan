
document.addEventListener("DOMContentLoaded", function() {
 
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
});
    const menuBtn = document.getElementById('mobile-menu-btn');
    const navMenu = document.getElementById('nav-menu');

    menuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {
        if (!menuBtn.contains(e.target) && !navMenu.contains(e.target)) {
            navMenu.classList.remove('active');
        }
    });