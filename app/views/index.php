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

<div class="learning-paths-section">
    <h2 class="section-title">Learning Paths</h2>
    <p class="section-subtitle">Choose Your Journey to Success</p>
    
    <div class="paths-container">
        <div class="path-card">
            <div class="path-icon">
                <i class="fas fa-code"></i>
            </div>
            <h3>Web Development</h3>
            <p class="path-description">Master modern web technologies from front-end to back-end development.</p>
            <ul class="path-features">
                <li><i class="fas fa-check-circle"></i> HTML, CSS, JavaScript</li>
                <li><i class="fas fa-check-circle"></i> React & Node.js</li>
                <li><i class="fas fa-check-circle"></i> Database Design</li>
            </ul>
            <div class="path-footer">
                <span class="duration"><i class="far fa-clock"></i> 12 Weeks</span>
                <a href="#" class="path-btn">Learn More</a>
            </div>
        </div>

        <div class="path-card">
            <div class="path-icon">
                <i class="fas fa-robot"></i>
            </div>
            <h3>AI & Machine Learning</h3>
            <p class="path-description">Dive into the world of artificial intelligence and data science.</p>
            <ul class="path-features">
                <li><i class="fas fa-check-circle"></i> Python Programming</li>
                <li><i class="fas fa-check-circle"></i> Neural Networks</li>
                <li><i class="fas fa-check-circle"></i> Deep Learning</li>
            </ul>
            <div class="path-footer">
                <span class="duration"><i class="far fa-clock"></i> 16 Weeks</span>
                <a href="#" class="path-btn">Learn More</a>
            </div>
        </div>

        <div class="path-card">
            <div class="path-icon">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <h3>Mobile Development</h3>
            <p class="path-description">Create powerful mobile applications for iOS and Android.</p>
            <ul class="path-features">
                <li><i class="fas fa-check-circle"></i> Swift & Kotlin</li>
                <li><i class="fas fa-check-circle"></i> Cross-platform Dev</li>
                <li><i class="fas fa-check-circle"></i> App Publishing</li>
            </ul>
            <div class="path-footer">
                <span class="duration"><i class="far fa-clock"></i> 14 Weeks</span>
                <a href="#" class="path-btn">Learn More</a>
            </div>
        </div>
    </div>
</div>