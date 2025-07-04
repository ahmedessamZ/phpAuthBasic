<?php
require APPROOT .'/views/includes/head.php';
?>

<div id="navbar">
    <?php
    require APPROOT .'/views/includes/navigation.php';
    ?>
</div>

<div class="container-reg">
    <div class="wrapper-login">
        <h2>
             Register
        </h2>
        <form action="<?php echo URLROOT; ?>/users/register" method="POST">

            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback"> <?php echo $data['usernameError']; ?></span>

            <input type="email" placeholder="Email *" name="email">
            <span class="invalidFeedback"> <?php echo $data['emailError']; ?></span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback"> <?php echo $data['passwordError']; ?></span>

            <input type="password" placeholder="Confirm Password *" name="confirmPassword">
            <span class="invalidFeedback"> <?php echo $data['confirmPasswordError']; ?></span>

            <button id="submit" type="submit" value="submit">Register</button>

            <p class="options">Already have an account ? <a href="<?php echo URLROOT; ?>/users/login">Log in</a></p>

        </form>
    </div>
</div>

<?php require APPROOT .'/views/includes/footer.php'; ?>