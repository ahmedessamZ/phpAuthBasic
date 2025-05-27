<?php 
    // Get the current URL path to determine active page
    $currentPage = strtolower($_SERVER['REQUEST_URI']);
    $urlParts = explode('/', trim($currentPage, '/'));
    // Get the last meaningful part of the URL
    $activePage = '';
    foreach($urlParts as $part) {
        if($part != '' && strtolower($part) != 'pages') {
            $activePage = strtolower($part);
        }
    }
    if ($activePage == '') $activePage = 'index';
?>
<?php if(isset($_SESSION['flash_message'])): ?>
    <?php echo flash(); ?>
<?php endif; ?>
<nav id="navbar" class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/index" class="<?php echo $activePage == 'index' ? 'active' : ''; ?>">Home</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/about" class="<?php echo $activePage == 'about' ? 'active' : ''; ?>">About</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/projects" class="<?php echo $activePage == 'projects' ? 'active' : ''; ?>">Projects</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/profile" class="<?php echo $activePage == 'profile' ? 'active' : ''; ?>">My Profile</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/pages/contact" class="<?php echo $activePage == 'contact' ? 'active' : ''; ?>">Contact</a>
        </li>
        <li class="btn-login">
            <?php if (isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/Users/Logout">Log out</a>
            <?php else: ?>
                <a href="<?php echo URLROOT; ?>/Users/Login">Login</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>
<?php
    // Display flash messages if any
    if (function_exists('flash')) {
        echo flash();
    }
?>