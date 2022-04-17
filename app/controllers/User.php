<?php

class User extends Controller {

    public function __construct()
    {
        Auth::authUser();
    }

    public function index()
    {
        $data['title']  = 'Dashboard';

        $this -> view('user/temp/head', $data);
        $this -> view('user/temp/nav');
        $this -> view('user/dash');
        $this -> view('user/temp/foot');

    }

    // Member Controllers 

    public function member()
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('User_model') -> getAllMember();
        $data['page']   = $this -> model('User_model') -> getPage(1);
        $data['pages']  = $this -> model('User_model') -> getPaginNumber();
        $data['number'] = $this -> model('User_model') -> getDataNumber(1);
        
        $this -> view('user/temp/head', $data);
        $this -> view('user/temp/nav');
        $this -> view('user/member/table', $data);
        $this -> view('user/member/page', $data);
        $this -> view('user/temp/foot');

    }
    
    public function page($page)
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('User_model') -> getDataPage($page);
        $data['page']   = $this -> model('User_model') -> getPage($page);
        $data['pages']  = $this -> model('User_model') -> getPaginNumber();
        $data['number'] = $this -> model('User_model') -> getDataNumber($page);

        $this -> view('user/temp/head', $data);
        $this -> view('user/temp/nav');
        $this -> view('user/member/table', $data);
        $this -> view('user/member/page', $data);
        $this -> view('user/temp/foot');

    }

    public function search()
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('User_model') -> getSearch($_POST);
        $data['number'] = $this -> model('User_model') -> getDataNumber(1);

        $this -> view('user/temp/head', $data);
        $this -> view('user/temp/nav');
        $this -> view('user/member/table', $data);
        $this -> view('user/temp/foot');

    }

    public function detail($id)
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('User_model') -> getDetail($id);

        $this -> view('user/temp/head', $data);
        $this -> view('user/temp/nav');
        $this -> view('user/member/detail', $data);
        $this -> view('user/temp/foot');

    }
    
}
?>