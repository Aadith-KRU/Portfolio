
window.addEventListener('scroll', function() {
    const fadeInSections = document.querySelectorAll('.fade-in');
    
    fadeInSections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;
        const triggerPoint = window.innerHeight / 1.3;
        
        if (sectionTop < triggerPoint) {
            section.classList.add('show');
        } else {
            section.classList.remove('show');
        }
    });
});







