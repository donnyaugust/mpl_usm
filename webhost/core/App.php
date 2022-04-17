<?php

class App {

    protected $controller = 'Cont';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this -> parseURL();
        
        /* controller */
        if (file_exists('core/' . $url[0] . '.php')) {
            $this -> controller = $url[0];
            unset ($url[0]);
        }

        require_once 'core/' . $this -> controller . '.php';
        $this -> controller = new $this -> controller;

        /* method */
        if (isset($url[1])) {
            if (method_exists($this -> controller, $url[1])) {
                $this -> method = $url[1];
                unset ($url[1]);
            }
        }

        /* params */
        if (!empty($url)) {
            $this -> params = array_values($url);
        }

        /* run controller, method, params */
        call_user_func_array([$this -> controller, $this -> method], $this -> params);
    }

    public function parseURL()
    {
        if( isset($_GET['url']) != null ) {
            $url = rtrim ($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }

        if( isset($_GET['url']) == null ) {
            $url = array('index');
            return $url;
        }
    }

/* Flasher App*/

    public static function setFlash($msg, $act, $box)
    {
        $_SESSION['flash'] = [
        'msg' => $msg,
        'act' => $act,
        'box' => $box];
    }
    
    public static function flash()
    {
        if( isset($_SESSION['flash'])) {
            echo '<div class="alert text-center alert-' . $_SESSION['flash']['box'] . ' alert-dismissible fade show" role="alert">
            <strong>' . $_SESSION['flash']['msg'] . ' ' . $_SESSION['flash']['act'] . '</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
      
            unset($_SESSION['flash']);
        }
    }

    public static function setFlashLogin($msg, $act, $box)
    {
        $_SESSION['flashLogin'] = [
        'msg' => $msg,
        'act' => $act,
        'box' => $box];
    }

    public function flashLogin()
    {
        if( isset($_SESSION['flashLogin'])) {
            echo '<div class="alert text-center alert-' . $_SESSION['flashLogin']['box'] . ' alert-dismissible fade show" role="alert">' . $_SESSION['flashLogin']['msg'] . ' ' . '<strong>' . $_SESSION['flashLogin']['act'] . '</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>';
      
            unset($_SESSION['flashLogin']);
        }
    }
/* End App*/

/* Auth App */

    public static function authIndex()
    {
        if(isset($_SESSION['Admin'])) {
            header('Location: ' . BASEURL . 'cont/admin');
        }else if(isset($_SESSION['User'])) {
            header('Location: ' . BASEURL . 'cont/user');
        }
    }

    public static function authAdmin()
    {
        if(!isset($_SESSION['Admin'])) {
            header('Location: ' . BASEURL . 'cont/faillogin');
        }
    }

    public static function authUser()
    {
        if(!isset($_SESSION['User'])) {
            header('Location: ' . BASEURL . 'cont/faillogin');
        }
    }
/* End App */

}
?>