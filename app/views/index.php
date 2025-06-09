<?php
require APPROOT .'/views/includes/head.php';
require APPROOT .'/views/includes/navigation.php';
?>

<div id="section-landing">
    <div id="wrapper-landing">
        <h1>Human beings learn</h1>
        <h2>Until the day they die</h2>
        <p class="welcome-text">Welcome to our learning cources. Explore, Learn, Grow.</p>
        <div class="cta-buttons">
            <a href="#features" class="btn-primary">Get Started</a>
            <a href="#learn-more" class="btn-secondary">Learn More</a>
        </div>
    </div>
</div>

<div class="features-section" id="features">
    <h2 class="section-title">Featured Content</h2>
    <div class="cards-container">
        <div class="feature-card">
            <i class="fas fa-book-open card-icon"></i>
            <h3>Online Courses</h3>
            <p>Access hundreds of courses from top educators.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-users card-icon"></i>
            <h3>Community</h3>
            <p>Join a vibrant learning community.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-certificate card-icon"></i>
            <h3>Certificates</h3>
            <p>Earn certificates for your achievements.</p>
        </div>
    </div>
</div>

<div class="newsletter-section">
    <div class="newsletter-content">
        <h2>Stay Updated</h2>
        <p>Subscribe to our newsletter for the latest updates and learning resources.</p>
        <form class="newsletter-form">
            <input type="email" placeholder="Enter your email" required>
            <button type="submit" class="btn-subscribe">Subscribe</button>
        </form>
    </div>
</div>