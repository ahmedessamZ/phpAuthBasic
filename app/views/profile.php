<?php
if (!isset($_SESSION['user_id'])){
    header('location:'. URLROOT . '/users/login');
}
require APPROOT .'/views/includes/head.php';
require APPROOT .'/views/includes/navigation.php';
?>
<div id="profile">
    <div id="profile-content">
        <h1>***** My Profile *****</h1>
        <h2>User Data</h2>
        <p>UserName: <?php echo $_SESSION['username']; ?></p>
        <p>Email: <?php echo $_SESSION['email']; ?></p>
    </div>
</div>
<?php require APPROOT .'/views/includes/footer.php'; ?>