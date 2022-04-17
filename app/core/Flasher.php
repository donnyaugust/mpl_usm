<?php

class Flasher {

  public static function setFlash($msg, $act, $box)
  {
    $_SESSION['flash'] = [
        'msg' => $msg,
        'act' => $act,
        'box' => $box,
    ];
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
        'box' => $box,
    ];
  }

  public static function flashLogin()
  {
    if( isset($_SESSION['flashLogin'])) {
        echo '<div class="alert text-center alert-' . $_SESSION['flashLogin']['box'] . ' alert-dismissible fade show" role="alert">
        ' . $_SESSION['flashLogin']['msg'] . ' ' . '<strong>' . $_SESSION['flashLogin']['act'] . '</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>';
      
      unset($_SESSION['flashLogin']);
    }
  }

}

?>