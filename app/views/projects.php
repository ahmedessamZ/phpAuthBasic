<?php
require APPROOT .'/views/includes/head.php';
require APPROOT .'/views/includes/navigation.php';
?>

<div class="projects-section">
    <div class="projects-header">
        <h1>Our Projects</h1>
        <p class="subtitle">Discover Our Latest Work & Achievements</p>
    </div>

    <div class="projects-filter">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="web">Web Development</button>
        <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
        <button class="filter-btn" data-filter="design">UI/UX Design</button>
    </div>
      <div class="projects-grid">
        <!-- Web Development Projects -->
        <div class="project-card" data-category="web">
            <div class="project-image">                <div class="project-img-placeholder web-dev">
                    <i class="fas fa-graduation-cap"></i>
                    <span>E-Learning Platform</span>
                </div>
            </div>
            <div class="project-info">
                <h3>E-Learning Platform</h3>
                <p>Comprehensive LMS with live classes and interactive assessments</p>
                <div class="project-tags">
                    <span>PHP</span>
                    <span>MySQL</span>
                    <span>WebRTC</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="web">
            <div class="project-image">
                <div class="project-img-placeholder web-dev">
                    <i class="fas fa-shopping-cart"></i>
                    <span>E-Commerce Platform</span>
                </div>
            </div>
            <div class="project-info">
                <h3>E-Commerce Platform</h3>
                <p>Full-featured marketplace with real-time inventory management</p>
                <div class="project-tags">
                    <span>Laravel</span>
                    <span>Vue.js</span>
                    <span>PostgreSQL</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="web">
            <div class="project-image">
                <div class="project-img-placeholder web-dev">
                    <i class="fas fa-tasks"></i>
                    <span>Project Management System</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Project Management System</h3>
                <p>Agile project management tool with real-time collaboration</p>
                <div class="project-tags">
                    <span>React</span>
                    <span>Node.js</span>
                    <span>Socket.io</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="web">
            <div class="project-image">
                <div class="project-img-placeholder web-dev">
                    <i class="fas fa-calendar-alt"></i>
                    <span>Booking System</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Booking System</h3>
                <p>Advanced reservation system for hotels and venues</p>
                <div class="project-tags">
                    <span>Django</span>
                    <span>Redis</span>
                    <span>Celery</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="web">
            <div class="project-image">
                <div class="project-img-placeholder web-dev">
                    <i class="fas fa-chart-line"></i>
                    <span>Analytics Dashboard</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Analytics Dashboard</h3>
                <p>Real-time data visualization and reporting platform</p>
                <div class="project-tags">
                    <span>Next.js</span>
                    <span>D3.js</span>
                    <span>GraphQL</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="web">
            <div class="project-image">
                <div class="project-img-placeholder web-dev">
                    <i class="fas fa-video"></i>
                    <span>Video Streaming Platform</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Video Streaming Platform</h3>
                <p>High-performance video streaming service with adaptive bitrate</p>
                <div class="project-tags">
                    <span>FFmpeg</span>
                    <span>AWS</span>
                    <span>Node.js</span>
                </div>
            </div>
        </div>

        <!-- Mobile App Projects -->
        <div class="project-card" data-category="mobile">
            <div class="project-image">
                <div class="project-img-placeholder mobile-app">
                    <i class="fas fa-heartbeat"></i>
                    <span>Fitness Tracking</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Fitness Tracking App</h3>
                <p>Comprehensive health and fitness tracking with AI coaching</p>
                <div class="project-tags">
                    <span>React Native</span>
                    <span>TensorFlow</span>
                    <span>Firebase</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="mobile">
            <div class="project-image">
                <div class="project-img-placeholder mobile-app">
                    <i class="fas fa-utensils"></i>
                    <span>Food Delivery</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Food Delivery App</h3>
                <p>Real-time food ordering and delivery tracking system</p>
                <div class="project-tags">
                    <span>Flutter</span>
                    <span>Google Maps</span>
                    <span>Stripe</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="mobile">
            <div class="project-image">
                <div class="project-img-placeholder mobile-app">
                    <i class="fas fa-language"></i>
                    <span>Language Learning</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Language Learning App</h3>
                <p>Interactive language learning with speech recognition</p>
                <div class="project-tags">
                    <span>Swift</span>
                    <span>CoreML</span>
                    <span>ARKit</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="mobile">
            <div class="project-image">
                <div class="project-img-placeholder mobile-app">
                    <i class="fas fa-wallet"></i>
                    <span>Digital Wallet</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Digital Wallet App</h3>
                <p>Secure digital payment and cryptocurrency management</p>
                <div class="project-tags">
                    <span>Kotlin</span>
                    <span>Blockchain</span>
                    <span>Biometrics</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="mobile">
            <div class="project-image">
                <div class="project-img-placeholder mobile-app">
                    <i class="fas fa-camera"></i>
                    <span>AR Social Media</span>
                </div>
            </div>
            <div class="project-info">
                <h3>AR Social Media App</h3>
                <p>Social platform with augmented reality filters and effects</p>
                <div class="project-tags">
                    <span>Unity</span>
                    <span>ARCore</span>
                    <span>C#</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="mobile">
            <div class="project-image">
                <div class="project-img-placeholder mobile-app">
                    <i class="fas fa-car"></i>
                    <span>Smart Parking</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Smart Parking App</h3>
                <p>IoT-based parking space finder and booking system</p>
                <div class="project-tags">
                    <span>IoT</span>
                    <span>React Native</span>
                    <span>MongoDB</span>
                </div>
            </div>
        </div>

        <!-- UI/UX Design Projects -->
        <div class="project-card" data-category="design">
            <div class="project-image">
                <div class="project-img-placeholder ui-design">
                    <i class="fas fa-hospital-user"></i>
                    <span>Healthcare Dashboard</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Healthcare Dashboard</h3>
                <p>Patient management system with intuitive interface</p>
                <div class="project-tags">
                    <span>Figma</span>
                    <span>Design System</span>
                    <span>HIPAA</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="design">
            <div class="project-image">
                <div class="project-img-placeholder ui-design">
                    <i class="fas fa-mobile-alt"></i>
                    <span>Banking App Design</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Banking App Design</h3>
                <p>Modern mobile banking experience with focus on security</p>
                <div class="project-tags">
                    <span>Adobe XD</span>
                    <span>Prototype</span>
                    <span>Wireframe</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="design">
            <div class="project-image">
                <div class="project-img-placeholder ui-design">
                    <i class="fas fa-gamepad"></i>
                    <span>Game Interface</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Game Interface Design</h3>
                <p>Immersive UI/UX design for a multiplayer game</p>
                <div class="project-tags">
                    <span>Unity</span>
                    <span>UI Animation</span>
                    <span>Mockup</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="design">
            <div class="project-image">
                <div class="project-img-placeholder ui-design">
                    <i class="fas fa-tv"></i>
                    <span>Smart TV Interface</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Smart TV Interface</h3>
                <p>User-friendly interface for smart TV applications</p>
                <div class="project-tags">
                    <span>Sketch</span>
                    <span>Motion UI</span>
                    <span>UX Research</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="design">
            <div class="project-image">
                <div class="project-img-placeholder ui-design">
                    <i class="fas fa-book-reader"></i>
                    <span>Digital Magazine</span>
                </div>
            </div>
            <div class="project-info">
                <h3>Digital Magazine Design</h3>
                <p>Interactive digital publication with rich media</p>
                <div class="project-tags">
                    <span>InDesign</span>
                    <span>Typography</span>
                    <span>Animation</span>
                </div>
            </div>
        </div>

        <div class="project-card" data-category="design">
            <div class="project-image">
                <div class="project-img-placeholder ui-design">
                    <i class="fas fa-vr-cardboard"></i>
                    <span>VR Experience</span>
                </div>
            </div>
            <div class="project-info">
                <h3>VR Experience Design</h3>
                <p>Immersive virtual reality interface and interactions</p>
                <div class="project-tags">
                    <span>3D Design</span>
                    <span>Unity</span>
                    <span>Interaction</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projects = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const filter = button.getAttribute('data-filter');

            projects.forEach(project => {
                if (filter === 'all' || project.getAttribute('data-category') === filter) {
                    project.style.display = 'block';
                    setTimeout(() => project.style.opacity = '1', 10);
                } else {
                    project.style.opacity = '0';
                    setTimeout(() => project.style.display = 'none', 500);
                }
            });
        });
    });
});
</script>