<?php

class Cont {

/* Core Controllers */

    public function view($view, $data = [])
    {
        require_once 'views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once $model . '.php';
        return new $model;
    }

/* End Controllers */

/* Home Controllers */

    public function index()
    {
        /* index Home
            $data['title']  = 'MAPALA USM';

            $this -> view('home/temp/head', $data);
            $this -> view('home/heading');
            $this -> view('home/temp/nav');
            $this -> view('home/content');
            $this -> view('home/temp/foot');
        */

        app::authIndex();
        $data['title']  = 'Login';

        $this -> view('home/temp/head', $data);
        $this -> view('login/login');
        $this -> view('home/temp/foot');
    }

    public function about()
    {
        $data['title']  = 'About';

        $this -> view('home/temp/head', $data);
        $this -> view('home/temp/nav');
        $this -> view('home/about/content');
        $this -> view('home/temp/foot');
    }

    public function activity()
    {
        $data['title']  = 'Activity';

        $this -> view('home/temp/head', $data);
        $this -> view('home/temp/nav');
        $this -> view('home/activity/content', $data);
        $this -> view('home/temp/foot');
    }
/* End Controllers */

/* Login Controllers */

    public function login()
    {
        $data['title']  = 'Login';

        $this -> view('home/temp/head', $data);
        $this -> view('home/temp/nav');
        $this -> view('login/login');
        $this -> view('home/temp/foot');
    }

    public function getLogin()
    {
        $chek = $this -> model('Model') -> getUser();

        if($chek == 'Admin' ) {
            App::setFlashLogin('"Login Admin"', 'SUCCESS', 'danger');
            header('Location: ' . BASEURL . 'cont/admin');
        } else if ($chek == 'Member' ) {
            App::setFlashLogin('"Login"', 'SUCCESS', 'danger');
            header('Location: ' . BASEURL . 'cont/user');
        } else {
            App::setFlashLogin('"Username or Password"', 'INVALID', 'danger');
            header('Location: ' . BASEURL);
        }
    }

    public function logout() 
    {
        if(isset($_SESSION['Admin'])) {
            unset($_SESSION['Admin']);
            App::setFlashLogin('"Logout"', 'SUCCESS', 'danger');
            header('Location: ' . BASEURL);
        } else if(isset($_SESSION['User'])) {
            unset($_SESSION['User']);
            App::setFlashLogin('"Logout"', 'SUCCESS', 'danger');
            header('Location: ' . BASEURL);
        }
    }

    public function failLogin() 
    {
        App::setFlashLogin('"Please ', 'LOGIN"', 'danger');
        header('Location: ' . BASEURL);
    }

/* End Controllers */

/* User Controllers */

    /* User Old
        public function user()
        {
            app::authUser();
            $data['title']  = 'Dashboard';
            
            $this -> view('user/temp/head', $data);
            $this -> view('user/temp/nav');
            $this -> view('user/dash');
            $this -> view('user/temp/foot');
        }
    */

    /* Member => User*/

    public function user()
    {
        app::authUser();
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('Model') -> getAllMember();
        $data['page']   = $this -> model('Model') -> getPage(1);
        $data['pages']  = $this -> model('Model') -> getPaginNumber();
        $data['number'] = $this -> model('Model') -> getDataNumber(1);
        
        $this -> view('user/temp/head', $data);
        $this -> view('user/temp/nav');
        $this -> view('user/member/table', $data);
        $this -> view('user/temp/foot');
    }
    
    public function search()
    {
        app::authUser();
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('Model') -> getSearch($_POST);
        $data['number'] = $this -> model('Model') -> getDataNumber(1);

        $this -> view('user/temp/head', $data);
        $this -> view('user/temp/nav');
        $this -> view('user/member/table', $data);
        $this -> view('user/temp/foot');
    }

    public function detail($id)
    {
        app::authUser();
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('Model') -> getDetail($id);

        $this -> view('user/temp/head', $data);
        $this -> view('user/temp/nav');
        $this -> view('user/member/detail', $data);
        $this -> view('user/temp/foot');
    }

/* End Controllers */

}
?>