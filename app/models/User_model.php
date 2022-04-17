<?php

class User_model {
    
    private $db;
    private $tbl_member = 'tb_anggota';
    private $limit      = 50;
    private $page       = 1;
    private $totalRecord;

    public function __construct()
    {
        $this -> db = new Database;
    }

    // Member Model

    public function setRecord()
    {
        $this -> db -> query('SELECT * FROM ' . $this -> tbl_member);
        $this -> db -> execute();
        $this -> totalRecord = $this -> db -> forCount();
    }

    public function getDetail($id) 
    {
        $this -> db -> query('SELECT * FROM ' . $this -> tbl_member .' WHERE id=:id');
        $this -> db -> bind('id', $id);
        return $this -> db -> resultSetObj();
    }

    public function getPaginNumber()
    {
        $this -> setRecord();
        return ceil($this -> totalRecord / $this -> limit);
    }

    public function getAllMember()
    {
        $start = 0;

        $this -> db -> query('SELECT * FROM ' . $this -> tbl_member . ' ORDER BY id ASC LIMIT ' . $start . ', ' . $this -> limit);

        return $this -> db -> resultSetObj();
    }

    public function getPage($page)
    {
        return $this -> page  = $page;
    }

    public function getDataPage($page)
    {
        $start = 0;
        $this -> page  = $page;

        if($this -> page > 1)
        {
            $start = ($this -> page * $this -> limit) - $this -> limit;
        }
            
        $this -> db -> query('SELECT * FROM ' . $this -> tbl_member . ' ORDER BY id ASC LIMIT ' . $start . ', ' . $this -> limit);
        
        return $this -> db -> resultSetObj();
    }

    public function getSearch()
    {
        if (isset($_POST['search']) != "") {

            $page = $_POST['search'];

            $this -> page = $page;
                
            $this -> db -> query('SELECT * FROM ' . $this -> tbl_member . 
            ' WHERE nama LIKE "%' . $this -> page . 
            '%" OR nama_lapangan LIKE "%' . $this -> page . 
            '%" OR nama_angkatan LIKE "%' . $this -> page . '%" ORDER BY id ASC');
            
            return $this -> db -> resultSetObj();
        } else {
            header('Location: ' . BASEURL . '/user/member');
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
}

?>