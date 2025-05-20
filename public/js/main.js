// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});


// Newsletter form submission
const newsletterForm = document.querySelector('.newsletter-form');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;
        // Here you would typically send this to your backend
        alert('Thank you for subscribing with: ' + email);
        this.reset();
    });
}

// Intersection Observer for animation triggers
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px'
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
            observer.unobserve(entry.target); // Only animate once
        }
    });
}, observerOptions);

// Observe feature cards
document.querySelectorAll('.feature-card').forEach(card => {
    observer.observe(card);
});

// Add loading animation to the page
document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('loaded');
});

// Toaster Notification System
class ToasterNotification {
    constructor() {
        this.createToasterContainer();
    }

    createToasterContainer() {
        if (!document.getElementById('toaster-container')) {
            const container = document.createElement('div');
            container.id = 'toaster-container';
            document.body.appendChild(container);
        }
    }

    show(message, type = 'success') {
        const toast = document.createElement('div');
        toast.className = `toaster-notification ${type}`;
        toast.textContent = message;

        const container = document.getElementById('toaster-container');
        container.appendChild(toast);

        // Trigger entrance animation
        setTimeout(() => {
            toast.classList.add('show');
        }, 10);

        // Remove the toast after 3 seconds
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => {
                container.removeChild(toast);
            }, 300); // Wait for exit animation to complete
        }, 3000);
    }
}

// Initialize toaster
const toaster = new ToasterNotification();

// Check for flash messages when page loads
document.addEventListener('DOMContentLoaded', function() {
    const flashMessage = document.querySelector('.flash-message');
    if (flashMessage) {
        const message = flashMessage.textContent;
        const type = flashMessage.classList.contains('success') ? 'success' : 'error';
        toaster.show(message, type);
        flashMessage.remove(); // Remove the original message
    }
});
