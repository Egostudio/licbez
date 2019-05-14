<?php
    if(!empty($_SERVER['HTTP_USER_AGENT'])){
        session_name(md5($_SERVER['HTTP_USER_AGENT']));
    }
    session_start();
    require_once('../api/Okay.php');
    define('IS_CLIENT', true);
    $okay = new Okay();

    $sort = $okay->request->get('sort');
    
    $_SESSION['sort'] = $sort;
    
    session_write_close();

    print $sort;
