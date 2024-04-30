<<<<<<< HEAD
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

function isloggedIn(){
    if (isset($_SESSION['userId'])){
        return true;
    }
    else{
        return false;
    }
}

function logOut(){
    if (isset($_SESSION['userId'])){
        unset($_SESSION['userId']);
            unset($_SESSION['userName']);
            unset($_SESSION['userEmail']);
            unset($_SESSION['userType']);
            unset($_SESSION['userStatus']);
            session_unset();
            session_destroy();
    }
    


}

function flash($name = '', $message = '', $class = 'form-message form-message-red'){
    if(!empty($name)){
        if(!empty($message) && empty($_SESSION[$name])){
            $_SESSION[$name] = $message;
            $_SESSION[$name.'_class'] = $class;
        }else if(empty($message) && !empty($_SESSION[$name])){
            $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : $class;
            echo '<div class="'.$class.'" >'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}

=======
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

function isloggedIn(){
    if (isset($_SESSION['userId'])){
        return true;
    }
    else{
        return false;
    }
}

function logOut(){
    if (isset($_SESSION['userId'])){
        unset($_SESSION['userId']);
            unset($_SESSION['userName']);
            unset($_SESSION['userEmail']);
            unset($_SESSION['userType']);
            unset($_SESSION['userStatus']);
            session_unset();
            session_destroy();
    }
    


}

function flash($name = '', $message = '', $class = 'form-message form-message-red'){
    if(!empty($name)){
        if(!empty($message) && empty($_SESSION[$name])){
            $_SESSION[$name] = $message;
            $_SESSION[$name.'_class'] = $class;
        }else if(empty($message) && !empty($_SESSION[$name])){
            $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : $class;
            echo '<div class="'.$class.'" >'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}

>>>>>>> main
