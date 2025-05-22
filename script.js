document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menuToggle');
    const navigation = document.getElementById('main-navigation');
    const navLinks = document.querySelectorAll('#main-navigation a');

    menuToggle.addEventListener('click', function () {
        const isOpen = menuToggle.classList.toggle('open');
        navigation.classList.toggle('open');
        menuToggle.setAttribute('aria-expanded', isOpen);
    });

    // Chiudi menu cliccando fuori
    document.addEventListener('click', function(e) {
        if (!menuToggle.contains(e.target) && !navigation.contains(e.target)) {
            menuToggle.classList.remove('open');
            navigation.classList.remove('open');
            menuToggle.setAttribute('aria-expanded', 'false');
        }
    });

    // Chiudi menu e fai scroll alla sezione con animazione fluida
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                e.preventDefault();

                // Chiudi il menu
                menuToggle.classList.remove('open');
                navigation.classList.remove('open');
                menuToggle.setAttribute('aria-expanded', 'false');

                // Scroll fluido
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
