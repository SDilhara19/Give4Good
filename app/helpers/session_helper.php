<?php

if(!isset($_SESSION)){
    session_start();

    if (isset($_SESSION['userId']) && $_SESSION['userType'] == 'admin') {
        $timeout = 600; // 10 minutes = 600s

        if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $timeout)) {
            unset($_SESSION['userId']);
            unset($_SESSION['userName']);
            unset($_SESSION['userEmail']);
            unset($_SESSION['userType']);
            unset($_SESSION['userStatus']);
            session_unset();
            session_destroy();
            redirect(URLROOT . '/Admin_Login');
            //redirect(URLROOT . '/Admin_Login/logout');
            // exit();
        }

        $_SESSION['last_activity'] = time();
    }
}




function redirect($location){
    header("location: ".$location);
    exit();
}
?>