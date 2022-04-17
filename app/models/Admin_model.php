<?php

class Admin_model {
    
    private $db;
    private $tbl_member = 'tb_anggota';
    private $tbl_blog   = 'tb_blog';
    private $tbl_user   = 'user';
    private $limit      = 50;
    private $page       = 1;
    private $totalRecord;

    public function __construct()
    {
        $this -> db = new Database;
    }

/* Member Model */

    public function setCount()
    {
        $this -> db -> query('SELECT * FROM ' . $this -> tbl_member);
        $this -> db -> execute();
        return $this -> db -> forCount();
    }

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
            header('Location: ' . BASEURL . '/admin/member');
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

    public function insertMbr()
    {
        if(isset($_POST['submit'])) {
    
            $nia             = filter_input(INPUT_POST, 'nia', FILTER_SANITIZE_STRING);
            $nama            = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
            $nama_lapangan   = filter_input(INPUT_POST, 'nama_lapangan', FILTER_SANITIZE_STRING);
            $nama_angkatan   = filter_input(INPUT_POST, 'nama_angkatan', FILTER_SANITIZE_STRING);
            $jenis_kelamin   = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);
            $tempat_lahir    = filter_input(INPUT_POST, 'tempat_lahir', FILTER_SANITIZE_STRING);
            $tanggal_lahir   = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING);
            $progdi          = filter_input(INPUT_POST, 'progdi', FILTER_SANITIZE_STRING);
            $nim             = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_STRING);
            $alamat          = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
            $agama           = filter_input(INPUT_POST, 'agama', FILTER_SANITIZE_STRING);
            $gol_darah       = filter_input(INPUT_POST, 'gol_darah', FILTER_SANITIZE_STRING);
            $kewarganegaraan = filter_input(INPUT_POST, 'kewarganegaraan', FILTER_SANITIZE_STRING);
            $kontak          = filter_input(INPUT_POST, 'kontak', FILTER_SANITIZE_STRING);
            $status          = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);
        
            $ex = explode(".", $nia);
            $id = $ex[3];
        
            $this -> db -> query('SELECT * FROM ' . $this -> tbl_member . ' WHERE nia=:nia');
            $this -> db -> bind('nia', $nia);
            $check = $this -> db -> single();

            if($check == 0) {

                $this -> db -> query('INSERT INTO ' . $this -> tbl_member . ' (id, nia, nama, nama_lapangan, nama_angkatan, jenis_kelamin, tempat_lahir, tanggal_lahir, progdi, nim, alamat, agama, gol_darah, kewarganegaraan, kontak, status) VALUES (:id, :nia, :nama, :nama_lapangan, :nama_angkatan, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :progdi, :nim, :alamat, :agama, :gol_darah, :kewarganegaraan, :kontak, :status)');
                
                $this -> db -> bind('id', $id);
                $this -> db -> bind('nia', $nia);
                $this -> db -> bind('nama', $nama);
                $this -> db -> bind('nama_lapangan', $nama_lapangan);
                $this -> db -> bind('nama_angkatan', $nama_angkatan);
                $this -> db -> bind('jenis_kelamin', $jenis_kelamin);
                $this -> db -> bind('tempat_lahir', $tempat_lahir);
                $this -> db -> bind('tanggal_lahir', $tanggal_lahir);
                $this -> db -> bind('progdi', $progdi);
                $this -> db -> bind('nim', $nim);
                $this -> db -> bind('alamat', $alamat);
                $this -> db -> bind('agama', $agama);
                $this -> db -> bind('gol_darah', $gol_darah);
                $this -> db -> bind('kewarganegaraan', $kewarganegaraan);
                $this -> db -> bind('kontak', $kontak);
                $this -> db -> bind('status', $status);
                    
                $this -> db -> execute();

                return $this -> db -> forCount();
            }
        }
    }

    public function deleteMbr($id) 
    {
        $this -> db -> query('DELETE FROM ' . $this -> tbl_member . ' WHERE id=:id');
        $this -> db -> bind('id', $id);

        $this -> db -> execute();

        return $this -> db -> forCount();
    }

    public function updateMbr()
    {
        if(isset($_POST['submit'])) {
    
            $id              = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
            $nama            = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
            $nama_lapangan   = filter_input(INPUT_POST, 'nama_lapangan', FILTER_SANITIZE_STRING);
            $nama_angkatan   = filter_input(INPUT_POST, 'nama_angkatan', FILTER_SANITIZE_STRING);
            $jenis_kelamin   = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);
            $tempat_lahir    = filter_input(INPUT_POST, 'tempat_lahir', FILTER_SANITIZE_STRING);
            $tanggal_lahir   = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING);
            $progdi          = filter_input(INPUT_POST, 'progdi', FILTER_SANITIZE_STRING);
            $nim             = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_STRING);
            $alamat          = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
            $agama           = filter_input(INPUT_POST, 'agama', FILTER_SANITIZE_STRING);
            $gol_darah       = filter_input(INPUT_POST, 'gol_darah', FILTER_SANITIZE_STRING);
            $kewarganegaraan = filter_input(INPUT_POST, 'kewarganegaraan', FILTER_SANITIZE_STRING);
            $kontak          = filter_input(INPUT_POST, 'kontak', FILTER_SANITIZE_STRING);
            $status          = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);

            $this -> db -> query('UPDATE ' . $this -> tbl_member . ' SET nama=:nama, nama_lapangan=:nama_lapangan, nama_angkatan=:nama_angkatan, jenis_kelamin=:jenis_kelamin, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, progdi=:progdi, nim=:nim, alamat=:alamat, agama=:agama, gol_darah=:gol_darah, kewarganegaraan=:kewarganegaraan, kontak=:kontak, status=:status WHERE id=:id');
            
            $this -> db -> bind('id', $id);
            $this -> db -> bind('nama', $nama);
            $this -> db -> bind('nama_lapangan', $nama_lapangan);
            $this -> db -> bind('nama_angkatan', $nama_angkatan);
            $this -> db -> bind('jenis_kelamin', $jenis_kelamin);
            $this -> db -> bind('tempat_lahir', $tempat_lahir);
            $this -> db -> bind('tanggal_lahir', $tanggal_lahir);
            $this -> db -> bind('progdi', $progdi);
            $this -> db -> bind('nim', $nim);
            $this -> db -> bind('alamat', $alamat);
            $this -> db -> bind('agama', $agama);
            $this -> db -> bind('gol_darah', $gol_darah);
            $this -> db -> bind('kewarganegaraan', $kewarganegaraan);
            $this -> db -> bind('kontak', $kontak);
            $this -> db -> bind('status', $status);
                
            $this -> db -> execute();

            return $this -> db -> forCount();
        }
    }

    public function updateMbrId()
    {
        if(isset($_POST['submit'])) {
    
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
            
            return $id;
        }
    }

