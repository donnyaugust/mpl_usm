<?php

class Auth {

    public static function authAdmin()
    {
        if(!isset($_SESSION['Admin'])) {
            
            header('Location: ' . BASEURL . 'Login/failLogin');
            
        }
    }

    public static function authUser()
    {
        if(!isset($_SESSION['User'])) {
            
            header('Location: ' . BASEURL . 'Login/failLogin');
            
        }
    }

}

?>