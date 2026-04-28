// public/js/script.js

// Mobile menu
function toggleMobileMenu() {
    var menu = document.getElementById('mobileMenu');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        setTimeout(function() { menu.classList.remove('opacity-0'); menu.classList.add('opacity-100'); }, 10);
        document.body.style.overflow = 'hidden';
    } else {
        menu.classList.remove('opacity-100');
        menu.classList.add('opacity-0');
        setTimeout(function() { menu.classList.add('hidden'); }, 300);
        document.body.style.overflow = '';
    }
}

// FAQ toggle
function toggleFaq(item) {
    var wasOpen = item.classList.contains('open');
    // Close all
    document.querySelectorAll('.faq-item').forEach(function(el) {
        el.classList.remove('open');
    });
    // Toggle current
    if (!wasOpen) {
        item.classList.add('open');
    }
}

// Reveal on scroll
function reveal() {
    var reveals = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        if (elementTop < windowHeight - 80) {
            reveals[i].classList.add('active');
        }
    }
}

// Counter animation
var countersAnimated = false;
function animateCounters() {
    if (countersAnimated) return;
    var counters = document.querySelectorAll('[data-count]');
    if (counters.length === 0) return;
    var firstCounter = counters[0].getBoundingClientRect().top;
    if (firstCounter < window.innerHeight - 100) {
        countersAnimated = true;
        counters.forEach(function(counter) {
            var target = parseInt(counter.getAttribute('data-count'));
            var duration = 2000;
            var start = 0;
            var startTime = null;
            function step(timestamp) {
                if (!startTime) startTime = timestamp;
                var progress = Math.min((timestamp - startTime) / duration, 1);
                var eased = 1 - Math.pow(1 - progress, 3);
                counter.textContent = Math.floor(eased * target);
                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    counter.textContent = target;
                }
            }
            requestAnimationFrame(step);
        });
    }
}

// Back to top button
function handleBackToTop() {
    var btn = document.getElementById('backToTop');
    if (window.scrollY > 600) {
        btn.style.opacity = '1';
        btn.style.transform = 'translateY(0)';
        btn.style.pointerEvents = 'auto';
    } else {
        btn.style.opacity = '0';
        btn.style.transform = 'translateY(16px)';
        btn.style.pointerEvents = 'none';
    }
}

// Nav active state on scroll
function updateActiveNav() {
    var sections = document.querySelectorAll('section[id]');
    var scrollPos = window.scrollY + 120;
    sections.forEach(function(section) {
        var top = section.offsetTop;
        var height = section.offsetHeight;
        var id = section.getAttribute('id');
        var link = document.querySelector('nav a[href="#' + id + '"]');
        if (link) {
            if (scrollPos >= top && scrollPos < top + height) {
                link.classList.add('text-white');
                link.classList.remove('text-[#BFBFBF]');
            } else {
                link.classList.remove('text-white');
                link.classList.add('text-[#BFBFBF]');
            }
        }
    });
}

// Init & Events
window.addEventListener('load', function() {
    reveal();
    handleBackToTop();

    // Loading classes
    document.documentElement.classList.add('tw-loaded');
    document.body.classList.add('loaded');
});

window.addEventListener('scroll', function() {
    reveal();
    animateCounters();
    handleBackToTop();
    updateActiveNav();
});

// Script AJAX pour le formulaire
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const feedbackDiv = document.getElementById('formFeedback');

    if (!form) {
        console.error("Erreur : Le formulaire avec l'ID 'contactForm' n'a pas été trouvé.");
        return;
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        try {
            const originalBtnContent = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Envoi...';
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-75', 'cursor-not-allowed');
            feedbackDiv.classList.add('hidden');

            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur serveur: ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    feedbackDiv.className = 'alert-success mb-6';
                    feedbackDiv.innerHTML = '<i class="fa-solid fa-check-circle"></i> ' + data.message;
                    feedbackDiv.classList.remove('hidden');
                    form.reset();
                    submitBtn.innerHTML = '<i class="fa-solid fa-check"></i> Envoyé !';
                    setTimeout(() => {
                        submitBtn.innerHTML = originalBtnContent;
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                    }, 3000);
                } else {
                    showError(data.message || "Une erreur inconnue est survenue.");
                }
            })
            .catch(error => {
                console.error('Erreur AJAX:', error);
                showError("Erreur de connexion ou technique. Veuillez réessayer.");
            })
            .finally(() => {
                if (!submitBtn.innerHTML.includes('Envoyé')) {
                    submitBtn.innerHTML = originalBtnContent;
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                }
            });

        } catch (error) {
            console.error("Erreur critique dans le script : ", error);
            alert("Une erreur est survenue. Vérifiez la console (F12).");
        }
    });

    function showError(message) {
        feedbackDiv.className = 'alert-error mb-6';
        feedbackDiv.innerHTML = message;
        feedbackDiv.classList.remove('hidden');
        submitBtn.innerHTML = 'Réessayer';
        submitBtn.disabled = false;
        submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
    }
});