/* End Model */

/* User Model */

    public function getAllUser() 
    {
        $this -> db -> query('SELECT * FROM ' . $this -> tbl_user . ' ORDER BY user ASC');
        return $this -> db -> resultSetObj();
    }

/* End Model */

/* Blog Model */

public function setCountBlog()
    {
        $this -> db -> query('SELECT * FROM ' . $this -> tbl_blog);
        $this -> db -> execute();
        return $this -> db -> forCount();
    }

    public function getAllBlog() 
    {
        $this -> db -> query('SELECT * FROM ' . $this -> tbl_blog . ' ORDER BY id ASC');
        return $this -> db -> resultSetObj();
    }

    public function getDetailBlog($id) 
    {
        $this -> db -> query('SELECT * FROM ' . $this -> tbl_blog .' WHERE id=:id');
        $this -> db -> bind('id', $id);
        return $this -> db -> resultSetObj();
    }

    public function insertBlg()
    {
        if(isset($_POST['submit'])) {
    
            $title    = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $text     = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
            $date     = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING);
            $author   = filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING);

            $ex = explode(" ", $title);
            $id = $ex[0] . "-" . $ex[1] . "-" . $ex[2] . $date;
        
            $this -> db -> query('INSERT INTO ' . $this -> tbl_blog . ' (id, title, text, date, author) VALUES (:id, :title, :text, :date, :author)');
                
            $this -> db -> bind('id', $id);
            $this -> db -> bind('title', $title);
            $this -> db -> bind('text', $text);
            $this -> db -> bind('date', $date);
            $this -> db -> bind('author', $author);
        
            $this -> db -> execute();

            $this -> db -> query('SELECT * FROM ' . $this -> tbl_blog .' WHERE id=:id');
            $this -> db -> bind('id', $id);
            return $this -> db -> resultSetObj();
        } else {
            return false;
        }
    }

/* End Model */

}
?>