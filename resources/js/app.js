// Simple intersection observer for reveal animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('opacity-100', 'translate-y-0');
            entry.target.classList.remove('opacity-0', 'translate-y-8');
        }
    });
}, {
    threshold: 0.1
});

document.querySelectorAll('section > div > div').forEach(el => {
    el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
    observer.observe(el);
});

function toggleAccordion(element) {
    const item = element.parentElement;
    const isActive = item.classList.contains('active');

    // Close all other items
    document.querySelectorAll('.accordion-item').forEach(otherItem => {
        if (otherItem !== item) {
            otherItem.classList.remove('active');
        }
    });

    // Toggle current item
    item.classList.toggle('active');
}

// Search highlight logic
const searchInput = document.querySelector('input[type="text"]');
searchInput.addEventListener('input', (e) => {
    const term = e.target.value.toLowerCase();
    const items = document.querySelectorAll('.accordion-item');

    items.forEach(item => {
        const text = item.querySelector('span').textContent.toLowerCase();
        if (text.includes(term)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
});