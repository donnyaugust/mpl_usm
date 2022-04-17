<?php

if( !session_id() ) {
    session_start();
}

require_once 'core/app.php';
require_once 'core/cont.php';
require_once 'core/config.php';
require_once 'core/model.php';

$app = new App;

?>