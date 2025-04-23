<?php
require APPROOT .'/views/includes/head.php';
?>

    <div id="navbar">
        <?php
            require APPROOT .'/views/includes/navigation.php';
        ?>
    </div>


    <div class="container-login">
        <div class="wrapper-login">
            <h2>
                Log In
            </h2>
            <form action="<?php echo URLROOT; ?>/users/login" method="POST">

                <input type="text" placeholder="Username *" name="username">
                <span class="invalidFeedback"> <?php echo $data['usernameError']; ?></span>

                <input type="password" placeholder="Password *" name="password">
                <span class="invalidFeedback"> <?php echo $data['passwordError']; ?></span>


                <button id="submit" type="submit" value="submit">Log in</button>


                <p class="options">Not register yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account</a></p>

            </form>
        </div>
    </div>