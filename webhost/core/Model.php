<?php

class Model {
    
    private $tb_user       = 'user';
    private $tb_member     = 'tb_anggota';
    private $limit         = 1000;
    private $page          = 1;
    private $totalRecord;
    private $db;

    public function __construct()
    {
        $this -> db = new Config;
    }

/* Login Model */

    public function getUser() 
    {   
        if(isset($_POST['login'])) {

            $username  = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password  = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            $this -> db -> query('SELECT * FROM ' . $this -> tb_user .' WHERE username=:username');
            $this -> db -> bind('username', $username);
            $user = $this -> db -> single();

            $chek = $user['user'];

            if($user > 0 && $chek == 'Admin') {
                if(password_verify($password, $user['password'])) {
                    $_SESSION['Admin'] = $user;
                    return 'Admin';
                }
            }else if($user > 0 && $chek == 'Member') {
                if(password_verify($password, $user['password'])) {
                    $_SESSION['User'] = $user;
                    return 'Member';
                }
            }
        }
    }

/* End Model*/

/* Member Table Model */

    public function setRecord()
    {
        $this -> db -> query('SELECT * FROM ' . $this -> tb_member);
        $this -> db -> execute();
        $this -> totalRecord = $this -> db -> forCount();
    }

    public function getAllMember()
    {
        $start = 0;

        $this -> db -> query('SELECT * FROM ' . $this -> tb_member . ' ORDER BY id ASC LIMIT ' . $start . ', ' . $this -> limit);

        return $this -> db -> resultSetObj();
    }

    public function getDetail($id) 
    {
        $this -> db -> query('SELECT * FROM ' . $this -> tb_member .' WHERE id=:id');
        $this -> db -> bind('id', $id);
        return $this -> db -> resultSetObj();
    }

    public function getPaginNumber()
    {
        $this -> setRecord();
        return ceil($this -> totalRecord / $this -> limit);
    }

    public function getPage($page)
    {
        return $this -> page  = (int)$page;
    }

    public function getDataPage($page)
    {
        $start = 0;
        $this -> page  = (int)$page;

        if($this -> page > 1)
        {
            $start = ($this -> page * $this -> limit) - $this -> limit;
        }
            
        $this -> db -> query('SELECT * FROM ' . $this -> tb_member . ' ORDER BY id ASC LIMIT ' . $start . ', ' . $this -> limit);
        
        return $this -> db -> resultSetObj();
    }

    public function getSearch()
    {
        if (isset($_POST['search']) != "") {

            $page = $_POST['search'];

            $this -> page = $page;
                
            $this -> db -> query('SELECT * FROM ' . $this -> tb_member . 
            ' WHERE nama LIKE "%' . $this -> page . 
            '%" OR nama_lapangan LIKE "%' . $this -> page . 
            '%" OR nama_angkatan LIKE "%' . $this -> page . '%" ORDER BY id ASC');
            
            return $this -> db -> resultSetObj();
        } else {
            header('Location: ' . BASEURL . 'cont/member');
        }
    }

    public function getDataNumber($page)
    {
        $number = 0;
        $this -> page = $page;

        if($this -> page > 1) {
            $number = $this -> page * $this -> limit - $this -> limit;
            return $this -> number = $number;
        }
    }

/* End Model*/

}

?>