<?php

class Home extends Controller {

    public function __construct()
    {
        if(isset($_SESSION['Admin'])) {
            header('Location: ' . BASEURL . 'Admin');
        } else if(isset($_SESSION['User'])) {
            header('Location: ' . BASEURL . 'User');
        }    
    }

    public function index()
    {
        $data['title']  = 'MAPALA USM';

        $this -> view('home/temp/head', $data);
        $this -> view('home/heading');
        $this -> view('home/temp/nav');
        $this -> view('home/caroul');
        $this -> view('home/content');
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
}

?>