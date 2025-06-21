<?php
require APPROOT .'/views/includes/head.php';
require APPROOT .'/views/includes/navigation.php';
?>

<div class="about-section">
    <div class="about-header">
        <h1>About Us</h1>
        <p class="subtitle">Learn, Grow, Succeed</p>
    </div>
    
    <div class="about-content">
        <div class="mission-vision">
            <div class="mission">
                <i class="fas fa-bullseye"></i>
                <h2>Our Mission</h2>
                <p>To provide accessible, high-quality learning opportunities that empower individuals to achieve their full potential and contribute meaningfully to society.</p>
            </div>
            
            <div class="vision">
                <i class="fas fa-eye"></i>
                <h2>Our Vision</h2>
                <p>To be the leading platform for transformative learning experiences, fostering a global community of lifelong learners.</p>
            </div>
        </div>

        <div class="values-section">
            <h2>Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <i class="fas fa-star"></i>
                    <h3>Excellence</h3>
                    <p>Striving for the highest standards in everything we do.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Integrity</h3>
                    <p>Operating with honesty, transparency, and ethical principles.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-users"></i>
                    <h3>Community</h3>
                    <p>Fostering a supportive and inclusive learning environment.</p>
                </div>
                <div class="value-card">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Innovation</h3>
                    <p>Embracing new ideas and continuous improvement.</p>
                </div>
            </div>
        </div>

        <div class="team-section">
            <h2>Our Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="team-member-image">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>John Doe</h3>
                    <p>Founder & CEO</p>
                </div>
                <div class="team-member">
                    <div class="team-member-image">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3>Jane Smith</h3>
                    <p>Head of Education</p>
                </div>
                <div class="team-member">
                    <div class="team-member-image">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Mike Johnson</h3>
                    <p>Technical Director</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require APPROOT .'/views/includes/footer.php'; ?>
