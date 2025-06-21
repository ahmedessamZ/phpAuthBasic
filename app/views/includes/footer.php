<?php
/**
 * Footer template
 * This file contains the footer section that will be included in all pages
 */
?>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Your trusted partner in web development and technology solutions.</p>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="<?php echo URLROOT; ?>">Home</a></li>
                <li><a href="<?php echo URLROOT; ?>/pages/about">About</a></li>
                <li><a href="<?php echo URLROOT; ?>/pages/projects">Projects</a></li>
                <li><a href="<?php echo URLROOT; ?>/pages/contact">Contact</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Contact Info</h3>
            <p>Email: info@example.com</p>
            <p>Phone: (123) 456-7890</p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Your Company Name. All rights reserved.</p>
    </div>
</footer>
