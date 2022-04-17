<?php

class Admin extends Controller {

    public function __construct()
    {
        Auth::authAdmin();
    }

    public function index()
    {
        $data['title']  = 'Admin';

        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/dash');
        $this -> view('admin/temp/foot');

    }

/* Member Controllers */

    public function member()
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('Admin_model') -> getAllMember();
        $data['page']   = $this -> model('Admin_model') -> getPage(1);
        $data['pages']  = $this -> model('Admin_model') -> getPaginNumber();
        $data['number'] = $this -> model('Admin_model') -> getDataNumber(1);
        $data['count']  = $this -> model('Admin_model') -> setCount();
        
        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/member/table', $data);
        $this -> view('admin/member/page', $data);
        $this -> view('admin/member/insert');
        $this -> view('admin/temp/foot');

    }
    
    public function page($page)
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('Admin_model') -> getDataPage($page);
        $data['page']   = $this -> model('Admin_model') -> getPage($page);
        $data['pages']  = $this -> model('Admin_model') -> getPaginNumber();
        $data['number'] = $this -> model('Admin_model') -> getDataNumber($page);
        $data['count']  = $this -> model('Admin_model') -> setCount();

        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/member/table', $data);
        $this -> view('admin/member/page', $data);
        $this -> view('admin/member/insert');
        $this -> view('admin/temp/foot');

    }

    public function search()
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('Admin_model') -> getSearch($_POST);
        $data['number'] = $this -> model('Admin_model') -> getDataNumber(1);
        $data['count']  = $this -> model('Admin_model')  -> setCount();

        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/member/table', $data);
        $this -> view('admin/member/insert');
        $this -> view('admin/temp/foot');

    }

    public function detail($id)
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('Admin_model') -> getDetail($id);

        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/member/detail', $data);
        $this -> view('admin/temp/foot');
    }

    public function insMember() 
    {
        if( $this -> model('Admin_model') -> insertMbr() > 0 ) {
            Flasher::setFlash('SUCCESS', 'DATA INSERT', 'danger');
            header('Location: ' . BASEURL . 'Admin/member');
            exit;
        } else {
            Flasher::setFlash('FAILED INSERT :', 'NIA is already used', 'danger');
            header('Location: ' . BASEURL . 'Admin/member');
            exit;
        }
    }

    public function delMember($id) 
    {
        if( $this -> model('Admin_model') -> deleteMbr($id) > 0 ) {
            Flasher::setFlash('SUCCESS', 'DELETE', 'danger');
            header('Location: ' . BASEURL . 'Admin/member');
            exit;
        } else {
            Flasher::setFlash('FAILED', 'DELETE', 'danger');
            header('Location: ' . BASEURL . 'Admin/member');
            exit;
        }
    }

    public function upFormMember($id)
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('Admin_model') -> getDetail($id);
        
        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/member/update', $data);
        $this -> view('admin/temp/foot');
    }

    public function upMember()
    {
        $id = $this -> model('Admin_model') -> updateMbrId();

        if( $this -> model('Admin_model') -> updateMbr() >= 0 ) {
            Flasher::setFlash('SUCCESS', 'DATA UPDATE', 'danger');
            header('Location: ' . BASEURL . 'Admin/detail/' . $id);
            exit;
        } else {
            Flasher::setFlash('FAILED', 'DATA UPDATE', 'danger');
            header('Location: ' . BASEURL . 'Admin/detail/' . $id);
            exit;
        }
    }

/* End Controllers */

/* User Controllers */

    public function user()
    {
        $data['title']  = 'Dashboard';
        $data['table']  = $this -> model('Admin_model') -> getAllUser();
        
        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/userAdm/table', $data);
        $this -> view('admin/temp/foot');

    }

/* End Controllers */

/* Blog Controllers */

    public function blog()
    {
        $data['title']  = 'Blog';
        $data['table']  = $this -> model('Admin_model') -> getAllBlog();
        $data['count']  = $this -> model('Admin_model') -> setCountBlog();
        
        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/blog/table', $data);
        $this -> view('admin/temp/foot');
    }

    public function detailBlog($id)
    {
        $data['title']  = 'Blog';
        $data['table']  = $this -> model('Admin_model') -> getDetailBlog($id);

        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/blog/detail', $data);
        $this -> view('admin/temp/foot');
    }

    public function insBlogForm() 
    {
        $data['title']  = 'Blog';
        
        $this -> view('admin/temp/head', $data);
        $this -> view('admin/temp/nav');
        $this -> view('admin/blog/insert');
        $this -> view('admin/temp/foot');
    }

    public function insBlog() 
    {
        $id = $this -> model('Admin_model') -> insertBlgId();

        if( $this -> model('Admin_model') -> insertBlg() > 0 ) {
            Flasher::setFlash('SUCCESS', 'DATA UPDATE', 'danger');
            header('Location: ' . BASEURL . 'Admin/detailBlog/' . $id);
            exit;
        } else {
            Flasher::setFlash('FAILED', 'DATA UPDATE', 'danger');
            header('Location: ' . BASEURL . 'Admin/blog');
            exit;
        }
    }
    
/* End Controllers */

}
?>