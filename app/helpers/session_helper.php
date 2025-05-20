<?php

session_start();

function isLoggedIn() {
    if(isset($_SESSION['user_id'])) {
        return true;
    } else {
        return false;
    }
}

function flash($message = '', $type = 'success') {
    if (!empty($message)) {
        // Setting the message
        $_SESSION['flash_message'] = $message;
        $_SESSION['flash_type'] = $type;
    } elseif (isset($_SESSION['flash_message'])) {
        // Getting and removing the message
        $message = '<div class="flash-message ' . $_SESSION['flash_type'] . '">' 
                    . $_SESSION['flash_message'] . 
                  '</div>';
        
        // Remove the flash message from session
        unset($_SESSION['flash_message']);
        unset($_SESSION['flash_type']);
        
        return $message;
    }
}
