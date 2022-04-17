<?php

class Login_model {
    
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this -> db = new Database;
    }

    public function getUser() 
    {   
        if(isset($_POST['login'])) {

            $username  = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password  = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            $this -> db -> query('SELECT * FROM ' . $this -> table .' WHERE username=:username');
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

}

?>