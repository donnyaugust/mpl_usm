<?php

class Login extends Controller {

    public function __construct()
    {
        if(isset($_SESSION['Admin'])) {
            header('Location: ' . BASEURL . 'admin');
        } else if(isset($_SESSION['User'])) {
            header('Location: ' . BASEURL . 'user');
        }    
    }
    
    public function index()
    {
        $data['title']  = 'Login';

        $this -> view('home/temp/head', $data);
        $this -> view('home/temp/nav');
        $this -> view('login/login');
        $this -> view('home/temp/foot');
    }

    public function getLogin()
    {
        $chek = $this -> model('Login_model') -> getUser();

        if($chek == 'Admin' ) {
            Flasher::setFlashLogin('"Login Admin"', 'SUCCESS', 'danger');
            header('Location: ' . BASEURL . 'admin');
        } else if ($chek == 'Member' ) {
            Flasher::setFlashLogin('"Login"', 'SUCCESS', 'danger');
            header('Location: ' . BASEURL . 'user');
        } else {
            Flasher::setFlashLogin('"Username or Password"', 'INVALID', 'danger');
            header('Location: ' . BASEURL . 'login');
        }
    }

    public function logout() 
    {
        if(isset($_SESSION['Admin'])) {
            unset($_SESSION['Admin']);
            Flasher::setFlashLogin('"Logout"', 'SUCCESS', 'danger');
            header('Location: ' . BASEURL . 'Login');
        } else if(isset($_SESSION['User'])) {
            unset($_SESSION['User']);
            Flasher::setFlashLogin('"Logout"', 'SUCCESS', 'danger');
            header('Location: ' . BASEURL . 'Login');
        }
        
    }

    public function failLogin() 
    {
        Flasher::setFlashLogin('"Please ', 'LOGIN"', 'danger');
        header('Location: ' . BASEURL . 'Login');
    }

}

?>