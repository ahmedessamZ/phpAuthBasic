<?php
require APPROOT .'/views/includes/head.php';
require APPROOT .'/views/includes/navigation.php';
?>

<div class="contact-section">
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p class="subtitle">We're Here to Help</p>
    </div>

    <div class="contact-container">
        <div class="contact-info">
            <div class="info-card">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Main Office</h3>
                <p>123 Learning Street<br>Education City, ED 12345<br>United States</p>
            </div>
            <div class="info-card">
                <i class="fas fa-phone"></i>
                <h3>Phone Support</h3>
                <p>Main: +1 (555) 123-4567<br>Toll Free: +1 (800) 123-4567<br>Mon - Fri, 9am - 6pm EST</p>
            </div>
            <div class="info-card">
                <i class="fas fa-envelope"></i>
                <h3>Email Departments</h3>
                <p>General: info@learning.com<br>Support: support@learning.com<br>Career: jobs@learning.com</p>
            </div>
        </div>
    </div>

    <div class="social-connect">
        <h2>Connect With Us</h2>
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
        </div>
    </div>

    <div class="office-locations">
        <h2>Our Locations</h2>
        <div class="locations-grid">
            <div class="location-card">
                <div class="location-info">
                    <h3>New York</h3>
                    <p>123 Learning Street<br>Education City, ED 12345<br>United States</p>
                </div>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1645567990544!5m2!1sen!2s" 
                        width="100%" 
                        height="200" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
            <div class="location-card">
                <div class="location-info">
                    <h3>San Francisco</h3>
                    <p>456 Tech Avenue<br>Innovation District<br>San Francisco, CA 94105</p>
                </div>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100939.98555098464!2d-122.50764017075042!3d37.75781499856396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1655338754040!5m2!1sen!2sus"
                        width="100%" 
                        height="200" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="business-hours">
        <h2>Business Hours</h2>
        <div class="hours-grid">
            <div class="hours-card">
                <h3>Customer Support</h3>
                <ul>
                    <li><span>Monday - Friday:</span> 9:00 AM - 6:00 PM EST</li>
                    <li><span>Saturday:</span> 10:00 AM - 2:00 PM EST</li>
                    <li><span>Sunday:</span> Closed</li>
                </ul>
            </div>
            <div class="hours-card">
                <h3>Technical Support</h3>
                <ul>
                    <li><span>Monday - Friday:</span> 24/7</li>
                    <li><span>Saturday:</span> 9:00 AM - 5:00 PM EST</li>
                    <li><span>Sunday:</span> 10:00 AM - 4:00 PM EST</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate info cards on scroll
    const cards = document.querySelectorAll('.info-card');
    const form = document.querySelector('.contact-form');
    
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
    
    function animateOnScroll() {
        cards.forEach(card => {
            if (isInViewport(card)) {
                card.classList.add('animate');
            }
        });
        
        if (isInViewport(form)) {
            form.classList.add('animate');
        }
    }
    
    // Initial check
    animateOnScroll();
    
    // Check on scroll
    window.addEventListener('scroll', animateOnScroll);
});
</script>